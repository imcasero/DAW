/*
  Enunciado:
    Codificar la clase Persona, con atributos privados y
	métodos set, get e imprimeDatos públicos.
	Codifica al menos un constructor que reciba el DNI
	de la persona.
	
	Crea más objetos en PruebaPersona e imprime sus datos.


*/
class Persona {
	private String DNI;
	private String nombre;
	private int edad;



	public Persona(String dni) {
		DNI = dni;
	}

	public Persona(String dni, String nombre, int edad){
		DNI = dni;
		this.nombre = nombre;
		this.edad = edad;
	}

	



	
	//   Restricción: el DNI sólo puede leerse (get), NO modificar
	public String getNombre(){ //metodos
		return nombre;
	}
	public void setNombre(String nombre){ //metodos
		this.nombre = nombre;
	}
	public int getEdad() {
		return edad;
	}
	public void setEdad(int edad) {
		this.edad = edad;
	}
	public String getDNI() {
		return DNI;
	}
	public void ImprimeDatos() {
		System.out.println("DNI :" + DNI);
		System.out.println("Nombre " + nombre);
		System.out.println("Edad " + edad);
		System.out.println("=========================");
	}
}
	
	
public class PruebaPersona {

   public static void main(String args[]) {
	  String dni = "12342345G";
      Persona person = new Persona( "123d" , "Nombre" , 15 );
      Persona person2 = new Persona( "7654321A", "luisa" , 45 );


		person.ImprimeDatos();
	  // o directamente: 
	  //Persona person = new Persona("12342345G");
	  person.setNombre("Luis Alba");
	  person.setEdad(25);
	  person.ImprimeDatos(); // imprime por pantalla todos los datos
							 //   del objeto person
	  System.out.println(person.getEdad());
	  
   }
}