<h2>Категории новостей</h2>
<br>
@include('menu')
<br>
<br>
<?php foreach ($categories as $category): ?>
    <a href="/news/categories/<?=$category['id']?>"><?=$category['name']?></a><br>
<?php endforeach ?>