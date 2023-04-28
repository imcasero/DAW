/*
   En este programa vamos a gestionar una carrera de atletismo.
   Tendremos dos clases:
   clase Atleta con los siguientes atributos:
     º- dorsal
	 - [número licencia federativa]
	 - nombre
	 - apellidos
	 - [fecha nacimiento]
	 - género
	 - hora_salida
	 - hora_llegada
	 - posición (absoluta)
	 
   clase Carrera que permite apuntarse (almacenar en lista corredores) y
   simular el desarrollo de una carrera: salida y llegada de corredores,
   y dar listados de participantes ordenados por varios criterios.
*/
package Carrera;
import java.util.*;
import java.time.Duration;
import java.time.LocalDateTime;
class OrdenaPorMarca implements Comparator<Atleta> {
    @Override
	public int compare(Atleta a1, Atleta a2){
		int resul;
		Duration d1 = Duration.between(a1.salida, a1.llegada);
		Duration d2 = Duration.between(a2.salida, a2.llegada);
		if (d1.toMillis() < d2.toMillis()) {
			resul = -1;
		} else {
			resul = 1;
		}
		return resul;
	}
}
class OrdenaApellidosNombre implements Comparator<Atleta> {
    @Override
	public int compare(Atleta a1, Atleta a2){
		int resul = a1.apellidos.compareTo(a2.apellidos);
		if(resul==0) { // apellidos iguales
		    resul = a1.nombre.compareTo(a2.nombre);
		}
		// tarea: introducir el nombre en caso de "empate"
		return resul;
	}
}

public class Atleta implements Comparable<Atleta>{
//atributos
    int dorsal;
    int numLicencia;
    String nombre;
    String apellidos;
    int nacimiento;
    char gen;
    LocalDateTime salida;
    LocalDateTime llegada;
    int posicion;
    long marca;
    // un par de constructores

    public Atleta(int dorsal, String nombre, String apellido, char gen) {
        this.dorsal = dorsal;
        this.nombre = nombre;
        this.apellidos = apellido;
        this.gen = gen;
    }

    public Atleta() {
    }
    
    //metodos toString
    @Override
    public String toString() {
        String resul = String.format("%4d %-10s %-20s %c", dorsal, nombre,
		               apellidos, gen);
		return resul;
    }
    @Override
    public int compareTo(Atleta a){ //sobreescribimos compareTo para darle el
        //el valor que queramos
        //comparamos dorsales
        return this.dorsal - a.dorsal;
    }   
}

