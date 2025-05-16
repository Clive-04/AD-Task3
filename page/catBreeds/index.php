<?php
    require_once '../../bootstrap.php';

    $cats = getAllCatBreeds();
?>

<main class="container">
    <div class="row">
        <?php foreach ($cats as $name => $cat): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="<?= $cat['image'] ?>" class="card-img-top" alt="<?= $name ?>">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $name ?></h5>
                        <p class="card-text">Origin: <?= $cat['origin'] ?></p>
                        <p class="card-text">Lifespan: <?= $cat['lifespan'] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</main>

<?php
    include BASE_PATH . '/components/footer.component.php';
?>