import API from './API';

const Categorias = { //Objeto Movie Service
  getAll: () => new Promise(
    (resolve,reject) => {
      API.get('categorias')
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

export default Categorias;