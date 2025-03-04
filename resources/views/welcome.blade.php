<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>description</th>
                <th>price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$products->links()}}

    <script>
        function delete(e) {
            const check = confirm('Tu veut vraimmment suprimer se produit ?????????');

            if (check) {
                let id = document.getElementById
            }
        }

    </script>
</body>
</html>
