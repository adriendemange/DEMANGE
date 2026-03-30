package fr.hecten.exemple;

public class Personne {

    private String nom;
    private int anneeNaissance;
    private double salaire;


    public Personne(String n, int a, double s) {
        setNom(n);
        setAnneeNaissance(a);
        setSalaire(s);
    }

    public void affiche() {
        System.out.println(nom + " ; " + anneeNaissance + " ; " + salaire);
    }

    public String getNom() {
        return this.nom;
    }

    public void setNom(String n) {
        if (n.isEmpty()){
            System.err.println("Le nom est vide");
        }
        else{
            this.nom = n;
        }
    }
    public void setSalaire(double s){
        if (s <= 0 || s > 100000){
            System.err.println("Le salaire n'est pas correct");
        }
        else{
            this.salaire = s;
        }
    }
    public void setAnneeNaissance(int a) {
        if (a <= 1910 || a > 2025){
            System.err.println("L'année de naissance n'est pas correcte");
        }
        else{
            this.anneeNaissance = a;
        }
    }
    public int getAge() {
        int age = 2025 - this.anneeNaissance;  // correction ici aussi
        return age;
    }
}

