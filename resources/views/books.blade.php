<h1>  API </h1>

    <ul>
    @foreach($books as $book)

 <li><h3>{{$book['author']}}</h3> <p>{{$book['description']}}</p></li>

    @endforeach
    </ul>

