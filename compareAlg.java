public class compareAlg {
    public static void main(String[] args){
        for (int n = 1; ; n++){
            int exp = 3;
            //Algorithm A
            int logA =  (int) (1000 * Math.pow(n ,exp));
            //Algorithm B
            int logB = (int) (Math.pow(2, n));

            if(logA < logB){
                System.out.println(" The Algorithm B is faster than Algorithm A until the array of size: "+ n);
                System.out.println("Algorithm A: "+ logA);
                System.out.println("Algorithm B: "+ logB);
                break;
            }
        }
    }
}
