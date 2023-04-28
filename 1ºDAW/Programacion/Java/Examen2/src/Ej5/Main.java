/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package Ej5;
import java.util.Scanner;

/**
 *
 * @author diego
 */
public class Main {
static Scanner rc = new Scanner(System.in);  
    
    public static int leeNumeros(){
        System.out.println("Introduzca la nota");
        int nota = rc.nextInt();
        //int ac =+ nota;
        int ac=0;
        if (nota != 0) {
            ac=nota+leeNumeros();
        }
        return ac;
    
    }
    public static void main(String[] args) {
        
        System.out.println(leeNumeros());
    }
    
}
