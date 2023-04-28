/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package Ej3;

/**
 *
 * @author diego
 */
public class Empleado {
    private int DNI;
    String Nombre;
    String Apellido;
    private int  SalarioAnual;
    boolean jornada;
    
    public Empleado (int DNI){
        this.DNI = DNI;
    }

    public int getDNI() {
        return DNI;
    }

    public int getSalarioAnual() {
        return SalarioAnual;
    }

    public void setSalarioAnual(int SalarioAnual) {
        this.SalarioAnual = SalarioAnual;
    }

    @Override
    public String toString() {
        return "El empleado "+ this.Nombre + " "+this.Apellido+ " con DNI " +  this.DNI;
    }
    
    
}
