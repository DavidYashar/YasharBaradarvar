import java.util.PriorityQueue;
import java.util.Map;
import java.util.HashMap;

class HuffmanNode implements Comparable<HuffmanNode> {
    int frequency;
    char value;
    HuffmanNode left;
    HuffmanNode right;
    
    public HuffmanNode(int frequency, char value, HuffmanNode left, HuffmanNode right) {
        this.frequency = frequency;
        this.value = value;
        this.left = left;
        this.right = right;
    }
    
    public boolean isLeaf() {
        return left == null && right == null;
    }
    
    public int compareTo(HuffmanNode other) {
        return frequency - other.frequency;
    }
}

public class Huffman {
    public static Map<Character, String> compress(String input) {
        // Calculate the frequency of each character in the input
        Map<Character, Integer> frequencyTable = new HashMap<>();
        for (char c : input.toCharArray()) {
            frequencyTable.put(c, frequencyTable.getOrDefault(c, 0) + 1);
        }
        
        // Construct a priority queue of Huffman nodes
        PriorityQueue<HuffmanNode> queue = new PriorityQueue<>();
        for (Map.Entry<Character, Integer> entry : frequencyTable.entrySet()) {
            queue.add(new HuffmanNode(entry.getValue(), entry.getKey(), null, null));
        }
        
        // Construct the Huffman coding tree
        while (queue.size() > 1) {
            HuffmanNode left = queue.poll();
            HuffmanNode right = queue.poll();
            queue.add(new HuffmanNode(left.frequency + right.frequency, '\0', left, right));
        }
        HuffmanNode root = queue.poll();
        
        // Generate the variable-length prefix codes for each character
        Map<Character, String> codeTable = new HashMap<>();
        generateCodeTable(root, "", codeTable);
        
        // Compress the input using the generated codes
        StringBuilder compressed = new StringBuilder();
        for (char c : input.toCharArray()) {
            compressed.append(codeTable.get(c));
        }
        
        return codeTable;
    }
    
    private static void generateCodeTable(HuffmanNode node, String code, Map<Character, String> codeTable) {
        if (node.isLeaf()) {
            codeTable.put(node.value, code);
        } else {
            generateCodeTable(node.left, code + "0", codeTable);
            generateCodeTable(node.right, code + "1", codeTable);
        }
    }
    
    public static void main(String[] args) {
        String input = "hello world";
        Map<Character, String> codeTable = compress(input);
        
        System.out.println("Input: " + input);
        System.out.println("Code Table:");
        for (Map.Entry<Character, String> entry : codeTable.entrySet()) {
            System.out.println(entry.getKey() + ": " + entry.getValue());
        }
    }
}
