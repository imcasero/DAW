class Coche{
	private String nbastidor;
	private String marca;
	private String modelo;
	public int km;
	public boolean nuevo;
	public static int i = 0;


	public Coche(String nbastidor , String marca , String modelo ){
		this.nbastidor = nbastidor;
		this.marca = marca;
		this.modelo = modelo;
		i++;
	}

	public Coche(String nbastidor , String marca , String modelo , int km , boolean nuevo){

		this.nbastidor = nbastidor;
		this.marca = marca;
		this.modelo = modelo ;
		this.km = km;
		this.nuevo = nuevo;
		i++;
	}
	public void imprimeDatos(){

		System.out.println(" El numero de bastidor es " + nbastidor);
		System.out.println(" La marca es " + marca);
		System.out.println(" El modelo es " + modelo);
		System.out.println("Tiene esta cantidad de km" + km);

		if (nuevo) {
			System.out.println("El coche es nuevo");
		} else {
			System.out.println("El coche no es nuevo");
		}
		System.out.println("=================================");
		
		
	}



}


public class Coches{
	public static void main(String[] args) {
		

		Coche c1 = new Coche( "123a" , "Seat" , "Leon" , 10000 , false);
		Coche c2 = new Coche( "123b" , "Seat" , "Ibiza" , 0 , true);

		c1.imprimeDatos();
		c2.imprimeDatos();
		System.out.println("Coches creados : " + Coche.i);
		
		
	}
}