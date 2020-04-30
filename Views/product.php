<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?= $selectedProduct['name']; ?></title>
    <!-- inclusion du fichier head_assets.php (meta balises et styles) -->
    <?php require 'partials/head_assets.php'; ?>
</head>
<body>
<div class="container-fluid">
    <!-- inclusion du fichier header.php (header du site) -->
    <?php require 'partials/header.php'; ?>
    <div class="row my-3">
        <!-- inclusion du fichier nav.php (navigation du site) -->
        <?php require 'partials/nav.php'; ?>
        <main class="col-9">
            <h1><?= $selectedProduct['name']; ?></h1>
            <div class="mb-3">Catégorie :
                <?php foreach($categories as $category): ?>
                    <?php if($category['id'] == $selectedProduct['category_id']): ?>
                        <?= $category['name']; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <div><?= $selectedProduct['description']; ?></div>
            <h3><?= $selectedProduct['price']; ?> €</h3>
            <div class="row mt-4">
                <?php foreach($selectedProduct['images'] as $image): ?>
                    <div class="col-lg-4">
                        <img class="img-fluid mb-4" src="images/products/<?= $image; ?>" alt="<?= $product['name']; ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </main>
    </div>
</div>
</body>
</html>
