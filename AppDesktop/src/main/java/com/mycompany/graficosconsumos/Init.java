package com.mycompany.graficosconsumos;

// LEER API
import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.ArrayList;

//GENERAR GRAFICOS
import javax.swing.JFrame;
 
import org.jfree.chart.ChartFactory;
import org.jfree.chart.ChartPanel;
import org.jfree.chart.JFreeChart;
import org.jfree.data.general.DefaultPieDataset;

public class Init {

    public static void main(String[] args) throws Exception {

        ArrayList<Articulo> articulos = new ArrayList<>();
        
        try {
            URL url = new URL("http://192.168.1.4:9999/api-usuario/articulos");//your url i.e fetch data from .
            HttpURLConnection conn = (HttpURLConnection) url.openConnection();
            conn.setRequestMethod("GET");
            conn.setRequestProperty("Accept", "application/json");
            if (conn.getResponseCode() != 200) {
                throw new RuntimeException("Failed : HTTP Error code : "
                        + conn.getResponseCode());
            }
            InputStreamReader in = new InputStreamReader(conn.getInputStream());
            BufferedReader br = new BufferedReader(in);
            String output;
            String outputJson = "0";

            while ((output = br.readLine()) != null) {
                outputJson = output;
                System.out.println(output);
            }
            
//            try{
                String[] partsSinComiezo = outputJson.split("\\[");
                /*for (String string : partsSinComiezo) {

                    System.out.print(x+"\n"+string);
                    x++;
                }*/

                String[] partsSinFin = null;
                partsSinFin = partsSinComiezo[1].split("\\]");
                int posicion;
                        
                
//                posicion = 0;
//                for (String string : partsSinFin) {
//                    System.out.print("Posicion " +posicion + "\n"+string);
//                    posicion++;
//                }
                
                String[] objetoComienzo = null;
                String[] objetoFinal = null;
                String[] sinComillas = null;

                //PRIMER SEPARACION
                objetoComienzo = partsSinFin[0].split("\\{");

                for (String string : objetoComienzo) {
//                    System.out.println(string);
                }

                double cantidadObjetos = 0;

                ArrayList<Integer> cantidades = new ArrayList<>();
                ArrayList<String> nombres = new ArrayList<>();
                ArrayList<Double> precios = new ArrayList<>();
                ArrayList<String> marcas = new ArrayList<>();
                ArrayList<String> categorias = new ArrayList<>();

                ArrayList<String> objeto = new ArrayList<>();

                posicion = 0;
                
                int contador = 1;
                for (int i = 0; i < objetoComienzo.length; i++) {
                    //SEGUNDA SEPARACION
                    objetoFinal = objetoComienzo[i].split(",");
                    for (String string1 : objetoFinal) {
                        //TERCERA SEPARACION
                        sinComillas = string1.split("\"");
                        for (String sinComilla : sinComillas) {
                            //ARRAY DE ATRIBUTOS DEL JSON mas o menos
                            objeto.add(sinComilla.replace(':', ' '));
                        }
                        contador++;
                    }
                }
                
                contador = 0;
                for (String string : objeto) {
                    System.out.println("Posicion = " + contador);
                    System.out.println(string);
                    contador++;
                }

                cantidadObjetos = objeto.size() / 33;


    //          //TODAS LAS POSICIONES DEL ARRAY OBJETOS
    //            for (int i = 0; i < objeto.size(); i++) {
    //                System.out.println("Posicion "+i);
    //                System.out.println(objeto.get(i));
    //            }

                //CANTIDAD
                posicion = 6;
                while(posicion < objeto.size()){
                    cantidades.add(Integer.parseInt(objeto.get(posicion).trim()));
                    posicion += 33;
                }
    //            //VERIFICACION
    //            for (int cantidad : cantidades) {
    //                System.out.println(cantidad);
    //            }

                //NOMBRE
                posicion = 10;
                while(posicion < objeto.size()){
                    nombres.add(objeto.get(posicion));
                    posicion += 33;
                }

    //            //VERIFICACION
    //            for (String nombre : nombres) {
    //                System.out.println(nombre);
    //            }

                //PRECIO
                posicion = 16;
                while(posicion < objeto.size()){
                    precios.add(Double.parseDouble(objeto.get(posicion).trim()));
                    posicion += 33;
                }

//                //VERIFICACION
//                for (Double precio : precios) {
//                    System.out.println(precio);
//                }


                //MARCA
                posicion = 20;
                while(posicion < objeto.size()){
                    marcas.add(objeto.get(posicion));
                    posicion += 33;
                }

    //            //VERIFICACION
    //            for (String marca : marcas) {
    //                System.out.println(marca);
    //            }


                //CATEGORIA
                posicion = 24;
                while(posicion < objeto.size()){
                    categorias.add(objeto.get(posicion));
                    posicion += 33;
                }

    //            //VERIFICACION
    //            for (String categoria : categorias) {
    //                System.out.println(categoria);
    //            }

                for (int i = 0; i < cantidadObjetos; i++) {
                    articulos.add(new Articulo(nombres.get(i), precios.get(i), cantidades.get(i), marcas.get(i), categorias.get(i)));
                }

                for (Articulo articulo : articulos) {
                    System.out.println(articulo);
                }
                
//            } catch(Exception e){
//                System.err.println("*****************************");
//                System.err.println("* NO HAY REGISTROS CARGADOS *");
//                System.err.println("*****************************");
//            }

                conn.disconnect();

            } catch (Exception e) {
            System.out.println("Exception in NetClientGet:- " + e);
        }
        
        
        
        
        
        
        
        
        // GENERAR GRAFICO PASTEL
        DefaultPieDataset dataset = new DefaultPieDataset();
        

        for (Articulo articulo : articulos) {
            dataset.setValue(articulo.nombre+" : $" + articulo.precio * articulo.cantidad + " cantidad: "+ articulo.cantidad, new Double(articulo.precio * articulo.cantidad));
        }
        
        
        
//        dataset.setValue("IPhone 5s", new Double(10));
//        dataset.setValue("asd", new Double(10));
//        dataset.setValue("SamSung Grand", new Double(20));
//        dataset.setValue("MotoG", new Double(40));
//        dataset.setValue("Nokia Lumia", new Double(10));
// 
        
        JFreeChart chart = ChartFactory.createPieChart(// char t
                
                "Gastos hasta ahora",// title                                                                     
                dataset, // data
                true, // include legend
                true, false);
        
        
        ChartPanel panel= new ChartPanel(chart);
        
        //Creamos la ventana
        JFrame ventana = new JFrame("Grafica");
        ventana.setVisible(true);
        ventana.setSize(800, 600);
        ventana.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        
        
        ventana.add(panel);
        
        
        
        
        
        
        
        
    }
}
