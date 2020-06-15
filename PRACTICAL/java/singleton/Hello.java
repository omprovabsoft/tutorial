import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.regex.*;
public class Hello {
	public static void main(String[] args) {
        // Create a Scanner object to read input from stdin.
		Scanner scan = new Scanner(System.in); 
		
		// Read a full line of input from stdin and save it to our variable, inputString.
		String inputString = scan.nextLine(); 

		// Close the scanner object, because we've finished reading 
        // all of the input from stdin needed for this challenge.
		scan.close(); 
      
		// Print a string literal saying "Hello, World." to stdout.
		System.out.println("Hello, World. ");
      
	    // TODO: Write a line of code here that prints the contents of inputString to stdout.
		System.out.print(inputString);  
		int[] ar = {2,4,6,9};
		 int s=0;
		  for (int i = 0; i < ar.length; i++) {
            s = s+ar[i];
        }
		System.out.print(s);  
	}
}


