
//  class TreeNode {
//     int val;
//     TreeNode left;
//     TreeNode right;
//     public TreeNode(int val) {
//         this.val = val;
//     }

//  }


// public class BinaryTree {
//     private TreeNode root;

//     public BinaryTree() {
//         root = null;
//     }

//     public void insert(int val) {
//         root = insert(root, val);
//     }

    
//     private TreeNode insert(TreeNode node, int val) {
//         if (node == null) {
//             return new TreeNode(val);
//         } 
//             if (val < node.val) {
//                 node.left = insert(node.left, val);
//             } else if (val > node.val){
//                 node.right = insert(node.right, val);
//             }
        
//         //balancing the tree after inserting 
// int balance = getBalance(node);

// if(balance >1){
//     if(val < node.left.val){
//        node = rightRotate(node);
//     }else{
//         node.left = leftRotate(node.left);
//         node = rightRotate(node);
//     }
// }else if(balance <-1){
//     if(val > node.right.val){
//         node = leftRotate(node);
//     }else{
//         node.right = rightRotate(node.right);
//         node = leftRotate(node);
//     }
// }
// return node;

//     }

// private int getHeight(TreeNode node){
//     if(node == null){
//         return 0;
//     }
//     int leftHeight = getHeight(node.left);
//     int rightHeight = getHeight(node.right);
//     return Math.max(leftHeight, rightHeight)+ 1;
// }

// private int getBalance(TreeNode node){
//     if(node == null){
//         return 0;
//     }
//     int leftHeight = getHeight(node.left);
//     int rightHeight = getHeight(node.right);

//     return leftHeight - rightHeight;
// }



// private TreeNode leftRotate(TreeNode node){
//     TreeNode newRoot = node.right;
//     node.right = newRoot.left;
//     newRoot.left = node;
//     return newRoot;
// }

// private TreeNode rightRotate(TreeNode node){
//     TreeNode newRoot = node.left;
//     node.left = newRoot.right;
//     newRoot.right = node;
//     return newRoot;
// }

//     public void traverseInOrder() {
//         traverseInOrder(root);
//     }

//     private void traverseInOrder(TreeNode node) {
//         if (node != null) {
//             traverseInOrder(node.left);
//             System.out.println(node.val + " ");
//             traverseInOrder(node.right);
//         }
//     }

//     void traversePreOrder(TreeNode node){
//         if(node == null){
//             return;
//         }
//           System.out.println(node.val+ " ");  
//           traversePreOrder(node.left);
//           traversePreOrder(node.right);
       
//     }
//      int count(TreeNode node){
//         if(node == null){
//             return 0;
//         }else{
//             int countLeft = count(node.left);
//             int countRight = count(node.right);
//             return countLeft + countRight + 1;
//         }
//      }
//     void traversePostOrder(TreeNode node){
//         if(node == null){
//             return;
//         }
//         traversePostOrder(node.left);
//         traversePostOrder(node.right);
//         System.out.println(node.val+ " ");
//     }



//     public String toString(){
//         return toString(root, "", "");
//     }

//     private String toString(TreeNode node, String prefix, String childPrefix){
//         StringBuilder sb = new StringBuilder();
//         if(node != null){
//             sb.append(prefix);
//             sb.append(node.val);
//             sb.append("\n");
//             sb.append(toString(node.left, childPrefix + "├── ", childPrefix+ "|    "));
//             sb.append(toString(node.right, childPrefix + "└── ", childPrefix + "    "));

//         }
//         return sb.toString();
//     }
//     public static void main(String[] args) {
//         // BinaryTree tree = new BinaryTree();
//         // tree.insert(5);
//         // tree.insert(3);
//         // tree.insert(7);
//         // tree.insert(1);
//         // tree.insert(9);
    



//     BinaryTree tree1 = new BinaryTree();
//     tree1.insert(1);
//     tree1.insert(2);
//     tree1.insert(3);
//     tree1.insert(4);
//     tree1.insert(5);
//     tree1.insert(6);
//     tree1.insert(8);
//     tree1.insert(18);
//     tree1.insert(19);
//     // tree1.insert(9);
//     // tree1.insert(10);
//     // tree1.insert(7);
//     // tree1.insert(30);
//     // tree1.insert(44);
      
//     System.out.println("\n traverse in order:\n");
//     tree1.traverseInOrder(tree1.root);
//     System.out.println("\n traverse in pre order:\n");
//     tree1.traversePreOrder(tree1.root);
//     System.out.println("\n traverse in post order:\n");
//     tree1.traversePostOrder(tree1.root);
//     System.out.println("number of nodes are:");
//     int num= tree1.count(tree1.root);
//     System.out.println(num);
//     System.out.println(tree1.toString());

    
//     }
// }
