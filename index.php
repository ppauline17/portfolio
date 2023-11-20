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
                                    if(isset($skill['href'])){
                                ?>
                                <a href="<?=$skill['href']?>">
                                <?php
                                    }
                                        echo $skill['icon'];
                                        
                                    if(isset($skill['href'])){
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
                    <h3 class="mb-5">Mes réalisations</h3>
                    <div class="container">
                        <div class="row mb-5">
                        <?php
                            require_once('data/projects.php');
                            foreach($projects as $project){
                        ?>
                            <div class="col-md-6 col-xxl-4 mb-5">
                                <div class="card mb-3 bg-light">
                                    <picture class="w-100" style="height: 30vh;">
                                        <!-- Source WebP pour les navigateurs compatibles -->
                                        <source srcset="<?=$project['picture']?>.webp" type="image/webp" class="card-img-top h-100 object-fit-cover">
                                        <!-- Source JPG pour les navigateurs non compatibles -->
                                        <img src="<?=$project['picture']?>.jpg" alt="capture d'écran du site <?=$project['title']?>" class="card-img-top h-100 object-fit-cover">
                                    </picture>
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $project['title']; if($project['isInProgress']){?> <span class="badge rounded-pill bg-blue">En cours</span><?php } ?></h5>
                                        <div>
                                            <?php if(isset($project['html'])){
                                            ?>
                                            <span title="html">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="skill-icon">
                                                    <path d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z"/>
                                                </svg>
                                            </span>
                                            <?php
                                            }
                                            if(isset($project['css'])){
                                            ?>
                                            <span title="css">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="skill-icon">
                                                    <path d="M0 32l34.9 395.8L192 480l157.1-52.2L384 32H0zm313.1 80l-4.8 47.3L193 208.6l-.3.1h111.5l-12.8 146.6-98.2 28.7-98.8-29.2-6.4-73.9h48.9l3.2 38.3 52.6 13.3 54.7-15.4 3.7-61.6-166.3-.5v-.1l-.2.1-3.6-46.3L193.1 162l6.5-2.7H76.7L70.9 112h242.2z"/>
                                                </svg>
                                            </span>
                                            <?php
                                            }
                                            if(isset($project['bootstrap'])){
                                            ?>
                                            <span title="bootstrap">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="skill-icon">
                                                    <path d="M333.5,201.4c0-22.1-15.6-34.3-43-34.3h-50.4v71.2h42.5C315.4,238.2,333.5,225,333.5,201.4z M517,188.6 c-9.5-30.9-10.9-68.8-9.8-98.1c1.1-30.5-22.7-58.5-54.7-58.5H123.7c-32.1,0-55.8,28.1-54.7,58.5c1,29.3-0.3,67.2-9.8,98.1 c-9.6,31-25.7,50.6-52.2,53.1v28.5c26.4,2.5,42.6,22.1,52.2,53.1c9.5,30.9,10.9,68.8,9.8,98.1c-1.1,30.5,22.7,58.5,54.7,58.5h328.7 c32.1,0,55.8-28.1,54.7-58.5c-1-29.3,0.3-67.2,9.8-98.1c9.6-31,25.7-50.6,52.1-53.1v-28.5C542.7,239.2,526.5,219.6,517,188.6z M300.2,375.1h-97.9V136.8h97.4c43.3,0,71.7,23.4,71.7,59.4c0,25.3-19.1,47.9-43.5,51.8v1.3c33.2,3.6,55.5,26.6,55.5,58.3 C383.4,349.7,352.1,375.1,300.2,375.1z M290.2,266.4h-50.1v78.4h52.3c34.2,0,52.3-13.7,52.3-39.5 C344.7,279.6,326.1,266.4,290.2,266.4z"/>
                                                </svg>
                                            </span>
                                            <?php
                                            }
                                            if(isset($project['php'])){
                                            ?>
                                            <span title="php">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="skill-icon">
                                                    <path d="M320 104.5c171.4 0 303.2 72.2 303.2 151.5S491.3 407.5 320 407.5c-171.4 0-303.2-72.2-303.2-151.5S148.7 104.5 320 104.5m0-16.8C143.3 87.7 0 163 0 256s143.3 168.3 320 168.3S640 349 640 256 496.7 87.7 320 87.7zM218.2 242.5c-7.9 40.5-35.8 36.3-70.1 36.3l13.7-70.6c38 0 63.8-4.1 56.4 34.3zM97.4 350.3h36.7l8.7-44.8c41.1 0 66.6 3 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7h-70.7L97.4 350.3zm185.7-213.6h36.5l-8.7 44.8c31.5 0 60.7-2.3 74.8 10.7 14.8 13.6 7.7 31-8.3 113.1h-37c15.4-79.4 18.3-86 12.7-92-5.4-5.8-17.7-4.6-47.4-4.6l-18.8 96.6h-36.5l32.7-168.6zM505 242.5c-8 41.1-36.7 36.3-70.1 36.3l13.7-70.6c38.2 0 63.8-4.1 56.4 34.3zM384.2 350.3H421l8.7-44.8c43.2 0 67.1 2.5 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7H417l-32.8 168.7z"/>
                                                </svg>
                                            </span>
                                            <?php
                                            }
                                            if(isset($project['symfony'])){
                                            ?>
                                            <span title="symfony">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="skill-icon">
                                                    <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm133.74 143.54c-11.47.41-19.4-6.45-19.77-16.87-.27-9.18 6.68-13.44 6.53-18.85-.23-6.55-10.16-6.82-12.87-6.67-39.78 1.29-48.59 57-58.89 113.85 21.43 3.15 36.65-.72 45.14-6.22 12-7.75-3.34-15.72-1.42-24.56 4-18.16 32.55-19 32 5.3-.36 17.86-25.92 41.81-77.6 35.7-10.76 59.52-18.35 115-58.2 161.72-29 34.46-58.4 39.82-71.58 40.26-24.65.85-41-12.31-41.58-29.84-.56-17 14.45-26.26 24.31-26.59 21.89-.75 30.12 25.67 14.88 34-12.09 9.71.11 12.61 2.05 12.55 10.42-.36 17.34-5.51 22.18-9 24-20 33.24-54.86 45.35-118.35 8.19-49.66 17-78 18.23-82-16.93-12.75-27.08-28.55-49.85-34.72-15.61-4.23-25.12-.63-31.81 7.83-7.92 10-5.29 23 2.37 30.7l12.63 14c15.51 17.93 24 31.87 20.8 50.62-5.06 29.93-40.72 52.9-82.88 39.94-36-11.11-42.7-36.56-38.38-50.62 7.51-24.15 42.36-11.72 34.62 13.6-2.79 8.6-4.92 8.68-6.28 13.07-4.56 14.77 41.85 28.4 51-1.39 4.47-14.52-5.3-21.71-22.25-39.85-28.47-31.75-16-65.49 2.95-79.67C204.23 140.13 251.94 197 262 205.29c37.17-109 100.53-105.46 102.43-105.53 25.16-.81 44.19 10.59 44.83 28.65.25 7.69-4.17 22.59-19.52 23.13z"/>
                                                </svg>
                                            </span>
                                            <?php
                                            }
                                            if(isset($project['javascript'])){
                                            ?>
                                            <span title="javascript">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="skill-icon">
                                                    <path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM243.8 381.4c0 43.6-25.6 63.5-62.9 63.5-33.7 0-53.2-17.4-63.2-38.5l34.3-20.7c6.6 11.7 12.6 21.6 27.1 21.6 13.8 0 22.6-5.4 22.6-26.5V237.7h42.1v143.7zm99.6 63.5c-39.1 0-64.4-18.6-76.7-43l34.3-19.8c9 14.7 20.8 25.6 41.5 25.6 17.4 0 28.6-8.7 28.6-20.8 0-14.4-11.4-19.5-30.7-28l-10.5-4.5c-30.4-12.9-50.5-29.2-50.5-63.5 0-31.6 24.1-55.6 61.6-55.6 26.8 0 46 9.3 59.8 33.7L368 290c-7.2-12.9-15-18-27.1-18-12.3 0-20.1 7.8-20.1 18 0 12.6 7.8 17.7 25.9 25.6l10.5 4.5c35.8 15.3 55.9 31 55.9 66.2 0 37.8-29.8 58.6-69.7 58.6z"/>
                                                </svg>
                                            </span>
                                            <?php
                                            }
                                            if(isset($project['react'])){
                                            ?>
                                            <span title="react.js">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="skill-icon">
                                                    <path d="M418.2 177.2c-5.4-1.8-10.8-3.5-16.2-5.1.9-3.7 1.7-7.4 2.5-11.1 12.3-59.6 4.2-107.5-23.1-123.3-26.3-15.1-69.2.6-112.6 38.4-4.3 3.7-8.5 7.6-12.5 11.5-2.7-2.6-5.5-5.2-8.3-7.7-45.5-40.4-91.1-57.4-118.4-41.5-26.2 15.2-34 60.3-23 116.7 1.1 5.6 2.3 11.1 3.7 16.7-6.4 1.8-12.7 3.8-18.6 5.9C38.3 196.2 0 225.4 0 255.6c0 31.2 40.8 62.5 96.3 81.5 4.5 1.5 9 3 13.6 4.3-1.5 6-2.8 11.9-4 18-10.5 55.5-2.3 99.5 23.9 114.6 27 15.6 72.4-.4 116.6-39.1 3.5-3.1 7-6.3 10.5-9.7 4.4 4.3 9 8.4 13.6 12.4 42.8 36.8 85.1 51.7 111.2 36.6 27-15.6 35.8-62.9 24.4-120.5-.9-4.4-1.9-8.9-3-13.5 3.2-.9 6.3-1.9 9.4-2.9 57.7-19.1 99.5-50 99.5-81.7 0-30.3-39.4-59.7-93.8-78.4zM282.9 92.3c37.2-32.4 71.9-45.1 87.7-36 16.9 9.7 23.4 48.9 12.8 100.4-.7 3.4-1.4 6.7-2.3 10-22.2-5-44.7-8.6-67.3-10.6-13-18.6-27.2-36.4-42.6-53.1 3.9-3.7 7.7-7.2 11.7-10.7zM167.2 307.5c5.1 8.7 10.3 17.4 15.8 25.9-15.6-1.7-31.1-4.2-46.4-7.5 4.4-14.4 9.9-29.3 16.3-44.5 4.6 8.8 9.3 17.5 14.3 26.1zm-30.3-120.3c14.4-3.2 29.7-5.8 45.6-7.8-5.3 8.3-10.5 16.8-15.4 25.4-4.9 8.5-9.7 17.2-14.2 26-6.3-14.9-11.6-29.5-16-43.6zm27.4 68.9c6.6-13.8 13.8-27.3 21.4-40.6s15.8-26.2 24.4-38.9c15-1.1 30.3-1.7 45.9-1.7s31 .6 45.9 1.7c8.5 12.6 16.6 25.5 24.3 38.7s14.9 26.7 21.7 40.4c-6.7 13.8-13.9 27.4-21.6 40.8-7.6 13.3-15.7 26.2-24.2 39-14.9 1.1-30.4 1.6-46.1 1.6s-30.9-.5-45.6-1.4c-8.7-12.7-16.9-25.7-24.6-39s-14.8-26.8-21.5-40.6zm180.6 51.2c5.1-8.8 9.9-17.7 14.6-26.7 6.4 14.5 12 29.2 16.9 44.3-15.5 3.5-31.2 6.2-47 8 5.4-8.4 10.5-17 15.5-25.6zm14.4-76.5c-4.7-8.8-9.5-17.6-14.5-26.2-4.9-8.5-10-16.9-15.3-25.2 16.1 2 31.5 4.7 45.9 8-4.6 14.8-10 29.2-16.1 43.4zM256.2 118.3c10.5 11.4 20.4 23.4 29.6 35.8-19.8-.9-39.7-.9-59.5 0 9.8-12.9 19.9-24.9 29.9-35.8zM140.2 57c16.8-9.8 54.1 4.2 93.4 39 2.5 2.2 5 4.6 7.6 7-15.5 16.7-29.8 34.5-42.9 53.1-22.6 2-45 5.5-67.2 10.4-1.3-5.1-2.4-10.3-3.5-15.5-9.4-48.4-3.2-84.9 12.6-94zm-24.5 263.6c-4.2-1.2-8.3-2.5-12.4-3.9-21.3-6.7-45.5-17.3-63-31.2-10.1-7-16.9-17.8-18.8-29.9 0-18.3 31.6-41.7 77.2-57.6 5.7-2 11.5-3.8 17.3-5.5 6.8 21.7 15 43 24.5 63.6-9.6 20.9-17.9 42.5-24.8 64.5zm116.6 98c-16.5 15.1-35.6 27.1-56.4 35.3-11.1 5.3-23.9 5.8-35.3 1.3-15.9-9.2-22.5-44.5-13.5-92 1.1-5.6 2.3-11.2 3.7-16.7 22.4 4.8 45 8.1 67.9 9.8 13.2 18.7 27.7 36.6 43.2 53.4-3.2 3.1-6.4 6.1-9.6 8.9zm24.5-24.3c-10.2-11-20.4-23.2-30.3-36.3 9.6.4 19.5.6 29.5.6 10.3 0 20.4-.2 30.4-.7-9.2 12.7-19.1 24.8-29.6 36.4zm130.7 30c-.9 12.2-6.9 23.6-16.5 31.3-15.9 9.2-49.8-2.8-86.4-34.2-4.2-3.6-8.4-7.5-12.7-11.5 15.3-16.9 29.4-34.8 42.2-53.6 22.9-1.9 45.7-5.4 68.2-10.5 1 4.1 1.9 8.2 2.7 12.2 4.9 21.6 5.7 44.1 2.5 66.3zm18.2-107.5c-2.8.9-5.6 1.8-8.5 2.6-7-21.8-15.6-43.1-25.5-63.8 9.6-20.4 17.7-41.4 24.5-62.9 5.2 1.5 10.2 3.1 15 4.7 46.6 16 79.3 39.8 79.3 58 0 19.6-34.9 44.9-84.8 61.4zm-149.7-15c25.3 0 45.8-20.5 45.8-45.8s-20.5-45.8-45.8-45.8c-25.3 0-45.8 20.5-45.8 45.8s20.5 45.8 45.8 45.8z"/>
                                                </svg>
                                            </span>
                                            <?php
                                            }
                                            ?>
                                        </div>
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
                                        <!-- Button trigger modal -->
                                            <div class="col-8 offset-2 mb-3 col-xl-4 offset-xl-0">
                                                <button type="button" class="btn btn-light shadow w-100" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$project['id']?>">
                                                Infos
                                                </button>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal<?=$project['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?=$project['title']?></h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <?=$project['description']?>
                                                        </div>
                                                    </div>
                                                </div>
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
                            <label for="nom" class="form-label">Nom<sup>*</sup> :</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom">
                        </div>
                        <div class="col-lg-6 offset-lg-3 mb-3">
                            <label for="prenom" class="form-label">Prénom<sup>*</sup> :</label>
                            <input type="text" class="form-control" id="prenom" name="prenom"
                                placeholder="Votre prénom">
                        </div>
                        <div class="col-lg-6 offset-lg-3 mb-3">
                            <label for="email" class="form-label">Email<sup>*</sup> :</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Votre email">
                        </div>
                        <div class="col-lg-6 offset-lg-3 mb-3">
                            <label for="message" class="form-label">Message<sup>*</sup> :</label>
                            <textarea class="form-control" id="message" name="message"
                                placeholder="Votre message"></textarea>
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