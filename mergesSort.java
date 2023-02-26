import java.util.Random;

public class mergesSort {
  public static void main(String[] args){
    Random rand = new Random();
    int [] numbers = new int[10];

    for(int i =0; i< numbers.length; i++){
        numbers[i] = rand.nextInt(100);
    }

    System.out.println("before: ");
    printArray(numbers);
    mergeSort(numbers);
   
    System.out.println("\nAfter");
    printArray(numbers);
  }
    private static void mergeSort(int [] inputArray){
        int arrayLength = inputArray.length;

        if(arrayLength <2){
            return;
        }

        int midPoint = arrayLength /2;

        int[] leftHalf = new int[midPoint];
        int [] rightHalf = new int[arrayLength - midPoint];

        for(int i = 0; i < midPoint; i ++){
            leftHalf[i] = inputArray[i];
        }
        for (int i = midPoint ; i < arrayLength; i++){
            rightHalf[i - midPoint] = inputArray[i];
        }

        mergeSort(leftHalf);
        mergeSort(rightHalf);
        merge(inputArray, leftHalf, rightHalf);
    }
    private static void merge(int [] inputArray, int [] leftHalf, int [] rightHalf){
     int leftSize = leftHalf.length;
     int rightSize = rightHalf.length;

     int i =0;
     int j =0;
     int k =0;
     while(i < leftSize && j < rightSize){
        if(leftHalf[i] <= rightHalf[j]){
            inputArray[k] = leftHalf[i];
            i++;
        }else{
            inputArray[k] = rightHalf[j];
            j++;
        }
        k++;
     }
     while( i < leftSize){
        inputArray[k] = leftHalf[i];
        i++;
        k++;
     }
     while(j < rightSize){
        inputArray[k]= rightHalf[j];
        j++;
        k++;
     }
    }

    private static void printArray(int [] numbers){
        for(int i = 0; i< numbers.length; i++){
            System.out.println(numbers[i]);
        }
    }
  }