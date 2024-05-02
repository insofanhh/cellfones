<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a product</h1>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form action="{{ route('product.update', ['product'=> $product]) }}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="">Name</label>
            <input type="text" name="name" value="{{ $product->name }}" id="">
        </div>
        <div>
            <label for="">Qty</label>
            <input type="text" name="qty" value="{{ $product->qty }}" id="">
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" name="price" value="{{ $product->price }}" id="">
        </div>
        <div>
            <label for="">Description</label>
            <textarea name="description"  id="" cols="30" rows="10">{{ $product->description }}</textarea>
        </div>
        <div>
        <button type="submit">Update</button>
        </div>
    </form>
</body>
</html>