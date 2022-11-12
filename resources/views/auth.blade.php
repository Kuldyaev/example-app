<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
</head>
<body class="authpage">
    <h1>страница авторизации</h1>
    <br>
@include('menu')
    <br>
    <form>
        <label for="login">Логин:</label><br>
        <input type="text" id="login" name="login"><br>
        <label for="pass">Пароль:</label><br>
        <input type="text" id="pass" name="pass"><br>
        <input type="radio" id="remember" name="remember" value="запомнить">
        <label for="remember">запомнить</label><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>