package jdbctest;

import java.sql.*;
import java.util.TimeZone;  // usado con MariaDB (quizá no necesario con MySQL)

public class JdbcTest {
	
  public static void main(String[] args) throws SQLException {
	  
	  Connection conn = null;
	  try {
		
		// abrimos conexión con la base de datos: 
		// Construimos un objecto Connection donde le pasamos los siguientes parámetros:
		//     Ubicación del servidor:  localhost y puerto 3306
		//     Nombre de  la base de datos: nba
		//     Usuario de esa base de datos y contraseña: chema y chema01 (adáptalo a tu caso)
        conn = DriverManager.getConnection(
           "jdbc:mysql://localhost:3306/nba?serverTimezone=" + TimeZone.getDefault().getID(), "chema", "chema01");
		
		// Ejercicio 2
		// Utilizar la siguiente instrucción y comentar la anterior si estás utilizando MySQL
		// conn = DriverManager.getConnection(
        //   "jdbc:mysql://localhost:3306/nba", "chema", "chema01");
		   
		
	    mostrarTabla(conn);
	
		   
	  } catch (SQLException e) {
		  e.printStackTrace();
	  } finally {
		  if (conn != null) {
			  conn.close();  // cerramos conexión con base de datos
		  }
	  }
	  
	  // Ver Ejercicio 1
	  // mostrarTabla(conn);

	  
  }
  
  public static void mostrarTabla(Connection con) throws SQLException {
    
	// Los objetos Statement contienen la consulta
    Statement stmt = null;
	
	// construimos la consulta (ojo con no juntar las palabras en el String...)
    String query = "select Nombre, Ciudad, Conferencia, Division " +
                   "from equipos";
	try {
			stmt = con.createStatement();//Creamos el objeto statement
			// Ejecutamos la consulta y obtenemos el resultado en un objeto ResultSet
			ResultSet rs = stmt.executeQuery(query);//Aqui utilizamos el ResulSet 
                                                    //para almacenar la ejecucion la consultaquery
                        
			// Las filas devueltas están en el ResultSet. Lo recorremos de forma parecida a un iterador
			while (rs.next()) {//devuelve un boolean si existe siguiente fila
				String nombre = rs.getString("Nombre");//alamcenamos los valores en strins, y seguidos los imprimimos
				String ciudad = rs.getString("Ciudad");
				String conferencia = rs.getString("Conferencia");
				String division = rs.getString("Division");
				
				System.out.printf("%-20s %-20s %-4s  %-10s \n", nombre, ciudad, conferencia, division);//imprimimos el resultado
			}
		} catch (SQLException e ) {
				e.printStackTrace();
		} finally { 
			if (stmt != null) { stmt.close(); }  // cerramos el  Statement (cierra el ResulSet asociado)
		}
	
  }
  
}

/*
    Ejercicio 1: 
      Quita el comentario a la línea:
	  // mostrarTabla(conn);
	  Recompila y ejecuta: debemos obtener un error, porque cerramos la conexión con la base de datos.
	  Ya no podemos ejecutar sentencias ya que no tenemos comunicacón con el servidor.
	  
	Ejercicio 2: 
	   Realiza de forma distinta la conexión con MySQL al principio del programa y comprueba si funciona.
	  El código actual tiene un "hack" para trabajar con MariaDB (base de datos open source compatible con
	  MySQL) y exige pasarle información sobre la zona horaria... 

*/

