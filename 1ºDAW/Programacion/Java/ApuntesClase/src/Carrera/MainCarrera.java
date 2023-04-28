package Carrera;
import java.time.LocalDateTime;
import java.util.*;
import java.util.ArrayList;
import java.time.Duration;
/*
 * @author GSW1A6033125
 */
public class MainCarrera {
    static Scanner rd = new Scanner(System.in);
    static ArrayList <Atleta> participantes = new ArrayList<>();

    public static void main(String[] args) {
        //4 atletas y guardarlos en una lista
        
        
           participantes.add( new Atleta(1, "Alice", "Brown", 'F') );
	   participantes.add( new Atleta(3, "Juan", "Abad", 'M') );
	   participantes.add( new Atleta(4, "Maria", "Martin Fiz", 'F') );
	   participantes.add( new Atleta(2, "John", "Walker", 'M') );
	   participantes.add( new Atleta(5, "Albert", "Walker", 'M') );        
        for (Atleta a: participantes) {
            System.out.println(a);
        }
        System.out.println();
	   
	Collections.sort(participantes);//Ordeno por dorsal
	for(int i=0;i<participantes.size();i++) {
            System.out.println(participantes.get(i)); 
        }
	   
	Comparator<Atleta> comparador = new OrdenaApellidosNombre();//define
	Collections.sort(participantes, comparador);//Ordeno por apellido
	   
	System.out.println();
	for(int i=0;i<participantes.size();i++) {
            System.out.println(participantes.get(i)); 
	}
        
        comienzoCarrera();
        finCarrera();
        marcasCorredores();
        calcularMarchas();
        
        System.out.println();
	   Comparator<Atleta> comparador2 = new OrdenaPorMarca();
	   Collections.sort(participantes, comparador2);
	   marcasCorredores();
           

        
    }
    public static void comienzoCarrera(){
        System.out.println("Introduzca intro para comenzar :");
        rd.nextLine();
        
        LocalDateTime momentoSalida = LocalDateTime.now();
        
        for(Atleta a:participantes) {
		   a.salida=momentoSalida;
	}        
        
    }
    public static void finCarrera(){
            System.out.println("Pulsa intro para comenzar :");
            rd.nextLine();
            
            //pedimos dorsales , cero para terminar de registrar dorsales
            
            System.out.print("Dorsal (cero termina): ");
	   int dorsal = rd.nextInt();
	   while(dorsal!=0){
		  // para cada dorsal que damos: buscar corredor y asignarle
	      // tiempo de llegada
		  boolean encontrado = false;
		  for(int i=0;i<participantes.size() && !encontrado;i++) {
			  Atleta a = participantes.get(i);
			  if(a.dorsal == dorsal) {
				  a.llegada = LocalDateTime.now();
				  encontrado=true;
			  }
		  }
		  if(!encontrado) {
			  System.out.println("Dorsal incorrecto!!");
		  }
		  System.out.print("Dorsal (cero termina): ");
	      dorsal = rd.nextInt();
	   }
	   
	   System.out.println("\nCarrera terminada :)  \n");

    }
    public static void marcasCorredores(){
	   System.out.println();
	   long d=0;
	   for(Atleta a:participantes) {
		   if (a.llegada != null) {
			   d = Duration.between(a.salida, a.llegada).toMillis();
		   }
		   System.out.println(a + "   " + a.salida + "  " + a.llegada + " " + d);
	   }
   }
    public static void calcularMarchas(){
        for (Atleta a:participantes) {
            a.marca = Duration.between(a.salida, a.llegada).toMillis();
        }
    }
    
    
    
    
}
