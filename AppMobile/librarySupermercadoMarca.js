const axios = require("axios");
var URL;

function obtenerMarca(nroIdMarca){
    URL = "http://192.168.1.4:9999/api-supermercado/marcas/" + nroIdMarca;
    return axios.get(URL);
}
 
module.exports = obtenerMarca;




