package fr.hecten.easyline2;
import java.util.Scanner;
public class Compagnie {

    public String nom;
    public int code;
    public double ca;
    public String couleurPrincipaleLogo;
    public String couleurSecondaireLogo;
//TODO faire mission 4
    public Compagnie() {

    }

    public Compagnie(String nomCompagnie) {
        this.nom = nomCompagnie;
    }
    public Compagnie(String nomCompagnie, String couleurPrincipaleLogo, String couleurSecondaireLogo, int code) {
        this.nom = nomCompagnie;
        this.couleurSecondaireLogo = couleurSecondaireLogo;
        this.couleurPrincipaleLogo = couleurPrincipaleLogo;
        this.code = code;
    }
    public void setNom(String nom) {
        this.nom = nom;
    }
    public void setCode() {
        System.out.println("Veuillez saisir le MDP pour pouvoir modifier le code de la compagnie : ");
        Scanner sc = new Scanner(System.in);
        String mdp = sc.nextLine();
        if (mdp.equals("patoune")){
            System.out.println("Saisir le Nouveau code : ");
            this.code = sc.nextInt();
        }
        else {
            System.out.println("Mauvais MDP !! Impossible de modifier le code !!");
        }
    }
    public void setCa () {
        System.out.println("Veuillez saisir le MDP de la compagnie pour pouvoir falsifier le CA : ");
        Scanner sc = new Scanner(System.in);
        String mdp = sc.nextLine();
        if (mdp.equals("patoune")){
            System.out.println("CA falsifié de 30 % !");
            this.ca = 0.3 * this.ca + this.ca;
        }
        else {
            System.out.println("Mauvais MDP !! Impossible de modifier le CA ");
        }
    }
    public void setCouleurPrincipaleLogo(String couleurPrincipaleLogo) {
        this.couleurPrincipaleLogo = couleurPrincipaleLogo;
    }
    public void setCouleurSecondaireLogo(String couleurSecondaireLogo) {
        this.couleurSecondaireLogo = couleurSecondaireLogo;
    }
    public int getCode () {
        System.out.println("Veuillez saisier le MDP pour avoir le code de la compagnie : ");
        Scanner sc = new Scanner(System.in);
        String mdp = sc.nextLine();
        if (mdp.equals("patoune")){
            return this.code;
        }
        else {
            System.out.println("Mauvais MDP !! Veuillez réessayer");
            return 0;
        }
    }
    public String  getCouleurSecondaireLogo() {
        return couleurSecondaireLogo + " second";
    }
    public String getCouleurPrincipaleLogo() {
        return this.couleurPrincipaleLogo;
    }
    public double getCa() {return ca; }
    public void afficher() {
        System.out.println(this.nom);
        System.out.println(this.couleurPrincipaleLogo);
        System.out.println(this.couleurSecondaireLogo);
        System.out.println(this.code);
    }
}