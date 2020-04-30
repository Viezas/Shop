<nav class="col-3 py-2 categories-nav">
	<b>Menu</b>
	<ul>
		<li><a href="index.php?page=Product_list">Tous les produits</a></li>
		<!-- liste des catégories -->
        <?php foreach($categories as $category): ?>
            <li><a href="index.php?page=Product_list&category_id=<?= $category['id'] ?>"><?= $category['name']; ?></a></li>
        <?php endforeach; ?>
	</ul>
</nav>
