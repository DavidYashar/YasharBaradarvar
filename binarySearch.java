public class binarySearch {
    public static void main(String[] args){

        int[] ints = {1,2,3,4,5,6,7,8,5,4,3,11};
        System.out.println(binarySearching(ints, 5));
    }

    private static int binarySearching(int[] numbers, int numberToFind){

      int low = 0;
      int high = numbers.length -1;


      while(low <= high){
        int middlePosition = (low + high)/2;
        int middleNumber = numbers[middlePosition];

        if(numberToFind == middleNumber){
            return middlePosition;
        }
        if(numberToFind < middleNumber){
            high = middlePosition -1;
        }else{
            low = middlePosition + 1;
        }
      }
return -1;
    }
}
