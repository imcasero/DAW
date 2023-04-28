class empleado{
		String nombre;
		float salario;
		int edad;
}

public class GestionEmpleados{
	public static void main(String[] args) {
		int numEmpleados = 0; //conador de empleados
		empleado e1 = new empleado(); //ya tenemos un objeto de tipo empleado
		e1.nombre = "Ana";
		e1.salario = 4000.50f;
		e1.edad = 25;

		e1.salario = e1.salario * 1.2f;
		System.out.println(e1.nombre + " " + e1.salario);
	}
}