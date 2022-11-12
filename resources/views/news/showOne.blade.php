@include('menu')
<br>
<?php if ($news): ?>
    <h2><?=$news['title']?></h2>
    <h3><i><?=$news['shortDescription']?></i></h3>
    <br>
    <p><?=$news['textInfo']?></p>
<?php else: ?>
    <p> нет такой новости </p>
<?php endif; ?>