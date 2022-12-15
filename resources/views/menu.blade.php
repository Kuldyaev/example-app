<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home')?' active':'' }} " style="text-decoration: none">
        Главная &nbsp;
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('news.categories.all') }}" class="nav-link {{ request()->routeIs('news.categories.all')?' active':'' }}" style="text-decoration: none">
        Категории новостей &nbsp;
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('news.showAllNews') }}" class="nav-link {{ request()->routeIs('news.showAllNews')?' active':'' }}" style="text-decoration: none">
        Все новости &nbsp;
    </a>
</li>
@auth
<li class="nav-item">
    <a href="{{ route('user.profile') }}" class="nav-link {{ request()->routeIs('user.profile')?' active':'' }}" style="text-decoration: none">
        Профиль &nbsp;
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('auth') }}" class="nav-link {{ request()->routeIs('auth')?' active':'' }}" style="text-decoration: none">
        АдминПанель &nbsp;
    </a>
</li>
@endauth