<?php
    require_once('env.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // on est en post
        // on récupère les données saisies en JSON
        $donneesJson = file_get_contents('php://input');
        // on décode les données et on les sécurise
        $donnees = json_decode($donneesJson);
        $nom = htmlspecialchars($donnees->nom);
        $prenom = htmlspecialchars($donnees->prenom);
        $subject = "Contact portfolio";
        $message = htmlspecialchars($donnees->message);

        $email = $donnees->email;

        // on vérifie que l'adresse mail fournie par l'utilisateur est valide
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // préparation du mail
            // destinataire
            $to = $to_email;
        
            // On configure les headers
            $headers = array(
                    'MIME-Version' => '1.0',
                    'Content-type' => 'text/html;charset=UTF-8',
                    'From' => $from_email,
                    'Reply-To' => $email
            );
            
            // On inclus le template de mail
            ob_start();
            include("mail-template.php");
            $content = ob_get_contents();
            ob_end_clean();
            
            // on envoie le mail
            $sent = mail($to, $subject, $content, $headers);
            
            // si le mail est bien envoyé
            if($sent){
                $reponse = [
                    'message' => "Message envoyé !"
                ];
            }else{
                $reponse = [
                    'message' => "Erreur"
                ];
            }

        // si l'adresse mail n'est pas au bon format
        } else {
            $reponse = [
                'message' => "Adresse e-mail invalide"
            ];
        }

        // on renvoie la réponse en format JSON
        echo json_encode($reponse);
}   