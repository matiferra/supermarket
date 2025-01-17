import React from 'react';
import { StyleSheet, Button, Text, TextInput, View, Alert  } from 'react-native';
import obtenerArticulo from '../librarySupermercadoArticulo';
import obtenerMarca from '../librarySupermercadoMarca';
import obtenerCategoria from '../librarySupermercadoCategoria';

import storeArticulo from '../libraryUsuario';

export class RegistrarGastos extends React.Component {

    constructor(props){
        super(props);
        this.state={
            id: "",
            nombre: "",
            precio: 0,
            marca: "",
            categoria: "",
            encontrado: true,
            unaVez: false,
        }
 
        this.handlerObtenerId = this.handlerObtenerId.bind(this);
        this.handlerobtenerArticulo = this.handlerobtenerArticulo.bind(this); 
    }  

    
        handlerObtenerId(event){
            this.setState({id: event});
        }

   
        handlerobtenerArticulo(){
            obtenerArticulo(this.state.id).then((infoArticulo) => {
                this.setState({ encontrado: true,
  				                nombre: infoArticulo.data.nombre,
                                precio: infoArticulo.data.precio,
                                });
                return infoArticulo;
                }).then((infoArticulo) =>  {
                    obtenerMarca(infoArticulo.data.id_marca).then((infoMarca) => {
                        this.setState({  
                            marca : infoMarca.data.nombre,
                            categoria: infoMarca.data.id_categoria,
                        });
                    return infoMarca;
                    }).then((infoMarca) => {
                        obtenerCategoria(infoMarca.data.id_categoria).then((infoCategoria) => {
                            this.setState({  
                            categoria : infoCategoria.data.nombre
                            });
                    }).then(() => {
                        storeArticulo(this.state.nombre, this.state.precio, this.state.marca, this.state.categoria).then(()=>{
                            Alert.alert("Registrado con Exito!");
                        });
                    })
                })
            }).catch((err) => {
                console.log(err);
                this.setState({     
                    encontrado: false,
                }); 
            });
        }

         render(){
           
            if(this.state.encontrado === true){
                return (
                    <View style={styles.container}>
                        <View>
                            <Text style={styles.peticiones} h1>{this.state.nombre}</Text>
                            <Text style={styles.peticiones} h1>{this.state.precio}</Text>
                            <Text style={styles.peticiones} h1>{this.state.marca}</Text>
                            <Text style={styles.peticiones} h1>{this.state.categoria}</Text>
                        </View>
                        <View>
                            <Text style={styles.titulo}> Ingrese numero de Registro </Text>
                            <TextInput
                                editable={true}
                                keyboardType="phone-pad"
                                maxLength={4}  
                                style={styles.cuadrado}
                                placeholderTextColor="#0891eb"
                                onChangeText={this.handlerObtenerId}
                                numberOfLines={4}
                            />
                            <Button
                                onPress={this.handlerobtenerArticulo}
                                title="Apretar"
                                color="#990"
                            />
                        </View>
                    </View>
                );
            } else {
                return (
                    <View style={styles.container}>
                        <Text style={styles.danger}>Numero de Registro INVALIDO</Text>
                        <Text style={styles.danger} h1>{this.state.id}</Text>

                        <View>
                            <Text style={styles.titulo}> Ingrese numero de Registro </Text>
                            <TextInput
                                editable={true}
                                keyboardType="phone-pad"
                                maxLength={4}  
                                style={styles.cuadrado}
                                placeholderTextColor="#0891eb"
                                onChangeText={this.handlerObtenerId}
                                numberOfLines={4}
                            />
                            <Button
                                onPress={this.handlerobtenerArticulo}
                                title="Apretar"
                                color="#990"
                            />
                            <Text style={styles.aclaracion}> Existen a partir del numero 1 al numero 3944</Text>
                        </View>
                    </View>
                );
            }
        }
}

const styles = StyleSheet.create({
    container: {
        backgroundColor: '#222',
        flex: 1,
        alignItems: 'center',
        justifyContent: 'center',
    },
    cuadrado: {
        height: 40, 
        borderColor: 'gray', 
        borderWidth: 2,
        margin: 10,
        textAlign: 'center',
    },
    peticiones: {
      color: 'white',
    },
    titulo: {
      color: '#099',
    },
    aclaracion: {
      color: 'grey'
    },
    danger: {
        color: 'red',
        fontSize: 20
    }
  });
  