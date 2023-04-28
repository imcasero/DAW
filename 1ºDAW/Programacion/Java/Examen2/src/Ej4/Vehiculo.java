/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package Ej4;

/**
 *
 * @author GSW1A6033125
 */
abstract class Vehiculo {
    int nkilometros = 0;
    
    
    public void repostar(){
        System.out.println("Vehículo repostando");
    }
    public void pitar(){
        System.out.println("PIIIIIIIIIII");
    }
}
    
    
    class Coche extends Vehiculo implements Conducible {
        /*public Coche(int nkim){
        nkilometros= nkim;
        }*/
        @Override
        public void pitar(){
            System.out.println("PIPIPIPIPI");
        }
        @Override
        public void arrancar(){
            System.out.println("Arrancando coche");
        }
        @Override
        public void acelerar() {
            System.out.println("Coche acelerando");
        }
        @Override
        public void parar(){
            System.out.println("Parando coche");
        }
    }
    class Furgoneta extends Vehiculo implements Conducible{
        @Override
        public void pitar(){
            System.out.println("POPOPOPOPOPO");
        }
        @Override
        public void arrancar(){
            System.out.println("Arrancando furgoneta");
        }
        @Override
        public void acelerar() {
            System.out.println("furgoneta acelerando");
        }
        @Override
        public void parar(){
            System.out.println("Parando furgoneta");
        }
    }
    interface Conducible{
        public void arrancar();
        public void acelerar();
        public void parar();
    }
    
