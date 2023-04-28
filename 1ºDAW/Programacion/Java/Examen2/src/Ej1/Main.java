/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package Ej1;

import java.util.Arrays;

public class Main {
    public static void main(String[] args) {
        
        int num[] = {1 ,5 , 5 , 6 , 7 ,2};
        
        System.out.println(Arrays.toString(copiaArray(num , 2 , 3)));
    }
    
    public static int[] copiaArray(int[] num , int ini , int fin){
       int lenght = fin - ini +1;
       int[] copia = new int[lenght];
       
        for (int i = 0; i < lenght; i++) {
            copia[i] = num[ini];
            ini++;
        }
        
        return copia;
    }
    
}
