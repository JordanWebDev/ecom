<div class="card sidebar-menu">
    <div class="card-header">

        <div class="card-title"><h4>Products Categories</h4></div>

    </div>
    <div class="card-body">
        <ul class="nav flex-column category-menu">
            @foreach ($categories as $category)
                <li class="list-group-item {{ request()->category == $category->slug ? 'active' : ''}} ">
                    <a href="{{ route('shop.index', ['category' => $category->slug ])}}"><h5>{{ $category->name }}</h5></a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
