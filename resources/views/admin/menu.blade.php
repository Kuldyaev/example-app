<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home')?' active':'' }}" style="text-decoration: none">
        Главная &nbsp;
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.showAllNewsForAdmin') }}" class="nav-link {{ request()->routeIs('admin.showAllNewsForAdmin')?' active':'' }}" style="text-decoration: none">
        Все новости &nbsp;
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.create') }}" class="nav-link {{ request()->routeIs('admin.create')?' active':'' }}" style="text-decoration: none">
        Создать новость &nbsp;
    </a>
</li>
<li class="nav-item"> 
    <my-menu></my-menu>
</li>
<li class="nav-item">
    <a href="{{ route('admin.index') }}" class="nav-link {{ request()->routeIs('admin.index')?' active':'' }}" style="text-decoration: none">
        Авторизация
    </a>
</li>