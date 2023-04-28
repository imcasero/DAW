package CitaMedica;
import java.time.*;
public class Pacientes {
   String ident;
   LocalDateTime llegada;
   LocalDateTime horaLlamada;
   LocalDateTime fin;
   long espera;
   long consulta;
    public String getIdent() {
        return ident;
    }
    public void setIdent(String ident) {
        this.ident = ident;
    }
    public LocalDateTime getLlegada() {
        return llegada;
    }
    public void setLlegada(LocalDateTime llegada) {
        this.llegada = llegada;
    }
    public LocalDateTime getHoraLlamada() {
        return horaLlamada;
    }
    public void setHoraLlamada(LocalDateTime horaLlamada) {
        this.horaLlamada = horaLlamada;
    }
    public LocalDateTime getFin() {
        return fin;
    }
    public void setFin(LocalDateTime fin) {
        this.fin = fin;
    }
    public long getEspera() {
        return espera;
    }
    public void setEspera(long espera) {
        this.espera = espera;
    }
    public long getConsulta() {
        return consulta;
    }
    public void setConsulta(long consulta) {
        this.consulta = consulta;
    }
    @Override
    public String toString() {
        return "Pacientes{" + "ident=" + ident + ", llegada=" + llegada + ", horaLlamada=" + horaLlamada + ", fin=" + fin + '}';
    }
}
