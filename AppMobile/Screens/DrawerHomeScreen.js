import { StatusBar } from 'expo-status-bar';
import React, {Component} from 'react';
import { StyleSheet, Text, View, ImageBackground} from 'react-native';

export class DrawerHomeScreen extends Component {

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
            
                <View style={styles.container}>
                    <Text style={styles.texto}> ¡Bienvenido! </Text>
                    <Text style={{fontSize: 16, textAlign: 'center'}}> Ya puede deslizar el menu Hamburguesa y empezar a usar la App </Text>
                    <StatusBar style="auto" />
                </View>
            
        );
        }
    
}


const styles = StyleSheet.create({
    container: {
      flex: 1,
      backgroundColor: '#F4FFBF',
      alignItems: 'center',
      justifyContent: 'center',
    },
    texto: {
        fontSize: 20
    }
  });