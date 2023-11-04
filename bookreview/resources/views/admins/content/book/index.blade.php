Đây là view Book
<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Danh sách sách</h2>

<table>
    <tr>
        <th>Book ID</th>
        <th>Book Title</th>
    </tr>
    @foreach($book as $book)
        <tr>
            <td>{{$book["id"]}}</td>
            <td>{{$book["title"]}}</td>
        </tr>
    @endforeach
</table>
<a href="{{route("admin.index")}}">
    <button>home</button></a>
<a href="{{route("admin.category.index")}}">
    <button>category</button></a>
</body>
</html>
