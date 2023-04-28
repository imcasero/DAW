/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package ArrayList1;

/**
 *
 * @author GSW1A6033125
 */
public class Coordenada {
    double x;
    double y;
    
    public Coordenada(double x , double y){
        this.y = y;
        this.x = x;
    }
    public Coordenada(){//Constructor por defecto(vacio)
    }
    
    //distancia de origen (sqrt(x^2 + y^2))
    public double distOrigen(){
    double resul = Math.sqrt(x*x * y*y);
    return resul;
    }
    
    
    @Override
    public String toString(){
        String resul = "(" +x+ "," +y+ ")";
        return resul;
    }
}
