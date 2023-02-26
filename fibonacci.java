// import java.util.function.Function;

public class fibonacci {

    static  int fibo (int x){
        if(x <= 1){
            return x;
        }else{
            return fibo(x -1 )+ fibo(x -2);
        }
}

    public static void main(String[]Args){
      


           int d = 30;
           for (int i = 0; i< d; i++ ){
            System.out.println(fibo(i) + " ");
           }

            }
        
    
     
}