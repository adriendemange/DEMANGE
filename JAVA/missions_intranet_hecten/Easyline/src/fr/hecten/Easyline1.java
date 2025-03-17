package fr.hecten;


import fr.hecten.easyline1.Voyageur;

import java.util.Scanner;

public class Easyline1{
    public static void main (String[] args){
        Scanner sc = new Scanner(System.in);
        Voyageur v1 = new Voyageur ("Adrien",2004);
        System.out.println("Age de V1 : " + v1.getAge() );
        v1.affiche();
        Voyageur v2 = new Voyageur ();
        System.out.println("Voyageur v2 par défaut : ");
        v2.affiche();
        System.out.println("Initialisation de V3. Veuillez saisir un nom puis la date de naissance : ");
        String nom = sc.nextLine();
        int anneeNaissance = sc.nextInt();
        sc.nextLine();
        Voyageur v3 = new Voyageur (nom, anneeNaissance);
        v3.affiche();
        System.out.println("Age de v3 : " + v3.getAge() );
    }
}


