//TIP To <b>Run</b> code, press <shortcut actionId="Run"/> or
// click the <icon src="AllIcons.Actions.Execute"/> icon in the gutter.
package fr.hecten.tinycar4;
import java.util.Scanner;

//nom complet de la classe : fr.hecten.TestTableau
public class Mission1 {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.println("Saisir le nombre de produits à saisir : \n");
        int n = sc.nextInt();
        sc.nextLine();
        for(int i=0; i<n; i++) {
            produit();
            System.out.println("Pour être sûr voulez-vous continuer vers un nouveau produit ? Y/N \n");
            String condition = sc.nextLine();
            if (condition.equals("Y")) {
                System.out.println("------------ \n");
            }
            if (condition.equals("N")) {
                System.out.println("Arrêt du programme\n");
                System.exit(1);
            }
        }
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
        System.out.println("Faîtes maintenant votre panier : \n");
        for (int i = 0; i < 5; i++) {
            System.out.println("\nSaisir le nom du produit et son prix \n");
            nom[i] = sc.nextLine();
            prixHT[i] = sc.nextInt();

        }

    }
    private static void produit() {
        Scanner sc = new Scanner(System.in);
        double tva = 0;
        System.out.println("Saisir le mot de passe pour accéder à l'application \n");
        String passwd = sc.nextLine();
        int i = 0;
        while (!passwd.equals("Padawan") ) {

            if (passwd.equals("exit")){
                System.out.println("Arrêt du programme. Bye bye...\n");
                System.exit(1);
            }
            if (i == 2){
                System.out.println("3 Tentatives effectuées, vous ne pouvez pas accéder à l'application\nArrêt du programme");
                System.exit(1);
            }
            System.out.println("Vous n'êtes pas autorisé à accéder à cette application. Réessayez !");
            System.out.println("Veuillez ressaisir le mot de passe pour accéder à l'application \n(Tapez exit si vous êtes bloqués)\n");
            passwd = sc.nextLine();
            i++;
        }

        System.out.println("Saisir la marque du produit \n");
        String marque = sc.nextLine();
        System.out.println("Saisir le modèle du produit \n");
        String modele = sc.nextLine();
        int prix_citroen_picasso = 25000;
        if ( (marque.equals("Citroen") && (modele.equals("Picasso")) ) ) {
            System.out.println("Le prix de ce produit est de " + prix_citroen_picasso + "\nArrêt du programme !");
            System.exit(2); // Arrête immédiatement le programme
        }
        System.out.print("Le produit n'a pas été trouvé. Saisir le prix de la voiture Hors Taxe en €: \n");
        double prix_ht = sc.nextDouble();
        sc.nextLine();
        if (prix_ht > 20000) {
            prix_ht = prix_ht - (0.1 * prix_ht );
            System.out.println("Voici le prix HT avec la remise de 10% :" + prix_ht + "\n");
        }
        System.out.println("1- Sans carte, 2- avec carte gold et 3- avec carte platinium \n");
        String carte = sc.nextLine();
        switch (carte) {
            case "2" :
                prix_ht = prix_ht - (0.2 * prix_ht );
                System.out.println("Voici le prix HT avec la remise de 20% :" + prix_ht + "\n");
                break;
            case "3" :
                prix_ht = prix_ht - (0.15 * prix_ht );
                System.out.println("Voici le prix HT avec la remise de 15% :" + prix_ht + "\n");
                break;
            case "1" :
                break;
        }
        System.out.println("Saisir si la voiture est électrique : Y/N \n");
        String rep = sc.nextLine();
        if (rep.equals("N")) {
            tva = 0.2;
        }
        if (rep.equals("N")){
            tva = 0.05;
        }
        double prix_ttc = prix_ht * (tva + 1) ;
        System.out.println("Voici le prix TTC :" + prix_ttc + "\n");
        System.out.println("Fin du programme \n");
    }
}