<h2>Все новости</h2>
<br>
@include('menu')
<br>
<br>
<?php foreach ($news as $item): ?>
    <a href="/news/showOne/<?=$item['id']?>"><?=$item['title']?></a><br>
    <p><i><?=$item['shortDescription']?></i></p><br>
<?php endforeach ?>