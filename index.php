<?php require_once('_head.php');?>

<body>
    <?php require_once('_header.php');?>
    <main>
        <section class="about mt-5 pt-5 section" id="about">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-sm-6 mb-5">
                            <picture class="w-100">
                                <source srcset="assets/img/profil-2.webp" type="image/webp">
                                <img src="assets/img/profil-2.jpg" alt="Photo de profil de Pauline PASQUIER" class="profil-img">
                            </picture>
                        </div>
                        <div class="col-sm-6">
                            <p>
                                Après 13 ans en tant qu'opticienne diplômée, j'ai décidé de me reconvertir dans le web.
                                J'ai donc suivi une formation à L'ISFAC de Poitiers où j'ai obtenu un Titre Professionnel de
                                Développeur Web/Web mobile.
                            </p>
                            <p>
                                J'ai pu découvrir au cours de cette année les différents langages de programmation web,
                                notamment PHP et Javascript que j'affectionne particulièrement.
                            </p>
                            <p>
                                Je suis très motivée et j'apprends vite.
                            </p>
                            <p>
                                Je cherche l'entreprise qui me fera confiance et saura m'aider à progresser pour faire
                                de ma nouvelle passion mon métier.
                            </p>
                            <p>Vous pouvez consulter mon CV juste ici :</p>
                            <a href="assets/img/CV_web.pdf" download class="btn btn-light">Mon CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-5 pt-5 section knowledge mt-5" id="knowledges">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="mb-5">Mes connaissances</h3>
                            <div class="row">
                                <?php 
                                    require_once('data/skills.php');
                                    foreach($skills as $skill){
                                ?>
                                <div class="col-3 langages mb-5">
                                <?php
                                    if($skill['href']){
                                ?>
                                <a href="<?=$skill['href']?>">
                                <?php
                                    }
                                ?>
                                    <?=$skill['icon']?>
                                <?php
                                    if($skill['href']){
                                ?>
                                </a>
                                <?php
                                    }
                                ?>
                                    <p><?=$skill['name']?></p>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="achievements mt-5 pt-5 section" id="achievements">
            <div class="container">
                <div class="content">
                    <h3>Mes réalisations</h3>
                    <p class="mb-5">Tous ces projets sont fictifs et réalisés à des fins pédagogiques.</p>
                    <div class="container">
                        <div class="row mb-5">
                        <?php
                            require_once('data/projects.php');
                            $number = 1;
                            foreach($projects as $project){
                        ?>
                            <div class="col-md-6 col-lg-4 mb-5">
                                <h5 class="text-center"><?=$project['title']?></h5>
                                <div class="flip-card-container">
                                    <div class="flip-card" id="flip-card-<?=$number?>">
                                        <div class="side side--front">
                                        <picture class="w-100">
                                            <!-- Source WebP pour les navigateurs compatibles -->
                                            <source srcset="<?=$project['picture']?>.webp" type="image/webp" class="img-fluid">
                                            <!-- Source JPG pour les navigateurs non compatibles -->
                                            <img src="<?=$project['picture']?>.jpg" alt="capture d'écran du site <?=$project['title']?>" class="img-fluid">
                                        </picture>
                                    <?php
                                        if($project['isInProgress']){
                                    ?>
                                        <div class="text-dark text-center mt-2">PROJET EN COURS</div>
                                    <?php
                                        }
                                    ?>
                                        <button class="btn btn-light <?php if($project['isInProgress']){echo'mt-3';}else{echo'mt-5';}?>">En savoir plus</button>
                                        </div>
                                        <div class="side side--back">
                                            <?=$project['description']?>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            if($project['website']){
                        ?>
                                <a href="<?=$project['website']?>" target="_blank">
                                    <button class="btn btn-light mt-3 me-3">Visiter le site</button>
                                </a>
                        <?php
                            }
                            if($project['github']){
                        ?>
                                <a href="<?=$project['github']?>" target="_blank">
                                    <button class="btn btn-light mt-3">Projet sur Github</button>
                                </a>
                        <?php
                            }
                        ?>
                            </div>
                        <?php
                            $number ++;
                            }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="contact mt-5 pt-5 section" id="contact">
            <div class="container">
                <div class="content">
                    <h3>Contact</h3>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 mb-3">
                            <div id="messageReponse"></div>
                        </div>
                        <div class="col-lg-6 offset-lg-3 mb-3">
                            <label for="nom" class="form-label">Nom* :</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom">
                        </div>
                        <div class="col-lg-6 offset-lg-3 mb-3">
                            <label for="prenom" class="form-label">Prénom* :</label>
                            <input type="text" class="form-control" id="prenom" name="prenom"
                                placeholder="Votre prénom">
                        </div>
                        <div class="col-lg-6 offset-lg-3 mb-3">
                            <label for="email" class="form-label">Email* :</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Votre email">
                        </div>
                        <div class="col-lg-6 offset-lg-3 mb-3">
                            <label for="message" class="form-label">Message* :</label>
                            <textarea class="form-control" id="message" name="message"
                                placeholder="Votre message"></textarea>
                        </div>
                        <div class="col-lg-6 offset-lg-3">
                            <span class="btn btn-light mb-3" onclick="sendMail()">Envoyer</span>
                            <div>* champs obligatoires</div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
    <footer>

    </footer>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sendMail.js"></script>
    <script src="assets/js/flipCard.js"></script>
    <script src="assets/js/activeLink.js"></script>

</body>

</html>