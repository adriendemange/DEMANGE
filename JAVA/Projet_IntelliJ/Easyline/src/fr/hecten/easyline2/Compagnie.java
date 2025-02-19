package fr.hecten.easyline2;

public class Compagnie {

    public String nom;
    public int code;
    public double ca;
    public String couleurPrincipaleLogo;


    public Compagnie() {

    }

    public Compagnie(String nomCompagnie) {
        this.nom = nomCompagnie;
    }

    public void afficher() {
        System.out.println(this.nom);
    }
}