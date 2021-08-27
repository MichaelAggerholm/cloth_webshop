@include('includes.header')
@include('includes.navbar')

<div class="container">

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">

        @foreach($products as $product)
            <div class="col">
                <div class="card h-100">
                    <a href="/">
                        <img src="{{URL::asset( $product->image )}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->title}}</h5>
                            <p class="card-text">{{$product->description}}</p>
                            <p>{{$product->category_name}}</p>
                            <p>{{$product->brand_name}}</p>
                        </div>
                        <div class="card-footer">
                            @if($product->discountPrice > 0)
                                <b class="lineThrough">{{$product->price}} Kr,-</b>
                                <b class="discountPrice">{{$product->discountPrice}} Kr,-</b>
                            @else
                                <b>{{$product->price}} Kr,-</b>
                            @endif
                        </div>
                    </a>
                </div>
            </div>
        @endforeach

</div>

@include('includes.footer')
