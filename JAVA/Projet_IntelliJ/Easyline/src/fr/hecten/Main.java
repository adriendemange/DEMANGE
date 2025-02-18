package fr.hecten;

import fr.hecten.exemple.Personne;

import java.util.Scanner;


public class Main{
    public static void main (String[] args){
        Scanner sc = new Scanner(System.in);
        System.out.println("Veuillez saisir un Nom / Année de naissance / Salaire pour la personne 1 :");
        String nom = sc.nextLine();
        int anneeNaissance = sc.nextInt();
        sc.nextLine();
        double salaire = sc.nextDouble();
        Personne p1 = new Personne(nom, anneeNaissance, salaire);
        p1.affiche();
    }
}