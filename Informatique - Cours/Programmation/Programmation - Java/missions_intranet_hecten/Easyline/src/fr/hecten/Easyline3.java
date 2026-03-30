package fr.hecten;

import fr.hecten.easyline3.Voyageur_2;
import fr.hecten.easyline3.Adresse;

public class Easyline3 {
    public static void main(String[] args) {
        Adresse adresse = new Adresse("2 Hameau du parc", "Mériel", "France");
        Voyageur_2 v1 = new Voyageur_2("Adrien", 2004, adresse);

        System.out.println("Age de V1 : " + v1.getAge());
        v1.affiche();
    }
}
