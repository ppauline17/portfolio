<section class="contact mt-5 pt-5 section" id="contact">
    <div class="container">
        <div class="content">
            <h3>Contact</h3>
            <div class="row">
                <div class="col-lg-6 offset-lg-3 mb-3">
                    <div id="messageReponse"></div>
                </div>
                <div class="col-lg-6 offset-lg-3 mb-3">
                    <label for="nom" class="form-label">Nom<sup>*</sup> :</label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom">
                </div>
                <div class="col-lg-6 offset-lg-3 mb-3">
                    <label for="prenom" class="form-label">Prénom<sup>*</sup> :</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prénom">
                </div>
                <div class="col-lg-6 offset-lg-3 mb-3">
                    <label for="email" class="form-label">Email<sup>*</sup> :</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Votre email">
                </div>
                <div class="col-lg-6 offset-lg-3 mb-3">
                    <label for="message" class="form-label">Message<sup>*</sup> :</label>
                    <textarea class="form-control" id="message" name="message" placeholder="Votre message"></textarea>
                </div>
                <div class="col-lg-6 offset-lg-3 mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rgpd">
                        <label class="form-check-label" for="rgpd">
                            En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de la demande de contact.<sup>*</sup>
                        </label>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-3">
                    <span class="btn btn-send mb-3" onclick="sendMail()">Envoyer</span>
                    <div><sup>*</sup> champs obligatoires</div>
                </div>
            </div>
        </div>
    </div>
</section>