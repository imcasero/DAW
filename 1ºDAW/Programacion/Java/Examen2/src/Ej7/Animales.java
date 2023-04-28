/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package Ej7;


abstract class Animales {
    public void sonido(){
        System.out.println("sonido cualquiera");
    }
    public void dormir(){
        System.out.println("ZzzzzzZzzzz");
    }
}
class Cerdo extends Animales{
    @Override
    public void sonido(){
        System.out.println("Oing");
    }
}
class Vaca extends Animales{
    @Override
    public void sonido(){
        System.out.println("muuuuuuuu");
    }
}
class Gato extends Animales{
    @Override 
    public void sonido(){
        System.out.println("Miaaau");
    }
}
class Perro extends Animales{
    @Override
    public void sonido(){
        System.out.println("Guau");
    }
}

interface comida {
    public void comer();
}
