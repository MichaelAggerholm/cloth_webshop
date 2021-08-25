@include('includes.header')
@include('includes.navbar')

<div class="container">

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('img/example.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This coner card with supporting text below as a natural lead-in to additional content. This coner card with supporting text below as a natural lead-in to additional content. This coner card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer bg-transparent">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-success">Primary</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('img/example2.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a short card.</p>
                </div>
                <div class="card-footer bg-transparent">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-success">Primary</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('img/example3.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
                <div class="card-footer bg-transparent">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-success">Primary</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('img/example4.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer bg-transparent">
                    <button type="button" class="btn btn-primary">Primary</button>
                    <button type="button" class="btn btn-success">Primary</button>
                </div>
            </div>
        </div>
    </div>

</div>

@include('includes.footer')