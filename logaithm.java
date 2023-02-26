public class logaithm {
    public static  int logs(int n){
       n = n / 2;

        if(n <= 1){
            return n;
        }else{
            return logs(n);
        }
        
    }

   
    public static void main(String[] args){
        int x = 8;
      System.out.print(logs(x));
    }
    /**
     * @param n
     * @return
     */
    
}
