import React from 'react';
import { StyleSheet, Text, View, Dimensions, PixelRatio, TouchableOpacity, Image, Slider, AsyncStorage } from 'react-native';
import { Ionicons } from '@expo/vector-icons';
import { Accelerometer, Permissions } from 'expo';
import Torch from 'react-native-torch';

//detecte les dimensions de l'écran
const widthPercentageToDP = widthPercent => {
  const screenWidth = Dimensions.get("window").width;
  // Convert string input to decimal number
  const elemWidth = parseFloat(widthPercent);
  return PixelRatio.roundToNearestPixel((screenWidth * elemWidth) / 100);
};
const heightPercentageToDP = heightPercent => {
  const screenHeight = Dimensions.get("window").height;
  // Convert string input to decimal number
  const elemHeight = parseFloat(heightPercent);
  return PixelRatio.roundToNearestPixel((screenHeight * elemHeight) / 100);
};
export { widthPercentageToDP, heightPercentageToDP };


export default class OlaFlash extends React.Component {
  _intervalFlash= false;
  pointDuration= 50

  state={
    hasCameraPermission: null,
    accelerometerData: {},

    olaTimer: null,
    olaIsActive: true,
    olaIsRendering: false,
    olaText: 'OFF',
    olaTextColor: '#E62D27',

    optionsIsVisible: false,
    interFlash: 50,
  };
  
  // active ce qu'on veut au chargement du component
  async componentDidMount() {
    const { status } = await Permissions.askAsync(Permissions.CAMERA) // demande la permission d'utiliser la camera
    this.setState({ hasCameraPermission: status === 'granted' }); // garde la permission en state
    this._retrieveData() //recupere les données sauvegardées du mobile(intervalle du flash)
  }


  //componentWillUnmount desactive ce qu'on veut lorsque l'on quitte la page ou l'app ou le component
  componentWillUnmount(){
    clearInterval(this._intervalFlash) // eteint le setInterval du flash
    this._intervalFlash = false // transforme le setInterval en false
    this._unsubscribe() // eteint le listener de l'accelerometer
  }

  sleep = (ms) => {
    return new Promise(resolve => setTimeout(resolve, ms)); // timer qui eteint le flash au bout de 50ms (pointDuration)
  }

  // allume le flash, appelle sleep puis eteint le flash
  _olaStart = () => {
    return new Promise(async(resolve) => {
      Torch.switchState(true);
      await this.sleep(this.state.interFlash);
      Torch.switchState(false);
      resolve();
    });
  }

  //Affiche/masque le panneau des options
  _handleOptions = () => {
    this.setState({optionsIsVisible: !this.state.optionsIsVisible})
  }

  //OlaFlash settings, change les options
  _flashSettingsSet = (val) => {
    if (this._intervalFlash){
      this._handlePress()
    }
    this.setState({interFlash: val})
    AsyncStorage.setItem('interFlash', val.toString());
    Accelerometer.setUpdateInterval(this.state.interFlash*3)
  }
  
  // active/desactive la fonctionnalité du OlaFlash
  _handlePress = () => {
    if (this._intervalFlash){
      clearInterval(this._intervalFlash);
      this._intervalFlash = false
      this._unsubscribe();
      this.setState({olaText: 'OFF', olaTextColor:'#E62D27'})
    } else {
      this._subscribe()
      this.setState({olaText: 'ON', olaTextColor:'green'})
      this._intervalFlash = setInterval(() => {
        if(this.state.accelerometerData.y > 0.6){
          this._olaStart()
        } 
      }, this.state.interFlash*2);
    }
  }
  
  // active l'accelerometer
  _subscribe = () => {
    this._subscription = Accelerometer.addListener(e => {
      this.setState({ accelerometerData: e });
    });
  }

  // desactive l'accelerometer
  _unsubscribe = () => {
    this._subscription && this._subscription.remove();
    this._subscription = null;
  }

  //enregistre des données sur le mobile
  _storeData = async (key, value) => {
    try {
      await AsyncStorage.setItem(key, value);
    } catch (error) {
      // Error saving data
    }
  }

  //recupere les données enregistrées sur le mobile
  _retrieveData = async () => {
    try {
      const value = await AsyncStorage.getItem('interFlash');
      if (value !== null) {
        console.log(value)
        this.setState({interFlash: +value}, () => {
          Accelerometer.setUpdateInterval(this.state.interFlash*3);
        })
      }
    } catch (error) {
      // Error retrieving data
    }
  }

  render() {
    return (
      <View style={styles.container}>
        {this.state.optionsIsVisible &&<View style={styles.optionsPanel}>
          <Text style={{textAlign: "center"}}>
            Intervalle: {this.state.interFlash}ms
          </Text>
          <Slider 
            style={styles.slider}
            minimumTrackTintColor= {'#3F3154'}
            thumbTintColor= {'#3F3154'}
            value={this.state.interFlash}
            minimumValue={50}
            maximumValue={300}
            step={50}
            onValueChange={(val) => this._flashSettingsSet(val)} 
          />
          <Text>Réglage de l'intervalle entre les Flash {"\n"}
          Augmenter la valeur si les flashs ont du mal a s'éteindre
          </Text>
        </View>}

        <TouchableOpacity onPress={() => this._handleOptions()} style={styles.options}>
          <Ionicons name="md-settings" size={64} color="#C0B8D3" />
        </TouchableOpacity>

        <TouchableOpacity onPress={() => this._handlePress()} style={styles.button}>
          <Image source={require('../assets/Logo_Toulouse_FC.png')}  style={styles.img}/>
          <Text style={[styles.textButton, { color: this.state.olaTextColor }]}>{ this.state.olaText }</Text>
        </TouchableOpacity>

      </View>
    );
  }
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    width: widthPercentageToDP("100%"),
    height: heightPercentageToDP("100%"),
    backgroundColor: '#3F3154',
    paddingTop: heightPercentageToDP("1%"),
    alignItems: "center",
    justifyContent: "space-around"
  },
  buttonContainer: {
    width: widthPercentageToDP("80%"),
    height: widthPercentageToDP("80%"),
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: '#3F3154',
  },
  button: {
    width: widthPercentageToDP("80%"),
    height: widthPercentageToDP("80%"),
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: "#fff",
    borderWidth: heightPercentageToDP("1%"),
    borderRadius: 360,
    borderColor: "transparent",
  },
  textButton: {
    position: 'absolute',
    color: "#E62D27", //jaune #FFED00
    fontSize: heightPercentageToDP("15%"),
    paddingTop: heightPercentageToDP("13%"),
  },
  img: {
    width: widthPercentageToDP("80%"),
    height: widthPercentageToDP("80%"),
  },
  sensor: {
    marginTop: 15,
    paddingHorizontal: 10,
  },
  options: {
    position: "absolute",
    top: 0,
    right: 0,
    justifyContent: "center",
    alignItems: "center",
    backgroundColor: '#3F3154',
    width: widthPercentageToDP("20%"),
    height: widthPercentageToDP("20%"),
  },
  optionsPanel: {
    flex: 1,
    flexDirection: "column",
    paddingTop: widthPercentageToDP("20%"),
    alignSelf: "flex-start",
    backgroundColor: '#C0B8D3',
    width: widthPercentageToDP("100%"),
    height: heightPercentageToDP("30%"),
  },
  slider: {
    width: widthPercentageToDP("80%"),
    alignSelf: "center",
    marginTop: heightPercentageToDP("2%"),
    marginBottom: heightPercentageToDP("2%"),
  },
  titre:{
    fontSize: heightPercentageToDP("5%"),
    textAlign: "center",
    color: "#C0B8D3",
    margin: widthPercentageToDP("1%")
  }
});
