# API Supermercado

## Información General

El proyecto consta de varias partes:
1. **API Supermercado**: Maneja precios, nombres, categorías de artículos. Incluye un CRUD para una base de datos (la del supermercado) y está conectada a otra base de datos del usuario que registra los gastos realizados.
2. **Aplicación Móvil**: Permite registrar los gastos realizados con un menú interactivo. Consulta artículos seleccionados y los guarda en la base de datos del usuario.
3. **Aplicación de Escritorio**: Genera un gráfico representando los gastos registrados en porcentaje.

El proyecto está diseñado para funcionar en una red local, pero también puede configurarse para funcionar online subiéndolo a la nube y ajustando algunos parámetros en las aplicaciones.

---

## Uso de la API Supermercado

Toda la información devuelta por los servicios REST está en formato JSON.

### **Endpoints de Artículos**

| Método | Endpoint                                         | Descripción                           |
|--------|--------------------------------------------------|---------------------------------------|
| GET    | `/api-supermercado/articulos`                   | Devuelve todos los artículos.         |
| GET    | `/api-supermercado/articulos/id/{id}`           | Devuelve un artículo por su ID.       |
| GET    | `/api-supermercado/articulos/nombre/{nombre}`   | Devuelve un artículo por su nombre.   |
| GET    | `/api-supermercado/articulos/marca/{marca}`     | Devuelve los artículos de una marca.  |
| GET    | `/api-supermercado/articulos/categoria/{categoria}` | Devuelve los artículos de una categoría. |

### **Endpoints de Categorías**

| Método | Endpoint                            | Descripción                         |
|--------|-------------------------------------|-------------------------------------|
| GET    | `/api-supermercado/categorias/{id}` | Devuelve una categoría por su ID.   |
| GET    | `/api-supermercado/categorias`      | Devuelve todas las categorías.      |

### **Endpoints de Marcas**

| Método | Endpoint                        | Descripción                     |
|--------|---------------------------------|---------------------------------|
| GET    | `/api-supermercado/marcas/{id}` | Devuelve una marca por su ID.   |

### **Endpoints de Usuario**

| Método | Endpoint                                     | Descripción                                   |
|--------|----------------------------------------------|-----------------------------------------------|
| GET    | `/api-usuario/articulos`                    | Devuelve todos los artículos del usuario.     |
| GET    | `/api-usuario/articulo/nombre/{nombre}`     | Devuelve un artículo del usuario por nombre. |

---

## Rutas de CRUD de la API Supermercado

### Categorías
- `/admin/categorias`: Index de categorías.

### Marcas
- `/admin/marcas`: Index de marcas.

### Artículos
- `/admin/articulos`: Index de artículos.
