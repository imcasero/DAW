/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package PruebaHasmap;
import java.util.*;
/**
 *
 * @author GSW1A6033125
 */
public class NewMain {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        
        //Creo tres objetos
        Empleado e1 = new Empleado("1111111a" , "Juan" , 10000);
        
        Empleado e2 = new Empleado("1111111b" , "Pepe" , 10000);       
        
        Empleado e3 = new Empleado("1111111c" , "Anton" , 10000);
        
        //Crear un HashMap para guardar los empleados con el dni como key
        HashMap<String , Empleado> empleados = new HashMap<>();
        
        //Guardar los tres empleados
        empleados.put(e1.dni, e1);
        empleados.put(e2.dni, e2);
        empleados.put(e3.dni, e3);
    }
    
}
