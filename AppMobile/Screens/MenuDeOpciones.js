import { StatusBar } from 'expo-status-bar';
import React, {Component} from 'react';
import { StyleSheet, Text, Button,  View } from 'react-native';

export class HomeScreen extends Component {

    constructor(props){
        super(props);
        this.state={
            nombres: [],
            encontrado: true,
            unaVez: false,
        }
    }

    render(){
        return(
            <View >
                
            </View>
            );
    }
    
}


const styles = StyleSheet.create({
    container: {
      flex: 1,
      backgroundColor: '#fff',
      alignItems: 'center',
      justifyContent: 'center',
    },
    texto: {
        fontSize: 20
    }
  });