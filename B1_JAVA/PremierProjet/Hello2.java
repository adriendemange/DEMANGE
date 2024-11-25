/* Hello.java
Adrien DEMANGE
25/11/2024
*/
import java.util.Scanner;
public class Hello2 {
    // Fonction Principale pour exécuter une application 
    public static void main (String[] args){
        System.out.printf("Hello and welcome! \n");
        //System.out.println("Quel votre prénom ? \n");
        Scanner sc = new Scanner(System.in);
        String name ;
        boolean isValid;
        do {
            System.out.println("Veuillez entrer votre prénom :");
            name = sc.nextLine();
            
            // Validation avec une regex (uniquement des lettres et espaces)
            isValid = name.matches("[A-Za-zÀ-ÖØ-öø-ÿ\\s'-]+");
            
            if (!isValid) {
                System.out.println("Saisie incorrecte du prénom, veuillez le resaisir.");
            }
        } while (!isValid);
       // sc.nextLine(); // Retour à la ligne pour le Scanner 
        System.out.println("D'accord. Bonjour " + name + "! \n");
        System.out.println("Êtes-vous majeur ? (Vous pouvez rentrer votre âge, notre robot s'occupera du reste)");
        int age = sc.nextInt();
        while ( age <= 0 || age > 100) { // Si rep = O -> une condition est fausse donc le while ne s'execute pas 
            System.out.println("Veuillez saisir un âge correct.\nSi la saisie est incorrecte, il est impossible de poursuivre le programme. (CTRL+C pour quitter) \n");
            age = sc.nextInt();
            sc.nextLine();
        }
        if (age >= 18 ) {
            if (age == 100) {
                System.out.println("" + name + " est centenaire. Il a " + age + " ans !!!\n");
            }
            else {
            System.out.println("" + name + " est majeur. Il a " + age + " ans \n");
            }
        }
        else {
            System.out.println(" " + name + " n'est pas majeur" + "\n");
        }
        System.out.println("Juste pour être sûr... Êtes-vous vraiment majeur ? O/N ");
        //   Comparer 2 chaînes de caractères -> var.equals(var2)
        String rep = sc.next();
        //sc.nextLine();
        sc.nextLine();
        while ( (!(rep.equals("O"))) && (!(rep.equals("N"))) ) { // Si rep = O -> une condition est fausse donc le while ne s'execute pas 
            System.out.println("Veuillez saisir O pour Oui ou N pour non. Si la saisie est incorrecte, il est impossible de poursuivre le programme. (CTRL+C pour quitter) \n");
            rep = sc.next();
            sc.nextLine();
        }
        if ((rep.equals("O"))) {
            if (age < 18 ) {
                System.out.println("" + name + " est un menteur !! Il n'est pas majeur :( \n");
            }
            else {
            System.out.println("" + name + " est en effet majeur. \n");
            }
        }
        else if (rep.equals("N")) {
            if (age > 18 ) {
                System.out.println("" + name + " a oublié qu'il était majeur ! La viellesse sûrement... \n");
            }
            else {
            System.out.println("" + name + " n'est pas majeur ni un menteur !\n");
            }
        }
        
        System.out.println("Le programme s'est déroulé avec succès.\n");        
    }
}