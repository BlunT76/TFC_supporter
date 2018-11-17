import React from 'react';
import { StyleSheet, Text, View, Dimensions, PixelRatio, FlatList, TouchableOpacity, Image, Button, AsyncStorage } from 'react-native';



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


export default class Mvp extends React.Component {
    constructor(props) {
        super(props);
        name: Mvp,
        this.state={
          dataSource: null,
          isLoading: false,
        };
}
  // active ce qu'on veut au chargement du component
  async componentWillMount() {
    
}
  componentDidMount(){
    const value =  AsyncStorage.getItem('aVoter');
      if (value !== null) {
        console.log(value)
        this.setState({aVoter: value}, () => {
        })
    }

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

  //componentWillUnmount desactive ce qu'on veut lorsque l'on quitte la page ou l'app ou le component
  componentWillUnmount(){
    
  }

  _voter = (e) => {
    console.log(e)
    this.setState({aVoter: true})
    AsyncStorage.setItem('aVoter', 'true');
  }
  

  render() {
    return (
      <View style={styles.container}>
        <Text style={styles.titre}>Vote pour le Toulousain du Match !!!</Text>
        
        <FlatList
          data={this.state.dataSource}
          showsVerticalScrollIndicator={true}
          renderItem={({ item }) => 
          <View style={styles.items}>
          <Image source={{uri: item.portrait}}
            style={{width: 40, height: 40}} 
          />
          <Text
            title={item.firstname} 
            >
            {item.firstname} {item.lastname}
          </Text>
          <Button
           onPress={() => this._voter(item.id)}
           title="Voter"
           color="#3F3154"
           style={styles.btnVoter}>
          </Button>
          </View>
          }
          keyExtractor={item => item.id.toString()}
        />
        
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
  items: {
    flex:1,
    flexDirection: "row",
    justifyContent: "space-between",
    alignContent: "center",
    textAlignVertical: "center",
    padding: 10,
    fontSize: 18,
    //height: 44,
    backgroundColor: '#C0B8D3',
    margin: heightPercentageToDP("1%")
  },
  btnVoter: {
    backgroundColor: "#3F3154"
  },
  titre:{
    fontSize: heightPercentageToDP("5%"),
    textAlign: "center",
    color: "#C0B8D3",
    margin: widthPercentageToDP("1%")
  }
});
