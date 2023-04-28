/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package ArrayList1;
import java.util.*;

/**
 * @author GSW1A6033125
 */
public class PruebaLista {
	
	static Scanner rc = new Scanner(System.in);
	
	public static void main(String[] args) {
	// Crear 10 objetos Coordenada, con valores de x,y en 
	// el intervalo [-100, 100] (valores aleatorios)
	
	// Objetos de prueba:
	Coordenada c = new Coordenada(7.0, -2.3);
    Coordenada c2= new Coordenada();
	
	System.out.println(c.toString() + "  "+c.distOrigen() );
	System.out.println(c2           + "  "+c2.distOrigen() );
	
	ArrayList<Coordenada> lista = new ArrayList<>();
	
    for(int i=0; i<10; i++) {
		Coordenada co1= new Coordenada(random(-100,100), random(-100,100));
		lista.add(co1);
	}
	// Recorrer el ArrayList imprimiendo las coordenadas,
	// su distancia al origen y calculando la distancia media
	// al origen	
	double suma = 0.0;
	for(int i=0; i<lista.size(); i++) {
		Coordenada s1 = lista.get(i);
		System.out.print( s1 );
		System.out.printf("   %4.2f%n", s1.distOrigen() );
		suma = suma + s1.distOrigen();
	}
	double media = suma/lista.size();
	System.out.println("La distancia media al origen es: " + media);
	
    // mostrar todos los elementos de la lista (de uno en uno)
	// y preguntar al usuario si quiere borrar cada coordenadas
        
        int l = lista.size();
        
            for (int i = 0; i < l; i++) {
                System.out.println(lista.get(i));
                System.out.println("Quieres borrar este dato ? 1:si/2:no");
                int x = rc.nextInt();
                if (x == 1) {
                    lista.remove(i);
                }
            }
            l=lista.size();
	
	// mostrar las coordenadas que queden en la lista.
            for (int i = 0; i < l; i++) {
               System.out.println(lista.get(i)); 
            }
	

  }

	public static double random() { //¿puede llamarse igual que Math.random?
		double resul = Math.random()*200 - 100;
		return resul;
	}
	// ejercicio: hacer que el método anterior sea genérico:
	// pasadle el valor inicial y el final
	public static double random(double ini, double fin) { 
		double resul = Math.random()*(fin-ini) + ini ;
		return resul;
	}
}
