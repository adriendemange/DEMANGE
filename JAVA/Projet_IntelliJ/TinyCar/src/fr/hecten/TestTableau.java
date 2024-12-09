//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
package fr.hecten;
import java.util.Scanner;
import java.util.Arrays;
//nom complet de la classe : fr.hecten.TestTableau
public class TestTableau {
    public static void main(String[] args) {
        //TIP Press <shortcut actionId="ShowIntentionActions"/> with your caret at the highlighted text
        // to see how IntelliJ IDEA suggests fixing it.
        System.out.print("Hello and welcome!");
        int[] myArray;
        System.out.print("Saisir la taille du tableau : \n");
        Scanner sc = new Scanner(System.in);
        int taille = sc.nextInt();
        sc.nextLine();
        myArray = new int[taille];
        myArray[0] = 1;
        myArray[1] = 2;
       // System.out.println("tab 0 = "+ myArray[0]);
        for (int i=0; i<taille;i++) {
            if (myArray[i] == 0){
                System.out.print("Saisir la valeur de tab[" +(i+1)+ "] :\n");
                myArray[i]=sc.nextInt();
                sc.nextLine();
            }
            System.out.println("tab " + (i+1) + "=" + myArray[i]);
        }
        System.out.print("Methode foreach \n");
        for(int v: myArray) {
            System.out.println(v);
        }
        //System.out.println("Tableau après le tri : " + myArrays.toString(myArray));

        String[] tab_caractere;
        System.out.print("Saisir la taille du tableau de caractère: \n");
        int taille_caractere = sc.nextInt();
        sc.nextLine();
        tab_caractere = new String[taille_caractere];
        //tab_caractere[0] = "Adrien";
        //System.out.println("tab 0 = " + tab_caractere[0]);
        for (int i=0; i<taille_caractere;i++) {
            System.out.print("Saisir la valeur de tab_caractere[" +(i+1)+ "] :\n");
            tab_caractere[i]=sc.nextLine();
        }

        for(String v: tab_caractere) {
            System.out.println(v);
        }

    }
}