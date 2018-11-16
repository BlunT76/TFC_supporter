import React from 'react';
import { StyleSheet, Text, View, Dimensions, PixelRatio, TouchableOpacity, TouchableHighlight, Image, Button } from 'react-native';
import OlaFlash from './components/OlaFlash.js'
import BottomBar from './components/BottomBar.js'
import Accueil from './components/Accueil.js'
import { Ionicons } from '@expo/vector-icons';

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


export default class App extends React.Component {
  bgTabColorActive= "#3F3154"
  bgTabColorInactive= "#C0B8D3"

  constructor(props) {
    super(props);
  }
  state={
    isActive: [true, false, false, false, false]
  };
  
  // active ce qu'on veut au chargement du component
  async componentDidMount() {
    
  }


  //componentWillUnmount desactive ce qu'on veut lorsque l'on quitte la page ou l'app ou le component
  componentWillUnmount(){
    
  }

  _handlePage = (id) =>{
    let a = this.state.isActive.map((x,i)=> i==id ? true : false)
    this.setState({isActive: a}, ()=>{
      console.log(this.state.isActive)
    })
    
    //this.state.isActive.fill(false)
    
    
    //console.log(id)
}
  
  render() {
    return (
      <View style={styles.container}>
        
        {this.state.isActive[0] &&<Accueil name= 'Accueil' style={styles.page}/>}
        {this.state.isActive[3] &&<OlaFlash name='OlaFlash' style={styles.page}/>}
        
        {/* <View style={styles.bottomBar}> */}
          <View style={styles.buttonContainer}>
          <TouchableOpacity onPress={() => this._handlePage(0)} style={styles.button}>
            <Ionicons name="md-home" size={32} color="#3F3154" />
            <Text>Home</Text>
          </TouchableOpacity>

          <TouchableOpacity onPress={() => this._handlePage(1)} style={styles.button}>
            <Ionicons name="md-football" size={32} color="#3F3154" />
            <Text>MVP</Text>
          </TouchableOpacity>

          <TouchableOpacity onPress={() => this._handlePage(2)} style={styles.button}>
            <Ionicons name="md-camera" size={32} color="#3F3154" />
            <Text>Photos</Text>
          </TouchableOpacity>

          <TouchableOpacity onPress={() => this._handlePage(3)} style={styles.button}>
            <Ionicons name="md-flash" size={32} color="#3F3154" />
            <Text>OlaFlash</Text>
          </TouchableOpacity>

          <TouchableOpacity onPress={() => this._handlePage(4)} style={styles.button}>
            <Ionicons name="md-information-circle-outline" size={32} color="#3F3154" />
            <Text>Info</Text>
          </TouchableOpacity>
          </View>
        {/* </View> */}

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
    paddingTop: heightPercentageToDP("3%"),
    //alignItems: "center",
    // alignContent: "space-around",
    //justifyContent: "space-around"
  },
  page: {
    width: widthPercentageToDP("100%"),
    height: heightPercentageToDP("85%"),
  },
  bottomBar: {
    width: widthPercentageToDP("100%"),
    height: heightPercentageToDP("15%"),
    
    //flexDirection: "row",
    //justifyContent: "flex-end",
    //alignItems: 'center',
    backgroundColor: 'red',
    
    borderWidth: 2,
    // borderRadius: 360,
    borderColor: "#fff",
    
  },
  buttonContainer: {
    width: widthPercentageToDP("100%"),
    height: heightPercentageToDP("10%"),
    flexDirection: 'row',
    justifyContent: "space-between",
    // width: widthPercentageToDP("80%"),
    // height: widthPercentageToDP("80%"),
    // justifyContent: 'center',
    // alignItems: 'center',
    backgroundColor: '#fff',
    
    
    
  },
  button: {
    
    flex: 1,
    justifyContent: "center",
    alignItems: 'center',
    backgroundColor: '#C0B8D3',
    //margin: 1,
    //padding: 10,
    // borderWidth: 0,
    // borderRadius: 360,
    // borderColor: "#fff",
    width: widthPercentageToDP("20%"),
    height: widthPercentageToDP("20%"),
  
    
    //padding: 10,
  },
  textButton: {
    //position: 'absolute',
    color: "#3F3154",
    borderWidth: 0,
    borderRadius: 360,
    borderColor: "#fff",
    // fontSize: heightPercentageToDP("15%"),
    // paddingTop: heightPercentageToDP("13%"),
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
