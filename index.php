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
                            foreach($projects as $project){
                        ?>
                            <div class="col-md-6 col-xxl-4 mb-5">
                                <div class="card mb-3 bg-light">
                                    <picture class="w-100 p-3" style="height: 30vh;">
                                        <!-- Source WebP pour les navigateurs compatibles -->
                                        <source srcset="<?=$project['picture']?>.webp" type="image/webp" class="card-img-top h-100 object-fit-contain">
                                        <!-- Source JPG pour les navigateurs non compatibles -->
                                        <img src="<?=$project['picture']?>.jpg" alt="capture d'écran du site <?=$project['title']?>" class="card-img-top h-100 object-fit-contain">
                                    </picture>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $project['title']; if($project['isInProgress']){?> <span class="badge rounded-pill text-bg-primary">En cours</span><?php } ?></h5>
                                        <p class="card-text"><small class="text-body-secondary">Dernière mise à jour <?=$project['updateDate']?></small></p>
                                        <hr>
                                        <div class="row">
                                        <?php
                                        if($project['website']){
                                        ?>
                                            <div class="col-8 offset-2 mb-3 col-xl-4 offset-xl-0">
                                                <a href="<?=$project['website']?>" target="_blank" class="w-100">
                                                    <button class="btn btn-light shadow w-100">Visiter</button>
                                                </a>
                                            </div>
                                        <?php
                                        }
                                        if($project['github']){
                                        ?>
                                            <div class="col-8 offset-2 mb-3 col-xl-4 offset-xl-0">
                                                <a href="<?=$project['github']?>" target="_blank" class=" w-100">
                                                    <button class="btn btn-light shadow w-100">Github</button>
                                                </a>
                                            </div>
                                        <?php
                                            }
                                        ?>
                                            <div class="col-8 offset-2 mb-3 col-xl-4 offset-xl-0">
                                                <button class="btn btn-light shadow w-100" type="button" data-bs-toggle="collapse" data-bs-target="#collapseId<?=$project['id']?>" aria-expanded="false" aria-controls="collapseExample">
                                                    Infos
                                                </button>
                                            </div>
                                        </div>
                                        <div class="collapse multi-collapse" id="collapseId<?=$project['id']?>">
                                            <div class="card-text">
                                                <?=$project['description']?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <!-- <script src="assets/js/flipCard.js"></script> -->
    <script src="assets/js/activeLink.js"></script>

</body>

</html>