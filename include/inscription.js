
let  email = document.getElementById("email");
let  pseudo = document.getElementById("pseudo");
let  mdp = document.getElementById("mdp");
let confirmmdp = document.getElementById("confirmmdp") // On récupère la confirmation du mot de passe
 
// la longeur du mdp
let longeurmdp = mdp.value.length;
 
// la longeur du pseudo
let longeurpseudo =pseudo.value.length;
 
function verif(){
 
   //Si le champ email, mdp, pseudo et confim mdp sont vide
   if (email.value == "" || mdp.value == "" || pseudo.value == "" || confirmmdp.value == "") {
       erreur = "Veuillez remplir tous les champs";
   }
   // Si le champ email n'est pas valide
   if (!email.value.includes("@") || !email.value.includes(".")) {
       erreur1 = "Veuillez entrer une adresse mail valide";
   }
   if (longeurpseudo < 4) {
       erreur2 = "Votre pseudo doit contenir au moins 4 caractères";
   }
   if (longeurmdp < 8) {
       erreur3 = "Votre mot de passe doit contenir au moins 8 caractères";
   }
   if (mdp.value != confirmmdp.value) {
       erreur4 = "Les mots de passe ne correspondent pas";
   }
   if (erreur) {
       document.getElementById("erreur").innerHTML = erreur1, erreur2, erreur3, erreur4;
   }
   if (erreur) {
       e.preventDefault(); // On empêche l'envoi du formulaire
       document.getElementById("erreur").innerHTML = erreur; // On affiche l'erreur
       return false; // On empêche l'envoi du formulaire
   } else {
       echo("Vous êtes bien inscrit"); 
   }
 
}
 

