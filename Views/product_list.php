<!DOCTYPE html>
<html lang="fr">
<head>
    <title>
        <?php if($selectedCategory == false): ?>
            Tous les produits
        <?php else: ?>
            <?= $selectedCategory['name']; ?>
        <?php endif; ?>
    </title>
    <!-- inclusion du fichier head_assets.php (meta balises et styles) -->
    <?php require 'partials/head_assets.php'; ?>
</head>
<body>
<div class="container-fluid">
    <!-- inclusion du fichier header.php (header du site) -->
    <?php require 'partials/header.php'; ?>
    <div class="row my-3">
        <!-- inclusion du fichier nav.php (navigation du site) -->
        <?php require('partials/nav.php'); ?>
        <main class="col-9">
            <h1 class="mb-4">
                <?php if($selectedCategory == false): ?>
                    Tous les produits
                <?php else: ?>
                    <?= $selectedCategory['name']; ?>
                <?php endif; ?>
            </h1>

            <?php if($selectedCategory): ?>
                <h3 class="mb-4"><?= $selectedCategory['description']; ?></h3>
            <?php endif; ?>

            <div class="row">
                <?php foreach($products as $product): ?>
                    <!-- J'affiche mon produit SI pas de catégorie séléctionnée OU si (catégorie séléctionnée ET que son ID = $product['category_id'] ) -->
                    <?php if( $selectedCategory == false || $selectedCategory['id'] ==  $product['category_id']): ?>
                        <div class="col-md-4 mb-4">
                            <img src="images/products/<?= $product['images'][0]; ?>" class="img-fluid mb-3" alt="<?= $product['name']; ?>">
                            <h3><?= $product['name']; ?></h3>
                            <div class="mb-3">Catégorie :
                                <?php foreach($categories as $category): ?>
                                    <?php if($category['id'] == $product['category_id']): ?>
                                        <?= $category['name']; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                            <div><?= $product['short_description']; ?></div>
                            <h4><?= $product['price']; ?> €</h4>
                            <a href="index.php?page=Product&product_id=<?= $product['id']; ?>">Voir le produit</a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </main>
    </div>
</div>
</body>
</html>
