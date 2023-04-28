package Simulacro3;
import java.io.*;
import java.util.*;
import java.time.Duration;
import java.time.LocalDateTime;
public class NewMain {
    static int p = 1;
    static Scanner rc = new Scanner(System.in);
    static LocalDateTime salida;
    static ArrayList <Corredor> carrera = new ArrayList<>();
    public static void main(String[] args) throws FileNotFoundException {
        int x =1;
        introducirCorredores();
        while (x != 0) {
            System.out.println("========================");
            System.out.println("1. empezar carrera");
            System.out.println("2. final corredor");
            System.out.println("========================");
            x = rc.nextInt();
            switch(x){
            default -> {System.out.println("Fin de programa");
                        x = 0;
            serializar(carrera);}
            case 1 -> {//nuevo identificador
                comienzo();
            }
            case 2 -> {//llamar siguiente paciente
                fin();
            }
            }
        }
        Collections.sort(carrera);
        for(Corredor i:carrera){
            System.out.println(i.toString());
        }
        
    }
    public static void introducirCorredores(){
        carrera.add(new Corredor(1 , "Juan"));
        carrera.add(new Corredor(2 , "Maria"));
        carrera.add(new Corredor(3 , "Antonia"));
        carrera.add(new Corredor(4 , "Francisco"));
    };
    public static void comienzo(){
        salida = LocalDateTime.now();
    };
    public static void fin(){
        int d;
        do {
            System.out.println("Introduzca el dorsal del participante"+
                ", cero termina");
            d = rc.nextInt();
            if( d != 0){
                for(Corredor i: carrera){
                    if(d == i.dorsal) {
                        i.marca = Duration.between(salida, 
                            LocalDateTime.now()).toMillis();
                        i.pos= p;
                    }
                   
                }
                p++;
            }     
        } while (d != 0);
        
    };
    public static void serializar(List carrera) throws FileNotFoundException{
        try{
        ObjectOutputStream oos = new ObjectOutputStream(new FileOutputStream
        ("carrera.ser"));
        oos.writeObject(carrera);
        oos.close();
        }catch(IOException e){
            e.printStackTrace();
        }
    };
}
