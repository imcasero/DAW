/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package pediatria;

/**
 *
 * @author GSW1A6033125 Diego Casero Martín  
 */
class Nino{
        int codigo;
	static int cod=0; //como quiero acumularlo lo hago estatico
	String nombre;
	String apellido;
	char sexo;
	String fecha;
	int estatura;
	int peso;

	public  Nino(String nombre ,String apellido ,char sexo,String fecha ,int estatura ,int peso){
		cod++;
		this.nombre = nombre;
		this.apellido = apellido;
		this.sexo = sexo;
		this.fecha = fecha;
		this.estatura = estatura;
		this.peso = peso;
                this.codigo = cod; 
		}

    public int getCodigo() {
        return codigo;
    }

    public void setCodigo(int codigo) {
        this.codigo = codigo;
    }

    public static int getCod() {
        return cod;
    }

    public static void setCod(int cod) {
        Nino.cod = cod;
    }

    

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getApellido() {
        return apellido;
    }

    public void setApellido(String apellido) {
        this.apellido = apellido;
    }

    public char getSexo() {
        return sexo;
    }

    public void setSexo(char sexo) {
        this.sexo = sexo;
    }

    public String getFecha() {
        return fecha;
    }

    public void setFecha(String fecha) {
        this.fecha = fecha;
    }

    public int getEstatura() {
        return estatura;
    }

    public void setEstatura(int estatura) {
        this.estatura = estatura;
    }

    public int getPeso() {
        return peso;
    }
    public void setPeso(int peso) {
        this.peso = peso;
    }
	}
