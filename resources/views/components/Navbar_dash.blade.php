
<div class="navbar_dash">
        @if($icon_create)
        <a href="/dashboard/create">
            <i class="fa-solid fa-plus"></i>
            <span> create blog </span>
        </a>
        @else
        <a href="/dashboard/show">
            <i class="fa-brands fa-blogger-b"></i>
            <span>all blogs</span>
        </a>
        @endif
</div>