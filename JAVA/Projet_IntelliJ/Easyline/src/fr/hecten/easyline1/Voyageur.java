package fr.hecten.easyline1;

public class Voyageur {

    private String nom;
    private int anneeNaissance;
    private String categorie;

    public Voyageur(String n, int a) {
        setNom(n);
        setAnneeNaissance(a);
        setCategorie(a);
    }
    public Voyageur() {
        this.nom = "Defaut";
        this.anneeNaissance = 0;
    }
    public void setCategorie(int a) {
        int age = 2025 - a;
        if (age < 1 ){
            System.out.println("Catégorie nourisson !");
            this.categorie = "Nourisson";
        }
        else if (age > 1 && age < 18){
            System.out.println("Catégorie Enfant !");
            this.categorie = "Enfant";
        }
        else if (age >= 18 && age <= 60){
            System.out.println("Catégorie Adulte !");
            this.categorie = "Adulte";
        }
        else if (age > 60 && age < 110){
            System.out.println("Catégorie Senior !");
            this.categorie = "Senior";
        }
        else {
            System.err.println("Catégorie non valide !!!");
            this.categorie = "NON VALIDE";

        }
    }
    public void setNom(String n) {
        if (n != null && n.length() >= 2) {
            this.nom = n;
        } else {
            System.err.println("Erreur : Le nom doit contenir au moins 2 caractères.");
            this.nom = "Inconnu"; // Valeur par défaut
        }
    }
    /*public String getCategorie() {
        switch (this.anneeNaissance) {
            case < 1 : return "Nourisson";

        }
    }
     */
    public void setAnneeNaissance(int a) {
        if (a <= 1910 || a > 2025) {
            System.err.println("L'année de naissance n'est pas correcte");
        } else {
            this.anneeNaissance = a;
        }
    }
    public int getAge() {
        int age = 2025 - this.anneeNaissance;  // correction ici aussi
        if (age <= 0 ){
            System.err.println("L'âge est négatif ou égal à 0");
        }
        return age;
    }
    public String getNom() {
        return this.nom;
    }
    public void affiche() {

        System.out.println("Info. Voyageur Nom/AnneNaissance/Age/Categorie: " + nom + " ; " + anneeNaissance + "; " + categorie);

    }
}
