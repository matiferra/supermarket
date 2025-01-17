import API from './API';

const Articulos = { //Objeto Movie Service
  getAll: (nombre) => new Promise(
    (resolve,reject) => {
      API.get('articulos/categoria/' + nombre)
      .then(
        res => res.data
      )
      .then(
        data => resolve(data)
      )
      .catch(
        err => reject(err)
      )
    }
  ), // Funcion que nos devolverá el valor de todas las peliculas
}

export default Articulos;