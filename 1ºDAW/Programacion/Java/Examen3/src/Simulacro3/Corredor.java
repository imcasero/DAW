package Simulacro3;
import java.io.*;
public class Corredor implements Comparable<Corredor>, Serializable {
   int dorsal;
   private String nombre;
   int pos;
   long marca;

    public Corredor(int dorsal, String nombre) {
        this.dorsal = dorsal;
        this.nombre = nombre;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }
    
   @Override
    public int compareTo(Corredor a){ //sobreescribimos compareTo para darle el
        //el valor que queramos
        //comparamos dorsales
        return this.pos - a.pos;
    }   

    @Override
    public String toString() {
        return "Corredor{" + "dorsal=" + dorsal + ", nombre=" + nombre + ", pos=" + pos + ", marca=" + marca + '}';
    }
   
}
