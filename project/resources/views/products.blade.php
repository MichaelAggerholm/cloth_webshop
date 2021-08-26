@include('includes.header')
@include('includes.navbar')

<div class="container">

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">

        @foreach($products as $product)
        <div class="col">
            <div class="card h-100">
                <img src="{{URL::asset( $product->image )}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$product->title}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                </div>
                <div class="card-footer bg-transparent">
                    <a href="{!! url('/basket'); !!}" class="btn btn-success">Add to basket</a>
                    <a href="{!! url('/item'); !!}" class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
        @endforeach

</div>

@include('includes.footer')
