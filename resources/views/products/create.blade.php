<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <style>
        body {
            background-color: turquoise;
        }

        form {
            width: 50%;
            margin: auto;
            padding: 20px;
            background-color: turquoise;
        }

        input[type="text"] {
            width: 80%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid gray;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 50%;
            padding: 10px;
            font-size: 16px;
            background-color: darkblue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>
    <h1><center>Add a product</center></h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{($error)}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div><center>
            <label>Name</label><br>
            <input type="text" name="name" placeholder="Name" />
        </center></div>
        <br>
        <div><center>
            <label>Category</label><br>
            <input type="text" name="category" placeholder="Category" />
        </center></div>
        <br>
        <div><center>
            <label>Quantity</label><br>
            <input type="text" name="quantity" placeholder="Quantity" />
        </center></div>
        <br>
        <div><center>
            <input type="submit" value="Add a new product" />
        </center></div>
    </form>
    <h2><a href="{{route('product.index')}}"><center>Back to view all products</center></a></h2>
</body>
</html>