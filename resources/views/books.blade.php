<h1>  Books Database </h1>
<table border="1">
    <ul>
    @foreach($books as $books)
<li><h3>{{$books['author']}}</h3> <p>{{$books['description']}}</p></li>
    @endforeach
    </ul>
</table>
