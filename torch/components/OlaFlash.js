import React from 'react';
import { StyleSheet, Text, View, Dimensions, PixelRatio, TouchableOpacity, Image } from 'react-native';

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
    olaTextColor: '#E62D27'
  };
  
  // active ce qu'on veut au chargement du component
  async componentDidMount() {
    const { status } = await Permissions.askAsync(Permissions.CAMERA) // demande la permission d'utiliser la camera
    this.setState({ hasCameraPermission: status === 'granted' }); // garde la permission en state
    Accelerometer.setUpdateInterval(150); //definit l'intervalle en ms du listener de l'accelerometer
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
    //console.log('olastart')
      return new Promise(async(resolve) => {
        Torch.switchState(true);
        await this.sleep(this.pointDuration);
        Torch.switchState(false);
        resolve();
      });
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
        }, 100);
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

  render() {
    let { x, y, z } = this.state.accelerometerData;
    return (
      <View style={styles.container}>
          <TouchableOpacity onPress={() => this._handlePress()} style={styles.button}>
            <Image source={require('../assets/Logo_Toulouse_FC.png')}  style={styles.img}/>
            <Text style={[styles.textButton, { color: this.state.olaTextColor }]}>{ this.state.olaText }</Text>
          </TouchableOpacity>
      </View>
    );
  }
}

// arrondi les resultats de l'accelerometer pour l'affichage, a supprimer plus tard
function round(n) {
  if (!n) {
    return 0;
  }
  return Math.floor(n * 100) / 100;
}



const styles = StyleSheet.create({
  container: {
    flex: 1,
    width: widthPercentageToDP("100%"),
    height: heightPercentageToDP("100%"),
    backgroundColor: '#3F3154',
    paddingTop: heightPercentageToDP("3%"),
    alignItems: "center",
    // alignContent: "space-around",
    justifyContent: "space-around"
  },
  buttonContainer: {
    width: widthPercentageToDP("80%"),
    height: widthPercentageToDP("80%"),
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: '#3F3154',
    
    // borderWidth: heightPercentageToDP("5%"),
    // borderRadius: 360,
    // borderColor: "#fff",
    
  },
  button: {
    width: widthPercentageToDP("80%"),
    height: widthPercentageToDP("80%"),
    //flex: 1,
    justifyContent: 'center',
    alignItems: 'center',
    backgroundColor: "#fff",
    borderWidth: heightPercentageToDP("1%"),
    borderRadius: 360,
    borderColor: "transparent",
    
  
    
    //padding: 10,
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
  middleButton: {
    borderLeftWidth: 1,
    borderRightWidth: 1,
    borderColor: '#ccc',
  },
  sensor: {
    marginTop: 15,
    paddingHorizontal: 10,
  },
});
