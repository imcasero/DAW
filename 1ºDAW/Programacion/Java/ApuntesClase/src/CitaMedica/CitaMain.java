package CitaMedica;
import java.util.*;
import java.time.*;
public class CitaMain {
    static Scanner rc = new Scanner(System.in);
    static ArrayList<Pacientes> general = new ArrayList<>(); //solo lo utilizo para comprobar ident
    static ArrayList<Pacientes> listaPacientes = new ArrayList<>();
    static ArrayList<Pacientes> historial = new ArrayList<>();
    static ArrayList<Pacientes> consulta = new ArrayList<>();
    //static int cont;
    public static void main(String[] args) {
        int fun = 1;
        while (fun!=0){
        System.out.println("---------------------------------");
        System.out.println("1.Solicitar cita");
        System.out.println("2.Llamar al siguiente paciente");
        System.out.println("3.Llamar paciente");
        System.out.println("4.Mostrar lista actual");
        System.out.println("5.Mostrar historial reciente");
        System.out.println("6.Marcar como atendido");
        System.out.println("7.Mostrar historial diario");
        System.out.println("8.Estadisticas");
        System.out.println("0.Cierre");
        System.out.println("---------------------------------");
        fun = rc.nextInt();
        
        switch(fun){
            default -> {System.out.println("Fin de programa");
                        fun = 0;}
            case 1 -> {//nuevo identificador
                generator();
            }
            case 2 -> {//llamar siguiente paciente
                llamarPaciente();
            }
            case 3 -> {//Llaamar a un determinado paciente
                System.out.println("Introduzca el paciente :");
                String id = rc.nextLine();
                llamarPaciente(id);
            }
            case 4 -> {//Mostrar lista de espera identificador + hora llegada
                mostrarLista();
            }
            case 5 -> {//ultimos 5 historial
               mostrarHistorial(5);
            }
            case 6 -> {//marcar paciente como ya atendido
                pasarHistorial();
            }
            case 7 -> {//Historial
                mostrarHistorial();
            }
            case 8 -> {//Estadisticas:Nºtotal,timepo m espera,timepo m atencion.
                calcEstadisticas();
            }
        }
        }
    }
    public static void generator(){ //genera randoms
        String aux;
            char l1 = getRandomCharacter('A' , 'Z'); // caracteres random
            char n1= getRandomCharacter('0' , '9');
            char l2 = getRandomCharacter('A' , 'Z');
            char n2= getRandomCharacter('0' , '9');
            aux = String.valueOf(l1)+String.valueOf(n1)+String.valueOf(l2)
                    +String.valueOf(n2); //concatenación de los 4 randoms
            if (exist(aux)) { //compruebo si existe
            creacionPaciente(aux);
            } else  {
                generator();//recursividad para generar uno si o si
            }
    }
    public static char getRandomCharacter(char a, char b) { //random
        return (char) (a + Math.random() * (b - a + 1));
    }
    public static void creacionPaciente(String i){ //guarda el paciente en la lista
        Pacientes x = new Pacientes();
        x.setIdent(i);
        x.setLlegada(LocalDateTime.now());
        listaPacientes.add(x);
        general.add(x);
    }
    public static boolean exist(String i){
        for (Pacientes a :general) {
            if (a.ident.equals(i)) {
                return false;
            }
        }
        return true;
    }
    public static void llamarPaciente(){
        busqueda();
    }
    public static void busqueda(){//busca un paciente , el primero
        if (listaPacientes.isEmpty()) {
            System.out.println("No hay pacientes aun en espera");
        } else {
            String auxIdent = listaPacientes.get(0).ident;
            if (consulta.isEmpty()) {//si esta vacio
                pasarConsulta(auxIdent);
            } else {
                pasarHistorial();
                pasarConsulta(auxIdent);
            }
        }
    }
    public static void pasarConsulta(String a){// pasa a la consulta
        //System.out.println(listaPacientes.size());
        if (listaPacientes.isEmpty()) {
            System.out.println("No hay pacientes aun en espera");
        } else {
            for (Pacientes i: listaPacientes) {
                if (a.equals(i.ident)) {
                    i.horaLlamada = LocalDateTime.now();//Hora a la que es llamada
                    i.espera = Duration.between(i.llegada , i.horaLlamada).toMillis();
                    consulta.add(i);
                    listaPacientes.remove(i);
                    break;
                }
            }
        }
    }
    public static void pasarHistorial(){//limpia la consulta y lo manda al historial
        consulta.get(0).fin = LocalDateTime.now();//Hora fin de la conulta
        consulta.get(0).consulta =Duration.between(consulta.get(0).horaLlamada , consulta.get(0).fin).toMillis();
        historial.add(consulta.get(0));//pasamos el paciene al historial
        consulta.clear();//Limpiamos la consulta
    }
    public static void llamarPaciente(String id){//llama a un paciente en concreto
        for (Pacientes i: listaPacientes) {//busco el paciente
            if (id.equals(i.ident)) {
              if (consulta.isEmpty()) {//si la consulta esta vacia, pasa directamente
            pasarConsulta(id);
        } else { //si no mandamos al de la consulta al historial
            pasarHistorial();
            pasarConsulta(id);
        } 
            }
        }
    }
    public static void mostrarLista(){ //muestra la lista completa
        listaPacientes.forEach(a -> {
            System.out.println(a.toString());
        });
    }
    public static void mostrarHistorial(int siz){ // hasta 5
        int com =comprobarSize(); //comprubo si la lista esta vacia
        if (com <= siz) { //dependiendo los casos, para evitar excepciones
            for (int i = 0; i < siz; i++) {
                System.out.println(historial.get(i).toString());
            }
        } else if(com == 0){
            System.out.println("Aun no se ha atendido a gente");
        } else{
            for (int i = 0; i < com; i++) {
                System.out.println(historial.get(i).toString());
            }
        }
    }
    public static void mostrarHistorial(){
        historial.forEach(a -> { //forEach chetado jejeje
            System.out.println(a.toString());
        });
    }
    public static int comprobarSize(){ //para comprobar el size de las listas
        int com = historial.size();
        return com;
    }
    public static void calcEstadisticas(){
        if (historial.isEmpty()) { //si esta vacia
            System.out.println("No hay pacientes para calcular estadisticas");
        } else { //calculo las medias mediante auxiliares
            long em=0;
            long cm=0;
            int size;
            size = comprobarSize();
            for (Pacientes a: historial){
                em+=a.espera;
                cm+=a.consulta;
            }
            em = em/size;
            cm = cm/size;
            System.out.println
            ("Nºpacientes :" +size+ " Tiempo medio espera :"+em+" Tiempo medio consulta :"+ cm);
    }
    }
}