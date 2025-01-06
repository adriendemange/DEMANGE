//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
/* Adrien Demange 6/01/2025 */
package fr.hecten.tinycar4;
import java.util.Scanner;

//nom complet de la classe : fr.hecten.TestTableau
public class Mission4 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.println("Saisir le chiffre de produits à saisir : \n");
        int n = sc.nextInt();
        sc.nextLine();
        while (n > 5 || n < 1){
            System.out.println("Saisir un chiffre entre 1 et 5 : \n");
            n = sc.nextInt();
        }
        //question1_2 //question 1 et 2 FONCTIONNEL
        question3_4(n); //FONCTIONNEL questions 3 et 4 


    }
    private static void question1_2(){
        Scanner sc = new Scanner(System.in);
        String[] nom;

        nom = new String[5];
        int[] prixHT;

        prixHT = new int[5];
        nom[0] = "Moto Kawa-5";
        nom[1] = "Jeep 50";
        nom[2] = "Toyota Yaris";
        nom[3] = "Citroen C4";
        nom[4] = "Porsche GT3 RS";
        for(String v: nom) {
            System.out.println(v);
        }
        for (int i = 0; i < 5; i++) {
            System.out.println("Saisir le prix pour l'objet suivant :" + nom[i] + "\n");
            prixHT[i] = sc.nextInt();
        }
        for (int i = 0; i < 5; i++) {
            System.out.println("Produit " + nom[i] + "=" + prixHT[i] + "€\n");

        }
    }
    private static void question3_4(int n){
        Scanner sc = new Scanner(System.in);
        String[] nom = new String[n];
        int[] prixHT = new int[n];
        System.out.println("Faîtes maintenant votre panier : \n");
        for (int i = 0; i < n; i++) {
            System.out.println("\nSaisir le nom du produit et son prix \n");
            nom[i] = sc.nextLine();
            prixHT[i] = sc.nextInt();
            sc.nextLine(); // Consomme le retour à la ligne
        }
        int prix_total_panier = 0;
        int prix_mini = 0;
        int prix_max = 0;
        double moyenne = 0;
        for (int i = 0; i < n; i++) {  //Affichage Tableau
            System.out.println("Produit " + nom[i] + "=" + prixHT[i] + "€\n");
            prix_total_panier += prixHT[i];
            moyenne = moyenne + prixHT[i];
            if (prixHT[i] < prix_mini) {
                prix_mini = prixHT[i];
            }
            if (prixHT[i] > prix_max) {
                prix_max = prixHT[i];
            }
        }
        moyenne = moyenne / n;
        System.out.println("\nSomme totale du panier : " + prix_total_panier + "\n");
        System.out.println("\nMoyenne totale du panier : " + moyenne + "\n");
        System.out.println("\nPrix Max du panier : " + prix_max + "\n");
        System.out.println("\nPrix minimum du panier : " + prix_mini + "\n");
    }
}