class Ciudad{
	//atributos es decir las caracteristicas que va a tener nuestra clase ciudad
	String nombre;
	boolean defendida; //String estado;
	int numCaballeros;
	int numOrcos;

	//Constructores (inicializan cada objeto)
	public Ciudad(String nombre){//ciudad por defecto
		this.nombre = nombre;
		defendida = true;
		numCaballeros = 0;
		numOrcos = 0;
	}
	public Ciudad(String nombre , int numCaballeros, int numOrcos){ // creamos la ciudad que recibira datos
		this.nombre = nombre;
		this.numCaballeros = numCaballeros;
		this.numOrcos = numOrcos;
		defendida = true;
	}

	//metodos = acciones que se pueden realizar los metodos
	public void refuerzos(int refuerzos){ // creo el primer metodo 
		if (defendida == true) { // if (defnedida) tambien es valido
			numCaballeros+=refuerzos;
		}
	}
	public void horda(int orcos){ // creo otro metodo
		if (defendida == true) {
			numOrcos+=orcos;
		}
	}
	public void trifulca(){ // creamos otro metodo para la pelea
		int bajasCaballeros = numOrcos * 2;
		int bajasOrcos = (int)numCaballeros / 2;
		numCaballeros = numCaballeros - bajasCaballeros;
		if (numCaballeros < 0) {
			numCaballeros = 0;
		}
		if (numOrcos < 0) {
			numOrcos = 0;
		}
		numOrcos = numOrcos - bajasOrcos;
		if (numCaballeros == 0 && numOrcos > 0) {
			defendida = false;
		}
	}
	public void printEstado(){ // otro metodo para imprimir los estados
		System.out.println("Nombre :" + nombre);
		System.out.println("Caballeros :" + numCaballeros);
		System.out.println("Orcos :" + numOrcos);
		if (defendida) {
			System.out.println("Defendida");
		} else {
			System.out.println("invadida");
		}
		System.out.println("==================================");
	}
	/*private String estado(){
		String st;
		if (defendida) {
			st = "Defendida";
		} else {
			st = "Invadida"
		}
		return st;
	}*/
	}


public class ciudades {
	public static void main(String[] args) {
		Ciudad c1 = new Ciudad("Aranjuez"); // primer objeto
		c1.refuerzos(2); // llamamos al metodo refuerzos en el primer obejto recibiendo 2
		c1.trifulca();
		c1.printEstado();

		Ciudad c2 = new Ciudad("Sesena" , 2 , 2);  // Aqui el segundo objeto ya recibe dos valores
		c2.trifulca();
		c2.printEstado();
		c2.refuerzos(4);
		c2.trifulca();
		c2.printEstado();

		Ciudad c3 = new Ciudad("Chinchon");
		c3.refuerzos(3);
		c3.horda(2);
		c3.trifulca();
		c3.printEstado();
	}
}