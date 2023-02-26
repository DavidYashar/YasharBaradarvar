public class doubleLinkedList {
    private Node head;
    public static class Node{
        public int data;
        public Node next;
        public Node prev;

        private Node(int data){
            this.data = data;
        }
    }
    //inserting node at the front of the 
    public void push(int newData){
        Node newNode = new Node(newData);
        newNode.next = head;
        newNode.prev = null;

        if(head != null){
            head.prev = newNode;
        }
       head = newNode;
    }

    public void insertBefore(Node nextNode, int newData){
      if(nextNode == null){
        System.out.println("the given next node is null");
        return;
      }

      // creating new node;
      Node newNode = new Node(newData);
    // prev of new node as prev of next node
    newNode.prev = nextNode.prev;

    // making next of new node as next node

    newNode.next = nextNode;
    if(newNode.prev != null){
        newNode.prev.next = newNode;

    }else{
        head = newNode;
    }

    }


    public void insertAfter(Node prevNode, int newData){

        if(prevNode == null){
            System.out.println(" the prev node can not be null");
            return;
        }
    
//creqating new node
        Node newNode = new Node(newData);

        //making next of the new node as the next of prev node
        newNode.next = prevNode.next;
        
        prevNode.next = newNode;

        //making the prev node as previosu node
        newNode.prev = prevNode;

        if(newNode.next != null){
            newNode.next.prev = newNode;
        }

    }

    public void append(int newData){

        //creatinmg new node
        Node newNode = new Node(newData);

        Node last = head;

        // this node stays in the last, so the next of it is null

        newNode.next = null;

        if(head == null){
            newNode.prev = null;
            head = newNode;
           return;
        }

        // traverse to the last node
while (last.next != null){
    last = last.next;
}

// changing the next to new node
last.next = newNode;

//making the last node as the previous of new node
newNode.prev = last;
    }



    public void printList(Node node){
        Node last = null;
        System.out.println("traverse in forward");

        while(node != null){
            System.out.println(node.data + " ");

            last = node;
            node = node.next;
        }
        System.out.println();
        System.out.println("travese in reverse");

        while(last != null){
            System.out.println(last.data+ " ");
            last = last.prev;
        }
    }

public static void main(String[] args){

    // stating with empty list
   doubleLinkedList dll = new doubleLinkedList();


   dll.append(7);

   dll.push(9);

   dll.push(2);
   dll.append(5);

   dll.insertAfter(dll.head.next, 90);
  

   System.out.println(" the doublelinked list is\n: ");
   dll.printList(dll.head);
}
}
