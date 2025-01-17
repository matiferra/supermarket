import React, {Component} from 'react';
import { View, Text } from 'react-native';
import { createStackNavigator } from '@react-navigation/stack';

// Screens
import {StackCategoriasScreen} from "../Screens/StackCategoriasScreen";
import {DetailsCategoriaScreen} from "../Screens/DetailsCategoriaScreen";
import {HomeScreen} from "../Screens/StackHomeScreen";

const Stack = createStackNavigator();

export class StackMenu extends Component {
  
  constructor(props){
    super(props);
    this.state={
        nombres: [],
        encontrado: true,
        unaVez: false,
    }
  }

  
  render(){
    return (
          <Stack.Navigator initialRouteName="HomeScreen"
          screenOptions={{
            headerStyle: {
              backgroundColor: '#20AD20',
            },
            headerTintColor: '#fff',
            headerTitleStyle: {
                fontWeight: '600',
                textAlign: 'center',
            }
                       
       }}
          >
            <Stack.Screen name="Registrar Gastos" component={HomeScreen} />
            <Stack.Screen name="Categorias" component={StackCategoriasScreen}/>
            <Stack.Screen name="Details" component={DetailsCategoriaScreen} />

            
          </Stack.Navigator>
    );
  }
}