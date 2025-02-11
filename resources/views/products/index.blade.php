<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Products</title>
    <style>
        body {
            background-color: turquoise;
        }

        .center {
            margin-left: auto;
            margin-right: auto;
            width: 900px;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <h1><center>Products List</center></h1>
    <div>
        @if(session()->has('success'))
            <div div style="text-align: center; font-weight: bold; margin-top: 10px; font-size: 20px;">
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <h2><a href="{{route('product.create')}}"><center>Add a product here</center></a></h2>
        </div>
        <br>
        <table class="center" border="1">
            <tr>
                <th><center>ID</center></th>
                <th><center>Name</center></th>
                <th><center>Category</center></th>
                <th><center>Quantity</center></th>
                <th><center>Actions</center></th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td><center>{{$product->id}}</center></td>
                    <td><center>{{$product->name}}</center></td>
                    <td><center>{{$product->category}}</center></td>
                    <td><center>{{$product->quantity}}</center></td>
                    <td><center>
                        <form method="post" action="{{route('product.edit', ['product' => $product])}}" style="display: inline-block;">
                            @csrf
                            @method('get')
                            <input type="submit" value="Edit" />
                        </form>
                        <form method="post" action="{{route('product.destroy', ['product' => $product])}}" style="display: inline-block;" onsubmit="return confirm('Confirm to delete this product?');">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </center></td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>