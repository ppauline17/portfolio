function sendMail(){
    let nom = document.getElementById("nom")
    let prenom = document.getElementById("prenom")
    let email = document.getElementById("email")
    let message = document.getElementById("message")
    let messageReponse = document.getElementById("messageReponse")

    // On vérifie si les champs sont bien remplis
    if (nom.value !== "" && prenom.value !== "" && email.value !== "" && message.value !== ""){
            // On enregistre les données sous forme d'objet
            let donnees = {}
            donnees["nom"] = nom.value
            donnees["prenom"] = prenom.value
            donnees["email"] = email.value
            donnees["message"] = message.value

            // On converti le tableau au format json
            let donneesJson = JSON.stringify(donnees)

             // On envoie les données en POST en Ajax
            // On instancie XMLHttpRequest
            let xhr = new XMLHttpRequest()
                    
            // On ouvre la requête
            xhr.open("POST", "mail.php")

            // On gère la réponse
            xhr.onreadystatechange = function(){
                // On vérifie si la requête est terminée
                if(this.readyState == 4 && this.status == 200){
                    // L'enregistrement a fonctionné
                    const reponse = JSON.parse(this.responseText)

                    // on affiche la réponse
                    let messageReponse = document.getElementById("messageReponse")
                    messageReponse.innerHTML = reponse.message;

                    
                    if(reponse.message == "Message envoyé !"){
                        // si le message a bien été envoyé on réinitialise les champs
                        nom.value = ""
                        prenom.value = ""
                        email.value = ""
                        message.value = ""
                    }else if(reponse.message == "Adresse e-mail invalide"){
                        // si l'adresse email est invalide on efface le champ email
                        email.value = ""
                    }
                    
                }
            }
            // On envoie la requête en incluant les données
            xhr.send(donneesJson)

    }else{
        // message d'erreur si tous les champs ne sont pas remplis
        messageReponse.innerHTML = "Veuillez remplir tous les champs"
    }
}
