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
                                include('assets/img/icons/' . $skill['icon']);

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