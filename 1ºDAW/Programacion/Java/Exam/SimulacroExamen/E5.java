class Empleados{
	//atributos
	int dni;
	String nombre;
	String apellido;
	int salarioba;
	boolean redjor;

	public void print(){
		System.out.println("DNI " + dni);
		System.out.println("Nombre " + nombre);
		System.out.println("Apellido " + apellido);
		System.out.println("Salario " + salarioba);
		if (redjor) {
			System.out.println("Si tiene reduccion de jornada");
		} else {
			System.out.println("No tiene reduccion de jornada");
		}
	}



}


public class E5{
	public static void main(String[] args) {
		Empleados e1 = new Empleados(); //creo el objeto
		e1.dni = 50571052;
		e1.nombre = "Diego";
		e1.apellido = "Casero";
		e1.salarioba = 1000000;
		e1.redjor = true;



		e1.print();//imprime datos
	}

	
}
//Intentos fallidos

		/*

		System.out.println("Dni " + e1.dni);
		System.out.println("Nombre " + e1.nombre);
		System.out.println("Apellido " + e1.apellido);
		System.out.println("Salario " + e1.salarioba);
		if (e1.redjor) {
			System.out.println("si tiene reduccion de jornada");
		} else {
			System.out.println("no tiene reduccion de jornada");
		} */

/*
	private int dni;
	String nombre;
	String apellidos;
	private int salarioba;
	boolean redjor;

	static empleadodefecto (int dni){
		this.dni = dni;
	}
	static empleado (int dni , String nombre , String apellidos , int salarioba , boolean redjor){
		this.dni = dni;
		this.nombre = nombre;
		this.apellidos = apellidos;
		this.salarioba = salarioba;
		this.redjor = redjor;
	}

	static printinfoEmpleado(){
		System.out.println(dni);
		System.out.println(nombre);
		System.out.println(apellidos);
		System.out.println(salarioba);
		if (redjor) {
			System.out.println(" i");
		} else{
			System.out.println("no");
		}
		System.out.println("===============");
	}

*/

/*
empleado e1 = new empleado(1 , "1" , "1" , 1 , true);
		e1.printinfoEmpleado();
*/