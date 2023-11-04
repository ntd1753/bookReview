Đây là view Category
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
        <th>category ID</th>
        <th>category name </th>
    </tr>
    @foreach($category as $category)
        <tr>
            <td>{{$category["id"]}}</td>
            <td>{{$category["name"]}}</td>
        </tr>
    @endforeach
</table>
<a href="{{route("admin.index")}}">
    <button>home</button></a>
<a href="{{route("admin.book.index")}}">
    <button>Book</button></a>
</body>
</html>
