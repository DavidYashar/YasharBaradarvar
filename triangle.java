package assignmentUnitTesting;

import java.util.Scanner;

public class triangle{
    public static void main(String[]args){
        Scanner scanner = new Scanner(System.in);

        System.out.println("Please Enter the length of trinagle sides: ");

             System.out.println("side 1: ");
             int side1 = scanner.nextInt();

             System.out.println("Side 2: ");
             int side2 = scanner.nextInt();

             System.out.println("Side 3: ");
             int side3 = scanner.nextInt();

             String triangleType = classifyTriangle(side1, side2, side3);
             System.out.println("the triangle is: "+ triangleType);

             scanner.close();
    }

    public static String classifyTriangle(int side1, int side2, int side3){
        if(side1 <=0 || side2<=0 || side3<=0){
            return "the values are not valid for a triangle";
        }else if( side1 + side2 <= side3 || side1 + side3 <= side2 || side2+ side3 <= side1){
            return "please change the values, these are not suitable for a triangle";
        }else if(side1 == side2 && side2 == side3){
            return "this is a Equilateral triangle";
        }else if(side1 == side2 || side1 == side3 || side2 == side3){
            return "This is a Isosceles triangle";
        }else{
            return "This is a Scalene triangle";
        }
    }

}