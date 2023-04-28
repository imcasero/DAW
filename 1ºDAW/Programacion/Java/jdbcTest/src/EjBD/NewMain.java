package EjBD;
import java.sql.*;
import java.util.TimeZone;
import java.util.*;
public class NewMain {
    static ArrayList<Equipo> equipos = new ArrayList<>();
    static Scanner rc = new Scanner(System.in);
    public static void main(String[] args)throws SQLException {
        Connection conn = null;
        try {
            conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/nba?serverTimezone=" + 
                    TimeZone.getDefault().getID(), "chema", "chema01");
            insertarEquipos(conn);
        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            if (conn != null) {
                conn.close();
            }
        }
        
    }

    public static void insertarEquipos (Connection con) throws SQLException {
        PreparedStatement prepStmp = null;
        try {
            prepStmp = con.prepareStatement("INSERT INTO equipos VALUES(?,?,?,?)");
            String nombre;
            String conf;
            String ciu;
            String div;
            do {//Insertaremos datos hasta que el cliente no introduzca un nombre
                System.out.println("Introduzca un nombre");
                nombre = rc.nextLine();
                if (nombre != null) {
                    System.out.println("Introduzca la conferencia");
                        conf = rc.nextLine();
                    System.out.println("Introduzca ciudad");
                        ciu = rc.nextLine();
                    System.out.println("Introduzca division");
                        div = rc.nextLine();
                    prepStmp.setString(1, nombre);
                    prepStmp.setString(2, conf);
                    prepStmp.setString(3, ciu);
                    prepStmp.setString(4, div);}
                int filas = prepStmp.executeUpdate();//Solo contamos el numero de filas afectadas
                System.out.println("Numero de filas insertadas :" +filas);//mostramos el numero de filas insertadas
            } while (nombre != null);
        } catch (SQLException e) {
            e.printStackTrace();
        } finally {
            if (prepStmp != null) {
                prepStmp.close();
            }
        }
    }
}
