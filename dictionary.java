import java.util.Dictionary;
import java.util.Enumeration;

import java.util.Hashtable;

public class dictionary {
    public static void main(String[] args){
        Hashtable<Integer, String> dic = new Hashtable<>();
        dic.put(1, "dave");
        dic.put(2, "milad");
        System.out.println(dic.get(1));
        System.out.println(dic.get(2));
        System.out.println(dic.size());

        Dictionary<Integer, String> dict = new Hashtable<Integer, String>();
        dict.put(2, "$200");
        dict.put(3, "400$");
         
        for(Enumeration<String> i = dict.elements(); i.hasMoreElements();){
         System.out.println("values in this hash table Dictionary: "+ i.nextElement());
        }
}
}
