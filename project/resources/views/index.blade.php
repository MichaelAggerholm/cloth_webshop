@include('includes.header')
@include('includes.navbar')

<div class="container">
    <h1>Index page</h1>
{{--    <br><br><br><br>--}}
{{--    <b>Test af data udtræk fra db:</b><br>--}}
{{--    <table class="table table-striped">--}}
{{--        <thead>--}}
{{--        <tr>--}}
{{--            <th scope="col">#</th>--}}
{{--            <th scope="col">Titel</th>--}}
{{--            <th scope="col">Beskrivelse</th>--}}
{{--            <th scope="col">Billede</th>--}}
{{--        </tr>--}}
{{--        </thead>--}}
{{--        <tbody>--}}
{{--        @foreach($products as $item)--}}
{{--        <tr>--}}
{{--            <td>{{$item->id}}</td>--}}
{{--            <td>{{$item->title}}</td>--}}
{{--            <td>{{$item->description}}</td>--}}
{{--            <td>{{$item->image}}</td>--}}
{{--        </tr>--}}
{{--        @endforeach--}}
{{--        </tbody>--}}
{{--    </table>--}}

</div>

@include('includes.footer')
