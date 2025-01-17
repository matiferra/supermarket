package com.mycompany.graficosconsumos;

public class Articulo {

    private static int id = 1;
    private int articulo_id;
    public String nombre;
    public double precio;
    public int cantidad;
    public String marca;
    public String categoria;

    public Articulo(String nombre, double precio, int cantidad, String marca, String categoria) {
        this.articulo_id = id++;
        this.nombre = nombre;
        this.precio = precio;
        this.cantidad = cantidad;
        this.marca = marca;
        this.categoria = categoria;
    }

    @Override
    public String toString() {
        return "\nArticulo "+this.articulo_id
                + "\nnombre =  " + nombre 
                + "\nprecio =  " + precio 
                + "\ncantidad =  " + cantidad 
                + "\nmarca =  " + marca 
                + "\ncategoria =  " + categoria;
    }

            
    
}
