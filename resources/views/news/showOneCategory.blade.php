<h2><i>Новости одной категории</i></h2>
<br>
@include('menu')
<br>
<?php if ($news): ?>
    <<?php foreach ($news as $item): ?>
        <a href="/news/showOne/<?=$item['id']?>"><?=$item['title']?></a><br>
        <p><i><?=$item['shortDescription']?></i></p><br>
    <?php endforeach ?>
<?php else: ?>
    <p> нет такой новости </p>
<?php endif; ?>