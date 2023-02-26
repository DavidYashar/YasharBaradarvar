// for insertion at front, the time complexity equals to O(1)
// for insertion at the end, and the insertion after node, the time complexity
// for both is equal to O(n)

//for space complexity , all three methods are equal to O(1)
//fpr delete, the time complexity is same as above.

public class DllNode {
    int data;
    DllNode prev;
    DllNode next;

    public DllNode(int data){
        this.data = data;
        this.prev = null;
        this.next = null;
    }
}

 class DoublyLinkedList{
    DllNode head;
   
    public DoublyLinkedList(DllNode head){
        this.head = head;
    }

    public void addToEnd(int data){
        DllNode n = new DllNode(data);
        if(head == null){
            head = n;
        }else{
            DllNode curr = head;
            while(curr.next != null){
                curr = curr.next;
            }
            curr.next = n;
            n.prev = curr;
        }
    }

    public void addToStart(int data){
        DllNode n = new DllNode(data);
            if(head == null){
                head = n;
            }else{
               
               n.next = head;
               head.prev = n;
               head = n;
            }
        }

        
public void insertingAfter(DllNode curr, int insertAfter, int data){
  if(curr == null){
    return;
  }
  if(curr.data == insertAfter){
    DllNode n = new DllNode(data);

    if(curr.next != null){
        curr.next.prev = n;
        n.next = curr.next;
    }
    curr.next = n;
    n.prev = curr;
  }
  else{
    insertingAfter(curr.next, insertAfter, data);
  }
}
               
   DllNode deleteLast(){
    DllNode toDelete = head;
    if(head == null || head.next == null){
        head = null;
        return toDelete;
    }
    while(toDelete.next != null){
        toDelete = toDelete.next;
    }
    return toDelete.next.prev = null;
   }  
   
   DllNode deleteStart(){
    DllNode toDelete = head;
    if(head == null || head.next == null){
        head = null;
        return toDelete;
    }
    head = head.next;
    head.prev = null;
    return toDelete;
   }

   DllNode deleteAfter(int delete){
    DllNode toDelete = head;
  
    for(; toDelete != null; toDelete = toDelete.next){
        if(toDelete.data == delete){
            toDelete = toDelete.next;
            break;
        }
    }
    if(toDelete != null){
        if(toDelete.next != null){
            toDelete.next.prev = toDelete.next;
        }
        toDelete.prev.next = toDelete.next;
    }
    return toDelete;
   }
}
   

