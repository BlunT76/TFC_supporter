import React from 'react';
import { StyleSheet, Text, View, Dimensions, PixelRatio } from 'react-native';



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


export default class Photos extends React.Component {
    constructor(props) {
        super(props);
        name: Photos,
        this.state={
          dataSource: null,
          isLoading: false,
        };
}
  // active ce qu'on veut au chargement du component
  async componentWillMount() {
    return fetch('http://192.168.1.36:8000/api/players')
      .then((response) => response.json())
      .then((responseJson) => {
        console.log(responseJson.players)
        this.setState({
          isLoading: true,
          dataSource: responseJson.players,
        }, function(){
          this.setState({
            isLoading: false,
          })
          console.log(this.state.dataSource)
        });

      })
      .catch((error) =>{
        console.log(error);
      });
    
}
  componentDidMount(){
    
  }

  //componentWillUnmount desactive ce qu'on veut lorsque l'on quitte la page ou l'app ou le component
  componentWillUnmount(){
    
  }

  
  

  render() {
    return (
      <View style={styles.container}>
        <Text style={styles.titre}>Envoie tes plus belles Photos de Supporter</Text>
        
        
        
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
    // alignItems: "flex-end",
    // alignContent: "space-around",
    // justifyContent: "space-around"
  },
  titre:{
    fontSize: heightPercentageToDP("5%"),
    textAlign: "center",
    color: "#C0B8D3",
    margin: widthPercentageToDP("1%")
  }
});
