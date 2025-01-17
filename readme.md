El proyecto cuenta de varias partes.
Por un lado, una API que contiene precios, nombres, categorías de artículos. Esta API tiene un CRUD para Alta, Baja y Modificaciones para una de sus Base de Datos (la del Supermercado) y también está conectada a otra Base de Datos que es la del Usuario que registra como gastos realizados a esos artículos.
Por otro lado, una Aplicación Móvil que cuenta con un menú para registrar los gastos que uno va haciendo. Su funcionalidad consiste en hacer una consulta del artículo que fue seleccionado y guardar esa información en una Base de Datos dedicada al consumo del usuario.
Por último, una Aplicación de Escritorio que genera un gráfico representando los gastos que registro el usuario en porcentaje.
Todo el proyecto fue desarrollado para que su funcionamiento corra dentro de una red local, lo cuál no significa que no se pueda correr de manera Online, pero en ese caso lo que se tendría que hacer es subir todo a la nube y cambiar algunos parámetros solamente, tanto en la Aplicación de Escritorio y en la Aplicación Móvil.







Uso de la API Supermercado
Toda la información devuelta por los servicios REST descritos a continuación se encuentra en formato JSON.
GET	/api-supermercado/artículos	Devuelve todos los artículos
GET	/api-supermercado/articulos/id/{id}	Devuelve artículo por ID
GET	/api-supermercado/articulos/nombre/{nombreArticulo}	Devuelve artículo por nombre
GET	/api-supermercado/articulos/marca/{NombreMarca}	Devuelve artículos de esa Marca
GET	/api-supermercado/articulos/categoria/{NombreCategoria}	Devuelve artículos de esa esa Categoría
GET	/api-supermercado/categorias/{id}	Devuelve categoria por ID de Categoría
GET	/api-supermercado/categorias	Devuelve todas las Categorias
GET	/api-supermercado/marcas/{id}	Devielve marca por ID de Marca
GET	/api-usuario/articulos	Devuelve todos los Articulos del Usuario
GET	/api-usuario/articulo/nombre/{NombreArticulo}	Devuelve artículo por nombre


Rutas de CRUD de la API Supermercado
/admin/categorias	 Index de Categorias
/admin/marcas	 Index de Marcas
/admin/articulos	 Index de Articulos
