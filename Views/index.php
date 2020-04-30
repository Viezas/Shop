<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Homepage</title>
    <!-- inclusion du fichier head_assets.php (meta balises et styles) -->
    <?php require 'partials/head_assets.php'; ?>
</head>
<body class="index-body">
<div class="container-fluid">
    <!-- inclusion du fichier header.php (header du site) -->
    <?php require 'partials/header.php'; ?>
    <div class="row my-3">
        <!-- inclusion du fichier nav.php (navigation du site) -->
        <?php require 'partials/nav.php'; ?>
        <div class="col-9">
            <h3 class="mb-4">3 produits au hasard :</h3>
            <section class="row">
                <!-- trois produits au hasard SANS DOUBLONS -->

                <?php
                //cette variable va garder en mémoire les ID des produits séléctionnés par la boucle suivante afin de ne pas les re-selectionner
                $selectedProducts = [];
                ?>

                <?php for($n=0;$n<3;$n++): ?>
                    <?php
                    //Tant que $nb aléatoire existe dans le tableau $selectedProducts, on le re-génère
                    do{
                        $nb = rand(0, sizeof($products) - 1 );
                    } while(in_array($nb , $selectedProducts));

                    //$product = le produit selectionné
                    $product = $products[$nb];
                    //on enregistre l'id du produit selectionné dans $selectedProducts pour ne pas le re-séléctionner dans les prochaines ittérations de boucle
                    $selectedProducts[] = $nb;
                    ?>

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
                <?php endfor; ?>
            </section>
        </div>
    </div>
</div>
</body>
</html>

