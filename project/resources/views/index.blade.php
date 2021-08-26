@include('includes.header')
@include('includes.navbar')

<div class="container">
    <p>Index page</p>

    <p>Test pulling data from DB:</p>
    <table>
        <tr>
            <th>Id</th>
            <th>Titel</th>
            <th>Beskrivelse</th>
            <th>Billede</th>
        </tr>
        @foreach($products as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->description}}</td>
            <td>{{$item->image}}</td>
        </tr>
        @endforeach
    </table>
</div>

@include('includes.footer')
