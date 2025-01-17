const axios = require("axios");
const { Alert } = require("react-native");
var URL;
 
function obtenerArticulo(nroIdArticulo){
    URL = "http://192.168.1.4:9999/api-supermercado/articulos/id/" + nroIdArticulo;
    return axios.get(URL);
}

function obtenerxNombre(nombreArticulo){
    URL = "http://192.168.1.4:9999/api-supermercado/articulos/nombre/" + nombreArticulo;
    return axios.get(URL);
} 

function obtenerxNombreUsuario(nombreArticulo){
    URL = "http://192.168.1.4:9999/api-usuario/articulo/nombre/" + nombreArticulo;
    return axios.get(URL);
}

function obtenerxCategoria(nombreCategoria){
    URL = "http://192.168.1.4:9999/api-supermercado/articulo/categoria/" + nombreCategoria;
    return axios.get(URL);
}

function restarArticulo(nombreArticulo){
    Alert.alert(nombreArticulo);
    /*
    formData.append('nombre', nombreArticulo);
    //URL = "http://192.168.1.4:9999/api-usuario/articulo/"+ formData;
    return axios.post('http://192.168.1.4:9999/api-usuario/articulo', formData);
*/}

module.exports = obtenerArticulo, obtenerxCategoria, obtenerxNombre, restarArticulo, obtenerxNombreUsuario;




