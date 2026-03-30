package fr.hecten.easyline3;


public class Adresse {
    private String rue;
    private String ville;
    private String pays;


    public Adresse(String rue, String ville, String pays) {
        this.rue = rue;
        this.ville = ville;
        this.pays = pays;
    }


    public String getRue() { return rue; }
    public void setRue(String rue) { this.rue = rue; }

    public String getVille() { return ville; }
    public void setVille(String ville) { this.ville = ville; }

    public String getPays() { return pays; }
    public void setPays(String pays) { this.pays = pays; }


    public String toString() {
        return rue + ", " + ville + ", " + pays;
    }


}

// Classe Voyageur_2
public class Voyageur_2 {
    private String nom;
    private int anneeNaissance;
    private String categorie;
    private Adresse adressePostale;

    // Constructeur principal
    public Voyageur_2(String nom, int anneeNaissance, Adresse adressePostale) {
        setNom(nom);
        setAnneeNaissance(anneeNaissance);
        setCategorie(anneeNaissance);
        this.adressePostale = adressePostale;
    }

    // Constructeur par défaut
    public Voyageur_2() {
        this.nom = "Défaut";
        this.anneeNaissance = 2000;
        this.adressePostale = new Adresse("Inconnue", "Inconnue", "Inconnu");
    }


    public void setNom(String nom) {
        if (nom != null && nom.length() >= 2) {
            this.nom = nom;
        } else {
            System.err.println("Erreur : Le nom doit contenir au moins 2 caractères.");
            this.nom = "Inconnu";
        }
    }

    public String getNom() {
        return this.nom;
    }

    public void setAnneeNaissance(int annee) {
        if (annee < 1910 || annee > 2025) {
            System.err.println("L'année de naissance n'est pas correcte.");
            this.anneeNaissance = 2000; // Valeur par défaut
        } else {
            this.anneeNaissance = annee;
        }
    }

    public int getAnneeNaissance() {
        return this.anneeNaissance;
    }

    public int getAge() {
        int age = 2025 - this.anneeNaissance;
        if (age <= 0) {
            System.err.println("L'âge est négatif ou égal à 0.");
            return -1; // Valeur incorrecte
        }
        return age;
    }

    public void setCategorie(int anneeNaissance) {
        int age = 2025 - anneeNaissance;
        if (age < 1) {
            System.out.println("Catégorie Nourrisson !");
            this.categorie = "Nourrisson";
        } else if (age < 18) {
            System.out.println("Catégorie Enfant !");
            this.categorie = "Enfant";
        } else if (age <= 60) {
            System.out.println("Catégorie Adulte !");
            this.categorie = "Adulte";
        } else if (age < 110) {
            System.out.println("Catégorie Senior !");
            this.categorie = "Senior";
        } else {
            System.err.println("Catégorie non valide !");
            this.categorie = "NON VALIDE";
        }
    }

    public String getCategorie() {
        return this.categorie;
    }

    public void setAdressePostale(Adresse adressePostale) {
        this.adressePostale = adressePostale;
    }

    public Adresse getAdressePostale() {
        return this.adressePostale;
    }

    // Affichage des informations
    public void affiche() {
        System.out.println("Info Voyageur : Nom = " + nom + ", Année de Naissance = " + anneeNaissance + ", Age = " + getAge() + ", Catégorie = " + categorie);
        System.out.println("Adresse Postale : " + adressePostale);
    }
}
