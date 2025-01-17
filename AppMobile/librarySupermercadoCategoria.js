const axios = require("axios");
var URL;

function obtenerCategoria(nroIdCategoria){
    URL = "http://192.168.1.4:9999/api-supermercado/categorias/" + nroIdCategoria;
    return axios.get(URL);
}

module.exports = obtenerCategoria;




