class HelloWorld {
 int a = 10;
 public HelloWorld() {
 // Se asigna un número al azar
 a = (int)(Math.random()*10);
 }
 public static void main(String[] args) {
 HelloWorld h1 = new HelloWorld();
h1.print(8);
 }
 public void print(int a) {
 System.out.print(this.a + " ");
 a = 12;
 }
}