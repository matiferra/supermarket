import React,  { Component } from 'react';
import { Alert } from 'react-native';
import { Button, View, Text } from 'react-native';
import Categorias from '../Categorias';


export class StackCategoriasScreen extends Component{

    constructor(props){
        super(props);
        this.state={
            categorias: [],
            cargando: true,
        }
    
        this.handlerobtenerCategorias = this.handlerobtenerCategorias.bind(this); 
        this.renderCategorias = this.renderCategorias.bind(this); 

    }  

      componentWillUnmount() {
        this.setState({
            categorias: [],
            cargando: true,
        });
      }
      

    handlerobtenerCategorias(){
        Categorias.getAll().then((categorias) => {
            this.setState({
                categorias: categorias,
                cargando: false
            });
        }).catch((err) => {
            Alert.alert("ERROR"); 
        });
    }


    renderCategorias() {
        
        return this.state.categorias.map((categoria) => {
            
            return (
                <View key={Math.random()} style={{ flex: 1, justifyContent: 'center',  alignItems: 'center' }}>
                    <Text key={Math.random()}> {categoria.nombre} </Text>
                    <Button
                        onPress={() => { this.props.navigation.navigate('Details', {categoria: categoria.nombre} ); }}
                        key={Math.random()}
                        title="Ver"
                        color="#990"
                    />
                </View>
            );
        });
    }  



    render(){
        if(this.state.cargando){
            return(
                <Text>CARGANDO{this.handlerobtenerCategorias()}</Text>
            );
        }
        else{
            return(
                this.renderCategorias()
            );
        }
    }  

    


}