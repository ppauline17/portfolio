<?php require_once('_head.php'); ?>

<body>
    <?php require_once('_header.php'); ?>
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
                            <p>Je réalise des sites web en php/symfony, javascript/react et wordpress.</p>
                            <p>
                                Je suis très motivée et j'apprends vite.
                            </p>
                            <p>
                                Je cherche l'entreprise qui me fera confiance et saura m'aider à progresser pour faire
                                de ma nouvelle passion mon métier.
                            </p>
                            <a href="assets/img/CV_web.pdf" download class="btn btn-light me-3 rounded-pill">Mon CV</a>
                            <a href="https://www.linkedin.com/in/pauline-pasquier-119956131/"
                                target="_blank" title="LinkedIn"  class="btn btn-light me-3 rounded-pill">
                                <?php include('assets/img/icons/linkedin.svg'); ?>
                                <span>LinkedIn</span>
                            </a>
                            <a href="https://github.com/ppauline17" target="_blank" title="Github" class="btn btn-light me-3 rounded-pill">
                                <?php include('assets/img/icons/github.svg'); ?>
                                <span>Github</span>
                            </a>
                            <button class="btn btn-light me-3 rounded-pill disabled">
                                <?php include('assets/img/icons/contact.svg'); ?>
                                <span>p.pauline017@gmail.com</span>
                            </button>
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
                                foreach ($skills as $skill) {
                                ?>
                                    <div class="col-3 langages mb-5">
                                        <?php
                                        if (isset($skill['href'])) {
                                        ?>
                                            <a href="<?= $skill['href'] ?>" title="Lien <?= $skill['name'] ?>">
                                            <?php
                                        }
                                        include('assets/img/icons/'.$skill['icon']);

                                        if (isset($skill['href'])) {
                                            ?>
                                            </a>
                                        <?php
                                        }
                                        ?>
                                        <p><?= $skill['name'] ?></p>
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
                    <h3 class="mb-5">Mes réalisations</h3>
                    <div class="container">
                        <div class="row">
                            <?php
                            require_once('data/projects.php');
                            foreach ($projects as $project) {
                            ?>
                                <div class="col-12 project p-4 rounded">
                                    <div class="row g-0">
                                        <div class="col-lg-6 p-4">
                                            <img
                                                srcset="
                                                <?= $project['picture'] ?>-500.jpg 500,
                                                <?= $project['picture'] ?>-900.jpg 900,
                                                "
                                                sizes="
                                                (max-width: 1200px) 500px,
                                                900px
                                                "
                                                src="<?= $project['picture'] ?>.jpg" 
                                                alt="capture d'écran du projet <?= $project['title'] ?>" 
                                                class="card-img-top object-fit-contain rounded shadow"
                                            >
                                        </div>
                                        <div class="col-lg-6 p-4">
                                            <div class="card-body rounded p-4">
                                                <h5 class="card-title fs-2 fw-bold">
                                                    <?php echo mb_strtoupper($project['title']);
                                                    if ($project['isInProgress']) { ?> 
                                                    <sup class="fs-6 badge rounded-pill bg-blue">En cours</sup><?php 
                                                    } ?>
                                                </h5>
                                                <div class="p-4">
                                                    <?php if (isset($project['html'])) {
                                                    ?>
                                                        <span title="html">
                                                            <?php include('assets/img/icons/html.svg'); ?>
                                                        </span>
                                                    <?php
                                                    }
                                                    if (isset($project['css'])) {
                                                    ?>
                                                        <span title="css">
                                                            <?php include('assets/img/icons/css.svg'); ?>
                                                        </span>
                                                    <?php
                                                    }
                                                    if (isset($project['bootstrap'])) {
                                                    ?>
                                                        <span title="bootstrap">
                                                            <?php include('assets/img/icons/bootstrap.svg'); ?>
                                                        </span>
                                                    <?php
                                                    }
                                                    if (isset($project['php'])) {
                                                    ?>
                                                        <span title="php">
                                                            <?php include('assets/img/icons/php.svg'); ?>
                                                        </span>
                                                    <?php
                                                    }
                                                    if (isset($project['symfony'])) {
                                                    ?>
                                                        <span title="symfony">
                                                            <?php include('assets/img/icons/symfony.svg'); ?>
                                                        </span>
                                                    <?php
                                                    }
                                                    if (isset($project['javascript'])) {
                                                    ?>
                                                        <span title="javascript">
                                                            <?php include('assets/img/icons/javascript.svg'); ?>
                                                        </span>
                                                    <?php
                                                    }
                                                    if (isset($project['react'])) {
                                                    ?>
                                                        <span title="react.js">
                                                            <?php include('assets/img/icons/react.svg'); ?>
                                                        </span>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                                <?= $project['description'] ?>
                                                <p class="card-text"><small class="text-body-secondary">Dernière mise à jour <?= $project['updateDate'] ?></small></p>
                                                <hr>
                                                <div class="row">
                                                    <?php
                                                    if ($project['website']) {
                                                    ?>
                                                        <div class="col-8 offset-2 mb-3 col-xl-4 offset-xl-0">
                                                            <a href="<?= $project['website'] ?>" target="_blank" class="w-100">
                                                                <button class="btn btn-light shadow w-100">Visiter</button>
                                                            </a>
                                                        </div>
                                                    <?php
                                                    }
                                                    if ($project['github']) {
                                                    ?>
                                                        <div class="col-8 offset-2 mb-3 col-xl-4 offset-xl-0">
                                                            <a href="<?= $project['github'] ?>" target="_blank" class=" w-100">
                                                                <button class="btn btn-light shadow w-100">Github</button>
                                                            </a>
                                                        </div>
                                                    <?php
                                                    }
                                                    ?>
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
                            <span class="btn btn-light mb-3" onclick="sendMail()">Envoyer</span>
                            <div><sup>*</sup> champs obligatoires</div>
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
    <script src="assets/js/activeLink.js"></script>

</body>

</html>