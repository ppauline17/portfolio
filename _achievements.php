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
                        <div class="col-12 project p-3 rounded">
                            <div class="row g-0">
                                <div class="col-lg-6 py-4">
                                <?php
                                if (is_array($project['picture'])) {
                                ?>
                                <div id="carouselExampleIndicators" class="carousel slide shadow">
                                    <div class="carousel-indicators">
                                    <?php
                                        $index = 0;
                                        $firstSlide = true;
                                        foreach ($project['picture'] as $image) {
                                    ?>
                                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to=<?=$index?>  <?php if($firstSlide){echo('class="active" aria-current="true"');} ?> aria-label="Slide <?=$index+1?>"></button>
                                    <?php
                                        $index ++;
                                    } ?>
                                    </div>
                                    <div class="carousel-inner">
                                    <?php
                                        foreach ($project['picture'] as $image) {
                                    ?>
                                        <div class="carousel-item <?php if($firstSlide){echo('active');} ?>">
                                            <img 
                                                srcset="
                                                    <?= $image ?>-500.jpg 500w,
                                                    <?= $image ?>-900.jpg 900w
                                                " 
                                                sizes="
                                                    (max-width: 1200px) 500px,
                                                    900px
                                                " 
                                                src="<?= $image ?>-900.jpg" 
                                                alt="capture d'écran du projet <?= $project['title'] ?>" 
                                                class="d-block w-100 rounded"
                                            >
                                        </div>
                                    <?php
                                        $firstSlide = false;
                                    } ?>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                                <?php
                                }elseif (is_string($project['picture'])){
                                    ?>
                                    <img srcset="
                                        <?= $project['picture'] ?>-500.jpg 500w,
                                        <?= $project['picture'] ?>-900.jpg 900w
                                        " sizes="
                                        (max-width: 1200px) 500px,
                                        900px
                                        " src="<?= $project['picture'] ?>-900.jpg" alt="capture d'écran du projet <?= $project['title'] ?>" class="card-img-top object-fit-contain rounded shadow mb-3">
                                <?php }; ?>
                                </div>
                                <div class="col-lg-6 p-4">
                                    <div class="card-body rounded p-4">
                                        <h5 class="card-title fs-2 fw-bold">
                                            <?php echo mb_strtoupper($project['title']);
                                            if ($project['isInProgress']) { ?>
                                                <sup class="fs-6 badge rounded-pill bg-blue">En cours</sup><?php
                                                                                                        } ?>
                                        </h5>
                                        <div class="row p-4">
                                            <?php foreach ($project['skills'] as $skill){
                                            ?>
                                                <span class="col-4 w-auto rounded-pill btn-skills me-2 mb-3 px-3 py-2" title=<?=$skill?>>
                                                    <span class="me-2"><?php include('assets/img/icons/'.$skill.'.svg');?></span>
                                                    <?= ucfirst($skill)?>
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
                                                <div class="col-12 mb-3">
                                                    <a href="<?= $project['website'] ?>" target="_blank" class="fs-5">
                                                        Visiter
                                                        <?php include('assets/img/icons/arrow-right.svg') ?>
                                                    </a>
                                                </div>
                                            <?php
                                            }
                                            if ($project['github']) {
                                            ?>
                                                <div class="col-12 mb-3">
                                                    <a href="<?= $project['github'] ?>" target="_blank" class="fs-5">
                                                        Github
                                                        <?php include('assets/img/icons/arrow-right.svg') ?>
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
</section>