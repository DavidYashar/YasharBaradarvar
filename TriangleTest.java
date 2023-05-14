package assignmentUnitTesting;

import org.junit.Test;
import static org.junit.Assert.*;

public class TriangleTest {

    @Test
    public void testEquilateralTriangle() {
        assertEquals("this is a Equilateral triangle", triangle.classifyTriangle(5, 5, 5));
    }

    @Test
    public void testIsoscelesTriangle() {
        assertEquals("This is a Isosceles triangle", triangle.classifyTriangle(7, 7, 9));
    }

    @Test
    public void testScaleneTriangle() {
        assertEquals("This is a Scalene triangle", triangle.classifyTriangle(3, 4, 5));
    }

    @Test
    public void ObtuseTriangle() {
        assertEquals("This is a Scalene triangle", triangle.classifyTriangle(7, 9, 12));
    }

    @Test
    public void testInvalidTriangle() {
        assertEquals("please change the values, these are not suitable for a triangle", triangle.classifyTriangle(2, 3, 6));
    }

    @Test
    public void testNegativeSideLengths() {
        assertEquals("the values are not valid for a triangle", triangle.classifyTriangle(-2, 4, 5));
    }

    @Test
    public void testZeroSideLength() {
        assertEquals("the values are not valid for a triangle", triangle.classifyTriangle(0, 4, 5));
    }

    @Test
    public void testLargeSideLengths() {
        assertEquals("this is a Equilateral triangle", triangle.classifyTriangle(10000, 10000, 10000));
    }

    @Test
    public void LargeSideTriangle() {
        assertEquals("this is a Equilateral triangle", triangle.classifyTriangle(1000000, 1000000, 1000000));
    }
}
