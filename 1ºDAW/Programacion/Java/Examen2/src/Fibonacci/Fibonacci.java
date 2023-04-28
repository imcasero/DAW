/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package Fibonacci;
import java.util.Scanner;
/**
 *
 * @author diego
 */
public class Fibonacci {
    
    static Scanner rc = new Scanner(System.in);
    
    public static void main(String[] args) {
        System.out.println("Introduzca la posicion");
        int pos = rc.nextInt();
        
        System.out.println(fibonacci(pos));
    }
    public static int fibonacci(int n) {
        if (n == 0)
            return 0;
        else if (n == 1)
            return 1;
        else
            return fibonacci(n - 1) + fibonacci(n - 2);
    }   
}
