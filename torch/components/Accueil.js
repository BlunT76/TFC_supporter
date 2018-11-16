import React from 'react';
import { StyleSheet, Text, View, Dimensions, PixelRatio, TouchableOpacity, Image } from 'react-native';



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


export default class Accueil extends React.Component {
    constructor(props) {
        super(props);
        name: Accueil,
        this.state={
            
        };
}
  // active ce qu'on veut au chargement du component
  async componentDidMount() {
    
  }


  //componentWillUnmount desactive ce qu'on veut lorsque l'on quitte la page ou l'app ou le component
  componentWillUnmount(){
    
  }

  

  render() {
    return (
      <View style={styles.container}>
        <Text>accueil</Text>
      </View>
    );
  }
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    width: widthPercentageToDP("100%"),
    height: heightPercentageToDP("100%"),
    backgroundColor: 'green',
    // alignItems: "flex-end",
    // alignContent: "space-around",
    // justifyContent: "space-around"
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
    color: "#3F3154",
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
