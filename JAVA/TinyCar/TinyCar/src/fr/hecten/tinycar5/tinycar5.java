//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
/* Adrien Demange 6/01/2025 */
package fr.hecten.tinycar5;
import java.util.Scanner;

//nom complet de la classe : fr.hecten.TestTableau
public class tinycar5 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.println("Saisir le nombre de produits à saisir : ");
        int n = sc.nextInt();
        sc.nextLine();
        while (n > 5 || n < 1){
            System.out.println("Saisir un chiffre entre 1 et 5 : ");
            n = sc.nextInt();
        }
        String[] nom = new String[n];
        int[] prixHT = new int[n];
        System.out.println("Faîtes maintenant votre panier : \n (Description dispo pour les mots suivants : Toyota / Moto) ");
        for (int i = 0; i < n; i++) {
            System.out.println("\nSaisir le nom du produit et son prix");
            nom[i] = sc.nextLine();
            prixHT[i] = sc.nextInt();
            sc.nextLine(); // Consomme le retour à la ligne
        }
        double tva = 0.2;
        //panier_construit();
        stat_panier(nom, prixHT, n);
        Double[] prix_TTC = new Double[n];
        prix_TTC = calcul_TTC(nom, prixHT, n, tva);
        display(nom, prixHT, n, prix_TTC);
        stat_moyenne(nom, prixHT, n);
        stat_maximum(nom, prixHT, n);
        stat_minimum(nom, prixHT, n);
    }
    private static Double[] calcul_TTC(String[] nom, int[] prixHT,int n, double tva){
        Double[] prix_TTC = new Double[n];
        for (int i = 0; i < n; i++) {  //Affichage Tableau
            //System.out.println("Produit " + nom[i] + ":" + prixHT[i] + "€.");
            prix_TTC[i] = prixHT[i] * ( 1 + tva );
            //System.out.println("Prix TTC (20%) du produit " + prix_TTC[i] + "\n");
        }
        return prix_TTC;
    }
    private static void panier_construit(){
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
    private static void stat_moyenne(String[] nom, int[] prixHT,int n) {
        double moyenne = 0;
        for (int i = 0; i < n; i++) {  //Affichage Tableau
            moyenne = moyenne + prixHT[i];
        }
        moyenne = moyenne / n;
        System.out.println("\nMoyenne totale du panier : " + moyenne);
    }
    private static void stat_minimum(String[] nom, int[] prixHT,int n) {
        int prix_mini = prixHT[0];
        String produit_min = nom[0];
        for (int i = 0; i < n; i++) {  //Affichage Tableau
            if (prixHT[i] <= prix_mini) {
                prix_mini = prixHT[i];
                produit_min = nom[i];
            }
        }
        System.out.println("\nPrix minimum du panier et nom du produit: " + prix_mini + "/" + produit_min + "\n");
    }
    private static void stat_maximum(String[] nom, int[] prixHT,int n) {
        int prix_max = prixHT[0];
        String produit_max = nom[0];
        for (int i = 0; i < n; i++) {  //Affichage Tableau
            if (prixHT[i] >= prix_max) {
                prix_max = prixHT[i];
                produit_max = nom[i];
            }
        }
        System.out.println("\nPrix Max du panier et nom du produit: " + prix_max + "/" + produit_max);
    }
    private static void stat_panier(String[] nom, int[] prixHT,int n){
        int prix_total_panier = 0;
        int prix_mini = prixHT[0];
        int prix_max = prixHT[0];
        String produit_max = nom[0];
        String produit_min = nom[0];
        double moyenne = 0;
        for (int i = 0; i < n; i++) {  //Affichage Tableau
            System.out.println("Produit " + nom[i] + "=" + prixHT[i] + "€\n");
            prix_total_panier += prixHT[i];
        }
        System.out.println("\nSomme totale du panier : " + prix_total_panier);
    }
    private static void display(String[] nom, int[] prixHT,int n, Double[] prix_TTC){   // Mission5
        System.out.println("Procédure M5 : \n");
        for (int i = 0; i < n; i++) {  //Affichage Tableau

            if (nom[i].equals("Toyota")){
                System.out.println("La Toyota Yaris a un prix de " + prixHT[i] + "€.\nC'est un véhicule Japonais qui est de très bonne qualité.");
                System.out.println("Prix TTC (20%) de "+ nom[i] + ":" + prix_TTC[i] + "\n");
            }
            else if (nom[i].equals("Moto")){
                System.out.println("La Moto Kawazaki a un prix de " + prixHT[i] + "€.\nC'est une Moto Japonaise qui est de très bonne qualité.");
                System.out.println("Prix TTC (20%) de "+ nom[i] + ":" + prix_TTC[i] + "\n");
            }
            else {
                System.out.println(nom[i]+ " a un prix de " + prixHT[i] + "€.");
                System.out.println("Prix TTC (20%) de "+ nom[i] + ":" + prix_TTC[i] + "\n");

            }
        }
    }
}