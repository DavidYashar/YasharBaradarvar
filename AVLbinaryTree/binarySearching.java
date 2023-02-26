package AVLbinaryTree;
// for the binary tree, I am using AVL method

import java.util.Scanner;

class Node{
    int data;
    int height;
    Node left;
    Node right;

    Node(int data){
        this.data = data;
        height = 1;
    }
}

public class binarySearching {
    Node root;
// to get  the height of the tree
    int height(Node x){
        if(x == null){
            return 0;

        }
        return x.height;
    }
// the get the max of two data 
    int max(int a, int b){
     return (a > b)?a:b;
    }

    // rotating to right
    Node rightRotate(Node c){
        Node d = c.left;
        Node d2 = d.right;


        // rotating
        d.right = c;
        c.left = d2;


        // new heights
        c.height = max(height(c.left), height(c.right)) + 1;
        d.height = max(height(d.left), height(d.right))+ 1;

        // d is the new root
        return d;
    }

    // rotating to the left
    Node leftRotate(Node l){
        Node g = l.right;
        Node d2 = g.left;


        //rotating 
        g.left = l;
        l.right = d2;

        l.height = max(height(l.left), height(l.right)) + 1;
        g.height = max(height(g.left), height(g.right))+ 1;
//g is the new node
        return g;
    }


// getting the balance of the n data
    int getBalance(Node n){

        if(n == null){
            return 0;
        }

        return height(n.left)- height(n.right);
    }

    Node insert(Node node, int data){
        if(node == null){
            return new Node(data);
        }

        if(data < node.data){
            node.left = insert(node.left, data);
        }else if(data > node.data){
            node.right = insert(node.right, data);
        }else{
            // returns if the duplicate data not allowed
            return node;
        }
// updating the height of parent node
node.height = 1 + max(height(node.left), height(node.right));



//check if the node is unbalanced or not
int balance = getBalance(node);

// if unbalanced, 4 if statemens to use
//if statement for left left
if(balance > 1 && data < node.left.data){
    return rightRotate(node);
}

//if statement for right right
if(balance <-1 && data > node.right.data){
    return leftRotate(node);
}

//if statement for left right
if(balance > 1&& data > node.left.data){
    node.left = leftRotate(node.left);
    return rightRotate(node);
}

// right left 
if(balance <-1 && data < node.right.data){
node.right = rightRotate(node.right);
return leftRotate(node);
}

return node;

    }


    // to string method to show the binary tree
    public String toString(){
        return toString(root, "", "");
    }

    private String toString(Node node, String prefix, String childPrefix){
        StringBuilder sb = new StringBuilder();
        if(node != null){
            sb.append(prefix);
            sb.append(node.data);
            sb.append("\n");
            sb.append(toString(node.left, childPrefix + "├── ", childPrefix+ "|    "));
            sb.append(toString(node.right, childPrefix + "└── ", childPrefix + "    "));

        }
        return sb.toString();
    }


    // preorder traversal
    void preOrder(Node node){
        if(node != null){
            System.out.println(node.data + " ");
            preOrder(node.left);
            preOrder(node.right);
        }
    }

  

    static boolean search( Node node, int data, int [] counter)
{
    counter[0]++;
    if (node == null)
        return false;
 
    if (node.data == data){
        // counter[0]++;
        return true;
    }
    
 
    // check for the left side
    boolean isTrue = search(node.left,data, counter);
   
    // node found, return
    if(isTrue){
        // counter[0]++;
        return true;
    } 
 
    // check for the right side
    boolean istrue1 = search(node.right, data, counter);
    // counter[0]++;
    return istrue1;
}


    // driver method
    public static void main(String [] args){

        // creating the AVL binary tree object
        binarySearching tree1 = new binarySearching();
 
        // promting the user via scanner
        Scanner scanner = new Scanner(System.in);

       
        System.out.println(" enter a value to be added to the binary tree(enter 0 to stop):");
        while(true){
            int val = scanner.nextInt();
            
           if(val == 0){
            break;
           }else{
            tree1.root = tree1.insert(tree1.root, val);
           }
            
        }
        System.out.println(" your binary tree in preOrder is:");

        tree1.preOrder(tree1.root);
        System.out.println("the illustration of your tree:");
        System.out.println(tree1.toString());

     


        System.out.println("enter a value to search");
           int [] count = new int[1];
            int val1 = scanner.nextInt();
            if(search(tree1.root, val1, count)){
               
                      System.out.println("Value " + val1 + " found. "+ "number of iteration:"+ count[0] );
                    } else {
                        System.out.println("Value " + val1 + " not found. "+"number of iteration:"+ count[0]);
                   }
                   scanner.close();  
            }
  
           
        
    }
