<h1>Добавление новости</h1><br>
<br>
<?php include_once "menu.php"; ?>
<br>
<form>
    <label for="category">Категория:</label><br>
    <input type="text" id="category" name="category"><br>
    <label for="title">Название:</label><br>
    <input type="text" id="title" name="title"><br>
    <label for="shortDescription">Краткое описание:</label><br>
    <input type="text" id="shortDescription" name="shortDescription"><br>
    <label for="textInfo">Текст новости:</label><br>
    <input type="text" id="textInfo" name="textInfo"><br><br>
    <input type="submit" value="Submit">
</form>