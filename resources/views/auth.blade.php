@extends('layouts.main')

@section('title')
@parent | Авторизация
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
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
@endsection