<h2>Категории новостей</h2>
<br>
<?php include_once "menu.php"; ?>
<br>
<br>
<?php foreach ($categories as $category): ?>
    <a href="/news/categories/<?=$category['id']?>"><?=$category['name']?></a><br>
<?php endforeach ?>