<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{!! url('/'); !!}">Toejshoppen</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="{!! url('/products'); !!}">Produkter</a>--}}
{{--                </li>--}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Kategorier</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
{{--                        @foreach($categories as $category)--}}
{{--                            <li><a class="dropdown-item" href="#">{{$category->category_name}}</a></li>--}}
{{--                        @endforeach--}}


{{--                        @php($categories = app\Http\categoryController::all())--}}
{{--                        @if(count($categories)> 0)--}}
{{--                            @foreach($categories as $category)--}}
{{--                                <li><a class="dropdown-item" href="#">{{$category->category_name}}</a></li>--}}
{{--                            @endforeach--}}
{{--                        @endif--}}
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Brands</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
{{--                        @foreach($brands as $brand)--}}
{{--                            <li><a class="dropdown-item" href="#">{{$brand->brandName}}</a></li>--}}
{{--                        @endforeach--}}
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!! url('/contact'); !!}">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
