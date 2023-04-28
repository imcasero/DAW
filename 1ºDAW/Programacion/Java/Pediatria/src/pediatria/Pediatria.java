/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package pediatria;

/**
 *
 * @author GSW1A6033125 Diego Casero Martín
 */
import java.util.*;




public class Pediatria{
        static Scanner rc = new Scanner(System.in);   //Escaner generak

	static Nino[] arrayNinos=new Nino[100]; //array de objetos estatico
        static int indice = 0; //indice del array
        

    public static void darAlta(){
        
                    rc.nextLine();
                    System.out.println("Introduzca el nombre");
                        String nombre = rc.nextLine();
                    System.out.println("Introduzca el apellido");
                        String apellido = rc.nextLine();
                    System.out.println("Introduzca el sexo (M o F)");
                        char sexo = rc.next().charAt(0);
                    rc.nextLine();
                    System.out.println("Introduzca la fecha");
                        String fecha = rc.nextLine();
                    System.out.println("Estatura");
                        int estatura = rc.nextInt();
                    System.out.println("Peso");
                        int peso = rc.nextInt();
                
            arrayNinos[indice] = new Nino(nombre , apellido , sexo , fecha , estatura , peso); //escribo el array y avanzo 1 en el indice
            indice ++;
            
           
        }
    
    public static void darBaja(){
                    System.out.println("Indique el cod del usuario");
                    int x = rc.nextInt(); //busco el niño en concreto
                    int pos = 0; //para guardar la posicion en la que se encuentra
                    boolean encontrado=false; // para determinare cuando parar de recorrer el array
                    for(int i=0;encontrado==false||i<indice;i++){
                        if(arrayNinos[i].codigo == x ){ //para cuando coincida el codigo hacer las operaciones convenientes
                            encontrado = true;
                            pos = i;
                        }
                       }
                        if (encontrado){//aqui pondria a null esa parte del array
                            arrayNinos[pos] = null;
                            Nino.cod--;
                            } else {
                                System.out.println("No se encontro ninguna coincidencia");
                            }
                       indice--;
                    
    }
    public static void listar(){
        System.out.printf("%4s %20s %n" ,"COD" ,"NOMBRE" );
        
        for (int i = 0; i < indice; i++) {
            System.out.printf("%4s %20s %n" , arrayNinos[i].codigo ,arrayNinos[i].nombre );
        }
    }
    
    public static void ordApellido(){ // creo que no consigo imprimir bien el array por eso parece que no me lo ordena.
    String aux;
    for (int i = 0; i < indice; i++) {
        
        for (int j = i + 1; j < indice; j++) {
            
        String minimo = arrayNinos[j].getApellido();
        
        if (minimo.compareTo(arrayNinos[i].getApellido()) < 0) {
            
            aux = arrayNinos[i].apellido;
            arrayNinos[i].apellido = arrayNinos[j].apellido;
            arrayNinos[j].apellido = aux;
            } 
        }
        
    } 
        for (int i = 0; i < indice; i++) {
            System.out.printf("%4s %20s %n" , arrayNinos[i].codigo ,arrayNinos[i].nombre );
        }

    }
    public static void busquedaApellido(){
        
        System.out.println("Indique el apellido que desea buscar");
        rc.nextLine();
        String t = rc.nextLine();
        for (int i = 0; i < indice; i++) {
            if (t.equals(arrayNinos[i].apellido)) {
                System.out.printf("%4s %20s %n" ,"COD" ,"NOMBRE" );
                System.out.printf("%4s %20s %n" , arrayNinos[i].codigo ,arrayNinos[i].nombre );
            }
           
        }
    
    }
    public static void rangoPeso(){
        
        System.out.println("Introduzca el peso minimo ");
        int min = rc.nextInt();
        System.out.println("Introduzca el peso maximo ");
        int max = rc.nextInt();
        
        for (int i = 0; i < indice; i++) {
            if (arrayNinos[i].peso >= min && arrayNinos[i].peso <= max) {
                System.out.printf("%4s %20s %n" ,"COD" ,"NOMBRE" );
                System.out.printf("%4s %20s %n" , arrayNinos[i].codigo ,arrayNinos[i].nombre );
            }
        }
    
    }
 
    public static void percentilBajo(){
        int aux;
        for (int i = 0; i < indice; i++) {
        
            for (int j = i + 1; j < indice; j++) {
            
                int minimo = arrayNinos[j].getPeso();
        
                    if (minimo >(arrayNinos[i].peso)) {
            
                        aux = arrayNinos[i].peso;
                        arrayNinos[i].peso = arrayNinos[j].peso;
                        arrayNinos[j].peso = aux;
                    } 
            }
        
        }
        System.out.println("Introduzca el codigo del niño");
        int cod = rc.nextInt();
        
        for (int i = 0; i < indice; i++) {
            if (cod == arrayNinos[i].codigo) {
                System.out.println("El percentil es "+ (i+1) );
            }
        }
    }
    
    public static void percentilAlturaNino(){
        int aux;
        for (int i = 0; i < indice; i++) {
        
            for (int j = i + 1; j < indice; j++) {
            
                int minimo = arrayNinos[j].getEstatura();
        
                    if (minimo >(arrayNinos[i].estatura)) {
            
                        aux = arrayNinos[i].estatura;
                        arrayNinos[i].estatura = arrayNinos[j].estatura;
                        arrayNinos[j].estatura = aux;
                    } 
            }
        
        }
        System.out.println("Introduzca el codigo del niño");
        int cod = rc.nextInt();
        
        for (int i = 0; i < indice; i++) {
            if (cod == arrayNinos[i].codigo) {
                System.out.println("El percentil es "+ (i+1) );
            }
        }
        
    }
    public static void datos(){
        
        arrayNinos[indice] = new Nino("Juan" , "Olivo" , 'm' , "010201" , 3 , 30);//1
        indice++;
        
        arrayNinos[indice] = new Nino("Juanito" , "Olivas" , 'm' , "010202" , 3 , 26);//2
        indice++;
        
        arrayNinos[indice] = new Nino("Ana" , "Bolivia" , 'f' , "030201" , 2 , 19);//3
        indice++;
        
        arrayNinos[indice] = new Nino("Julia" , "Olivo" , 'f' , "010201" , 2 , 18);//4
        indice++;
        
        arrayNinos[indice] = new Nino("Jose" , "Olivares" , 'm' , "030201" , 3 , 30);//5
        indice++;
        
        arrayNinos[indice] = new Nino("JuanCarlos" , "Martin" , 'm' , "010299" , 2 , 35);//6
        indice++;
        
        arrayNinos[indice] = new Nino("Antonio" , "Perales" , 'm' , "011201" , 3 , 28);//7
        indice++;
        
        arrayNinos[indice] = new Nino("Lucía" , "Trujillo" , 'f' , "080201" , 1 , 20);//8
        indice++;
        
        arrayNinos[indice] = new Nino("Pepa" , "Francisca" , 'f' , "210201" , 3 , 30);//9
        indice++;
        
        arrayNinos[indice] = new Nino("Francisca" , "Anatalo" , 'f' , "010211" , 3 , 30);//10 
        indice++;
    
    }


	public static void main(String[] args) {
            
            
            int tecla = 1;
                
                while(tecla != 0){
		System.out.println(""); //menu
		System.out.println("================================================");
		System.out.println("1. Dar de alta");
		System.out.println("================================================");
		System.out.println("2. Dar de baja");
		System.out.println("================================================");
		System.out.println("3. Listar ninos");
		System.out.println("================================================");
		System.out.println("4. Listar por apellido o nombre");
		System.out.println("================================================");
		System.out.println("5. Buscar por apellido");
		System.out.println("================================================");
		System.out.println("6. Buscar ninos en un rango de peso");
		System.out.println("================================================");
		System.out.println("7. Calcular percentil(mas bajo)");
		System.out.println("================================================");
		System.out.println("8. Calcular percentil de estatura de un nino");
		System.out.println("================================================");
		System.out.println("9. Calcular datos automaticos para pruebas");
		System.out.println("================================================");
		System.out.println("10. Salir de la aplicacion");
		System.out.println("================================================");
		System.out.println("");
                

		
		System.out.println("Introduzca el numero para operar");
		int num = rc.nextInt();

		switch (num) {

		case 1 -> { //pedimos los datos y despues damos de alta
                    darAlta();
                    System.out.println("Introduzca 0 para salir , cualquier otro numero para realizar otra operacion");
                    tecla = rc.nextInt();
                      
                }
                        
		case 2 -> {
                    darBaja();
                    System.out.println("Introduzca 0 para salir , cualquier otro numero para realizar otra operacion");
                    tecla = rc.nextInt();
                    
                }

		case 3 -> {
                    System.out.println("------------------------------");
                    listar();
                    System.out.println("------------------------------");
                    
                    System.out.println("Introduzca 0 para salir , cualquier otro numero para realizar otra operacion");
                    tecla = rc.nextInt();
                }

		case 4 -> {
                    ordApellido();
                    System.out.println("Introduzca 0 para salir , cualquier otro numero para realizar otra operacion");
                    tecla = rc.nextInt();
                }

		case 5 -> {
                    busquedaApellido();
                    System.out.println("Introduzca 0 para salir , cualquier otro numero para realizar otra operacion");
                    tecla = rc.nextInt();
                }

		case 6 -> {
                    rangoPeso();
                    System.out.println("Introduzca 0 para salir , cualquier otro numero para realizar otra operacion");
                    tecla = rc.nextInt();
                }

		case 7 -> {
                    percentilBajo();
                    System.out.println("Introduzca 0 para salir , cualquier otro numero para realizar otra operacion");
                    tecla = rc.nextInt();
                }

		case 8 -> {
                    percentilAlturaNino();
                    System.out.println("Introduzca 0 para salir , cualquier otro numero para realizar otra operacion");
                    tecla = rc.nextInt();
                }

		case 9 -> {
                    datos();
                    System.out.println("Introduzca 0 para salir , cualquier otro numero para realizar otra operacion");
                    tecla = rc.nextInt();
                }

		case 10 -> {
                   tecla = 0;
                }
                
            }
            

	}

        }
}
