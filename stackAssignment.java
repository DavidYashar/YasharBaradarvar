class Node{
    // here the pointer is the link to the lower stack
    Node pointer;
    int data;
}

public class stackAssignment {
    Node top;

    // the top is empty
    public stackAssignment(){
        this.top = null;
    }

    // checks if the stack is empty
    public boolean empty(){
        return top == null;
    }
    public void push(int newData){
        // a new node created
        Node temp = new Node();

        // adding data to the node
        temp.data = newData;

        //assigning the node to the top
        temp.pointer = top;

        // the node is on the top now
        top = temp;
    }

    public void threePush(int data1, int data2, int data3){
    push(data3);
    System.out.println("the third data from top is: "+ data3);
    push(data2);
    System.out.println("the second data from top is: "+ data2);
    push(data1);
    System.out.println("the first data from top is: "+ data1);
    }

    //checking the data on the top
    public int peek(){
        if(!empty()){
            //if not empty, prints the data on top
            return top.data;
        }else{
            //if empty, returns the string
            System.out.println("stack is empty");
            return -1;
        }

    }

    
        // remove the data from the top
        public void pop(){
         if(top == null){
            System.out.println(" the stack is empty"+ top.data);
            return;
         }
         // the variable to report the removed data from the top
         int topData = top.data;
         System.out.println(" the removed data from top: "+topData);
         //top data is the second data from stack, the prev is removed
         top =(top).pointer;
        }

        // to remove three top data. 
        public void threePop(){
            pop();
            pop();
            pop();
        }

        public void printStack(){
            // checks if the stack has data or not
            if(top == null){
                System.out.println("stack is empty");
                return;
            }else{
                // temporary node
                Node temp = top;
                System.out.println("All the data linked in the stack is: ");
                // while loop to show all data in stack
                while(temp != null){
                    
                 System.out.println(temp.data+ "<--");

                 // appoint the temp Node to the pointers
                 temp = temp.pointer;

                 if(temp !=null){
                    System.out.print("-->");
                 }
                }
            }
        }

        public static void main(String[] args){
            stackAssignment test3 = new stackAssignment();
           
            test3.push(3);
            test3.push(6);
            test3.push(7);
            test3.push(23);  

            test3.threePush(34, 35, 36);
    test3.printStack();
    test3.threePop();
    test3.pop();
    System.out.println(" after the top data poped: ");
    test3.printStack();
   
}
}
