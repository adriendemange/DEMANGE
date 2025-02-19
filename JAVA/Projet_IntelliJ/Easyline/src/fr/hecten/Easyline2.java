package fr.hecten;


import fr.hecten.easyline2.Compagnie;

import java.util.Scanner;

public class Easyline2{
    public static void main(String[] args){
        Compagnie maCompagnie1= new Compagnie();
        maCompagnie1.nom="zaza";
        maCompagnie1.code=10;
        maCompagnie1.couleurPrincipaleLogo = "Bleue";
        System.out.println("Compagne 1 - Code - Couleur : " + maCompagnie1.code + " " + maCompagnie1.couleurPrincipaleLogo);
        maCompagnie1.afficher();
        Compagnie maCompagnie2= new Compagnie("zozo");
        maCompagnie2.code=20;
        System.out.println("Compagne 1 - Code : " + maCompagnie2.code);
        Compagnie maCompagnie3= new Compagnie("easyJune");
        maCompagnie3.afficher();

        Compagnie maCompagnie4= new Compagnie();
        maCompagnie4.afficher();
        Compagnie maCompagnie5= new Compagnie();
        maCompagnie5.afficher();

    }
}


