import React, {Component} from "react";
import { createDrawerNavigator } from '@react-navigation/drawer';

// Screens
import {DrawerHomeScreen} from "../Screens/DrawerHomeScreen";
import {DrawerContentScreen} from "../Screens/DrawerContentScreen";
import {StackMenu} from "./StackMenu";

const Drawer = createDrawerNavigator();

export default class DrawerMenu extends Component {
    
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
            <Drawer.Navigator 
                initialRouteName="Home"
                headerMode={'none'}
                drawerContent={props => <DrawerContentScreen {...props} onLogout={() => this.props.onLogout()}/>}
            >
                <Drawer.Screen name="Home" component={DrawerHomeScreen} />
                <Drawer.Screen name="¡Hora de Comenzar!" component={StackMenu} />
            </Drawer.Navigator>
        );
    }
}

