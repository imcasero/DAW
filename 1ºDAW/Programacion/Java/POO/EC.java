class Jugador{
	String nombre;
	int edad;
	String juego;
	boolean activo;

	public Jugador(String nombre){
		this.nombre = nombre;
	}

	public Jugador(String nombre , int edad , String juego , boolean activo){
		this.nombre = nombre;
		this.edad = edad;
		this.juego = juego;
		this.activo = activo; 
	}
	public void print(){
		System.out.println("El nombre es : " + nombre);
		System.out.println("Su edad es : " + edad);
		System.out.println("Juega a :" + juego);

		if (activo) {
			System.out.println("Esta en activo");
		} else if (activo == false){
			System.out.println("Esta retirado");
		}
		System.out.println("===================");
	}

}
public class EC{
	public static void main(String[] args) {
		Jugador j1 = new Jugador("Diego" , 20 , "LOL" , true);
		Jugador j2 = new Jugador("Juan carlos");

		j1.print();
		j2.print();
	}
}