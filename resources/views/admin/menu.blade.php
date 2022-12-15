<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home')?' active':'' }}" style="text-decoration: none">
        Главная &nbsp;
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.news.index') }}" class="nav-link {{ request()->routeIs('admin.news.index')?' active':'' }}" style="text-decoration: none">
        Все новости &nbsp;
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.categories.index') }}" class="nav-link {{ request()->routeIs('admin.categories.index')?' active':'' }}" style="text-decoration: none">
        Категории новостей &nbsp;
    </a>
</li>
<li class="nav-item"> 
    <my-menu></my-menu>
</li>
@auth
<li class="nav-item">
    <a href="{{ route('admin.updateProfile') }}" class="nav-link {{ request()->routeIs('admin.updateProfile')?' active':'' }}" style="text-decoration: none">
       Профиль &nbsp;
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('admin.users') }}" class="nav-link {{ request()->routeIs('admin.users')?' active':'' }}" style="text-decoration: none">
        Пользователи &nbsp;
    </a>
</li>
@endauth