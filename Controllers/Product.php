<!-- inclusion du fichier _datas.php (pour les données des produits et des catégories) -->
<?php
require_once 'Models/Category.php';
require_once 'Models/Product.php';

    //postulat de base, on part du principe qu'aucun produit valide n'a été selectionné
    $selectedProduct = false;

    if(isset($_GET['product_id']) ){

        //si $_GET['product_id'] (ID de produit voulu) n'est pas un entier naturel, on redirige l'utilisateur vers l'index
        if(!ctype_digit($_GET['product_id'])) {
            header('Location:index.php');
            exit;
        }

        //on cherche $_GET['product_id'] (ID de produit voulu) dans le tableau des produits, si on le trouve $selectedProduct = $product
        foreach($products as $product){
            if($product['id'] == $_GET['product_id']){
                $selectedProduct = $product;
            }
        }
    }

    //si $selectedProduct vaut toujours false après tous les tests, c'est que le produit n'a pas été trouvé dans le tableau => on redirige vers index
    if($selectedProduct == false ){
        header('Location:index.php');
        exit;
    }
    //si ce test est passé, alors $selectedProduct est un produit du tableau
include "Views/product.php";
