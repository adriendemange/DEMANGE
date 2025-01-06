package fr.hecten.tinycar5;
import java.util.Scanner;
// SURCHARGE DE FONCTION

public class tinycar5 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.println("Prix HT ?  :\n");
        int prix = sc.nextInt();
        System.out.println("TVA ?  :\n");
        double tva = sc.nextDouble();
        double prixTTC = calculerprixTTC(prix, tva);
        System.out.println("Appel de la fonction calculerPrixTTC avec PrixHT = 50000 :\n" + prixTTC + "\n");
    }
    public static double calculerprixTTC(double prix, double tva){
        double prixTTC = prix * (1 + tva) ;
        return prixTTC;
    }
    public static void welcome(String Nom){
        System.out.println("Bonjour " + Nom + "\n");
    }
}
