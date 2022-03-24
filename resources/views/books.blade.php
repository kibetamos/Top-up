<h1>  API </h1>
<table border="1">
    <tr>
        <td>ISBN</td>

    </tr>
    @foreach($books as $book)
    <tr>
    <td>{{$book}}</td>
</tr>
    @endforeach
</table>
