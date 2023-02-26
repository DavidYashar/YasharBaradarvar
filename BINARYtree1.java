
//     class TreeNode {
//         int val;
//         TreeNode left;
//         TreeNode right;
    
//         public TreeNode(int val) {
//             this.val = val;
//             left = null;
//             right = null;
//         }
//     }
//     // This is a binary tree linkedlist
//     class LinkedListNode {
//         int val;
//         LinkedListNode next;
    
//         public LinkedListNode(int val) {
//             this.val = val;
//             next = null;
//         }
//     }
    
//     class BINARYtree {
//         TreeNode root;
    
//         public BINARYtree() {
//             root = null;
//         }
    
//         // Convert binary tree to linked list
//         LinkedListNode convertToList(TreeNode node) {
//             if (node == null) {
//                 return null;
//             }
//             LinkedListNode leftList = convertToList(node.left);
//             LinkedListNode rightList = convertToList(node.right);
//             LinkedListNode current = new LinkedListNode(node.val);
//             current.next = rightList;
//             if (leftList == null) {
//                 return current;
//             }
//             LinkedListNode tail = leftList;
//             while (tail.next != null) {
//                 tail = tail.next;
//             }
//             tail.next = current;
//             return leftList;
//         }
//     }
    
//  class Main {
//         public static void main(String[] args) {
//             BINARYtree tree = new BINARYtree();
//             tree.root = new TreeNode(1);
//             tree.root.left = new TreeNode(2);
//             tree.root.right = new TreeNode(3);
//             tree.root.left.left = new TreeNode(4);
//             tree.root.left.right = new TreeNode(5);
//             LinkedListNode list = tree.convertToList(tree.root);
//             System.out.print("The linked list representation of the binary tree is: ");
//             while (list != null) {
//                 System.out.print(list.val + " ");
//                 list = list.next;
//             }
//         }
//     }
