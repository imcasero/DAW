/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package Ej6;

/**
 *
 * @author diego
 */
public class Main {

    
    public static void main(String[] args) {
        double[] array = new double[1000];
        double aux;
        for (int i = 0; i < array.length; i++) {//relleno el array
            array[i] = (Math.random() * 1000)+1;
        }
        
        for (int i = 0; i < array.length; i++) {//ordeno array SELECCION
            for (int j = i+1; j < array.length; j++) {
                double minimo = array[j];
                
                if (minimo < array[i]) {
                    aux = array[i];
                    array[i] = array[j];
                    array[j] = aux;
                    
                }
            }
        }

        
        
        for (int i = 0; i < array.length - 1; i++) {//Ordenacion por burbuja
            for (int j = 0; j < array.length - 1; j++) {
                if (array[j + 1] < array[j]) {
                    aux = array[j + 1];
                    array[j + 1] = array[j];
                    array[j] = aux;
                }
            }
        }

        
        for (int i = 0; i < array.length; i++) {//muestro el array
            System.out.println(array[i]);
        }
        
    }
    
}
