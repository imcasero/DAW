class Coche{
	private String nb;
	private String marca;
	private String modelo;
	public int km;
	public boolean nuevo;
	static int contador = 0; //asi se hace unico y no uno por cada coche

	public Coche(String nb , String marca , String modelo ){
		this.nb = nb;
		this.marca = marca;
		this.modelo = modelo;
	}

	/*public Coche(String nb , String marca , String modelo , int km , boolean nuevo){
		this.nb = nb;
		this.marca = marca;
		this.modelo = modelo;
		this.km = km;
		this.nuevo = nuevo;
	}*/

	public String getNb() {
		return nb;
	}
	public String getMarca() {
		return marca;
	}
	public void setMarca(String marca){ //para poder cambiar el modelo solo llamando al set
		this.marca = marca;
	}


}


public class ObjetosExamen{
	public static void main(String[] args) {
		
	}
}