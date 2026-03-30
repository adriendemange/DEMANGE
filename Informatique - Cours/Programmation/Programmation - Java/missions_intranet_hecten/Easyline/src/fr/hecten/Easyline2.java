package fr.hecten;

//TODO Faire mission 3

import fr.hecten.easyline2.Compagnie;

import java.util.Scanner;

public class Easyline2{
    public static void main(String[] args){

        Compagnie maCompagnie1= new Compagnie("zozo", "Bleu", "Vert", 25);
        //maCompagnie1.code=10;
        maCompagnie1.afficher();

        System.out.println("-------------------------");
        Compagnie maCompagnie2= new Compagnie("zozo", "Bleu", "Cyan", 60);
        //maCompagnie2.code=20;
        maCompagnie2.afficher();

        System.out.println("-------------------------");
        Compagnie maCompagnie3= new Compagnie("easyJune", "Rouge", "Gold", 25);
        //maCompagnie3.code=20;
        maCompagnie3.afficher();

        System.out.println("-------------------------");
        Compagnie maCompagnie4= new Compagnie("Gon", "Platine", "Bronze", 20);
        //maCompagnie4.code=20;
        maCompagnie4.afficher();

        System.out.println("-------------------------");
        Compagnie maCompagnie5= new Compagnie("toto", "Noir", "Blanc", 21);
        //maCompagnie5.code=20;
        maCompagnie5.afficher();

        System.out.println("-------------------------");
        Compagnie maCompagnie7= new Compagnie("toto_2", "Noir", "Blanc", 22);
        //maCompagnie5.code=20;
        maCompagnie7.afficher();
       /* int MDP = maCompagnie7.getCode();
        if (MDP ==  maCompagnie7.code) {
            System.out.println("Voici le MDP de la compagnie " + maCompagnie7.nom + " : " + MDP);
        }
        */

        String CouleurPrinc7 = maCompagnie7.getCouleurSecondaireLogo();
        String CouleurSec7 = maCompagnie7.getCouleurPrincipaleLogo();
        System.out.println(CouleurPrinc7 + " " + CouleurSec7);
        maCompagnie7.setCode();
        int MDP = maCompagnie7.getCode();
        if (MDP ==  maCompagnie7.code) {
            System.out.println("Voici le MDP de la compagnie " + maCompagnie7.nom + " : " + MDP);
        }
<<<<<<< HEAD:JAVA/Projet_IntelliJ/Easyline/src/fr/hecten/Easyline2.java
=======
        maCompagnie7.ca = 85000;
        maCompagnie7.setCa();
        System.out.println("Voici le CA de la compagnie " + maCompagnie7.nom + " : " + maCompagnie7.ca);

>>>>>>> 6be11356f4e5856aae64ee1e98adf5ba5fbdf383:JAVA/missions_intranet_hecten/Easyline/src/fr/hecten/Easyline2.java
    }
}


