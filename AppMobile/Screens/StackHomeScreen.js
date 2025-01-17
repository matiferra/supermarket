import React,  { Component } from 'react';
import { StyleSheet, Text, View, ImageBackground, Button  } from 'react-native';


 export class HomeScreen extends Component {

    constructor(props){
        super(props);
    }
    
    render() {
        return (
          <ImageBackground
            source={require('../assets/safeBox.jpg')}
            style={styles.background}
          >

          <View style={{ marginVertical: 30, flex: 1, justifyContent: 'flex-end',  alignItems: 'stretch' }}>

          <Button
                onPress={() => { this.props.navigation.navigate('Categorias') }}
                title="INGRESAR"
                
                color="#990"
            />
          </View>
            

          </ImageBackground>
        );
      }
 }

 
const styles = StyleSheet.create({
    background: {
      width: '100%',
      height: '100%'
    },
    logo:{
        width: 280,
        height: 280,
        marginLeft: '15%',
        marginTop: '10%'
      }
});