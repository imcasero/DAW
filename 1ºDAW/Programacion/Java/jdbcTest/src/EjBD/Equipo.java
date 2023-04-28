/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package EjBD;

/**
 *Para guardar equipos en lista
 * @author GSW1A6033125
 */
public class Equipo {
    String nombre;
    String ciudad;
    String conferencia;
    String division;

    public Equipo(String nombre, String ciudad, String conferencia, String division) {
        this.nombre = nombre;
        this.ciudad = ciudad;
        this.conferencia = conferencia;
        this.division = division;
    }

    @Override
    public String toString() {
        return "Equipos{" + "nombre=" + nombre + ", ciudad=" + ciudad + ", conferencia=" + conferencia + ", division=" + division + '}';
    }
    
}
