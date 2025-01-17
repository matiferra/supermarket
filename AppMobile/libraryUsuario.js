/*const rp = require("request-promise");

function storeArticulo(nombre, precio, marca, categoria){
    var options ={
        uri: "http://192.168.1.5:80/api-usuario/"
        + nombre + '/' + precio + '/' + marca + '/' + categoria,
        headers: {
            'User-Agent': 'Request-Promise'
        },
        json:true
    }
    return rp(options)
    .catch(function (err) {
        console.log("\n----- Ah ocurrido el siguiente ERROR! -----\n");
        console.log(err.cause);
        console.log("\n-------------------------------------------\n");
    });
}
*/
const axios = require("axios");

function storeArticulo(nombre, precio, marca, categoria){
    URL = "http://192.168.1.4:9999/api-usuario/" + nombre + '/' + precio + '/' + marca + '/' + categoria;
    return axios.get(URL);
}
 
module.exports = storeArticulo; 