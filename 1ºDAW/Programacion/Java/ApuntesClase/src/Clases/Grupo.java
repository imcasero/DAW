package Clases;
import java.util.*;
import java.time.LocalDateTime;

public class Grupo {
    int aula;
    int curso;
    String etapa;
    int tutor;
    ArrayList<Alumno> alumnos = new ArrayList<>();
}
class Alumno{
    String nombre;
    String apellido;
    int matricula;
    LocalDateTime fecha;
}
