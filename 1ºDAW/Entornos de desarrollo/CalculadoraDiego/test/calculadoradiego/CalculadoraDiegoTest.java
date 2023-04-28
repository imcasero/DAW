/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/UnitTests/JUnit5TestClass.java to edit this template
 */
package calculadoradiego;

import org.junit.jupiter.api.AfterAll;
import org.junit.jupiter.api.BeforeAll;
import org.junit.jupiter.api.Test;
import static org.junit.jupiter.api.Assertions.*;

/**
 *
 * @author GSW1A6033125
 */
public class CalculadoraDiegoTest {
    
    public CalculadoraDiegoTest() {
    }
    
    @BeforeAll
    public static void setUpClass() {
    }
    
    @AfterAll
    public static void tearDownClass() {
    }

    /**
     * Test of add method, of class CalculadoraDiego.
     */
    @Test
    public void testAdd() {
        System.out.println("add");
        double number1 = 3.0;
        double number2 = 2.0;
        CalculadoraDiego instance = new CalculadoraDiego();
        double expResult = 5.0;
        double result = instance.add(number1, number2);
        assertEquals(expResult, result, 0.0);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of subtract method, of class CalculadoraDiego.
     */
    @Test
    public void testSubtract() {
        System.out.println("subtract");
        double number1 = 3.0;
        double number2 = 1.0;
        CalculadoraDiego instance = new CalculadoraDiego();
        double expResult = 2.0;
        double result = instance.subtract(number1, number2);
        assertEquals(expResult, result, 0.0);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of multiply method, of class CalculadoraDiego.
     */
    @Test
    public void testMultiply() {
        System.out.println("multiply");
        double number1 = 1.0;
        double number2 = 1.0;
        CalculadoraDiego instance = new CalculadoraDiego();
        double expResult = 1.0;
        double result = instance.multiply(number1, number2);
        assertEquals(expResult, result, 0.0);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }

    /**
     * Test of divide method, of class CalculadoraDiego.
     */
    @Test
    public void testDivide() {
        System.out.println("divide");
        double number1 = 10.0;
        double number2 = 2.0;
        CalculadoraDiego instance = new CalculadoraDiego();
        double expResult = 5.0;
        double result = instance.divide(number1, number2);
        assertEquals(expResult, result, 0.0);
        // TODO review the generated test code and remove the default call to fail.
        fail("The test case is a prototype.");
    }
    
}
