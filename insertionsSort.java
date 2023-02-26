import java.util.Random;

public class insertionsSort {
    public static void main(String[] args){

        Random rand = new Random();
        int [] number = new int[10];

        for(int i=0; i< number.length; i++){
            number[i] = rand.nextInt(100);
        }

        System.out.println("before: ");
        printArray(number);

        insert(number);

        System.out.println("\nAfter: ");
        printArray(number);

    }

    private static void printArray(int [] number){
        for(int i =0; i< number.length; i++){
            System.out.println(number[i]);;
        }
    }

    private static void insert(int[] inputArray){
        for(int i =1; i<inputArray.length; i++){
            int currentValue = inputArray[i];

        int j = i -1;

        while(j >=0 && inputArray[j] > currentValue){
            inputArray[j+1] = inputArray[j];
            j--;
        }
        inputArray[j+1] = currentValue;
        }
    }
}
