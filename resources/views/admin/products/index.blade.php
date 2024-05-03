@extends('admin.layouts.ad_layout')
@section('content')
    <h1>Products</h1>
    <div>
        @if (session()->has('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->qty }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->description }}</td>
                    <td>
                        <a href="{{ route('product.edit',['product'=> $product]) }}">Edit</a>
                       <td><form action="{{ route('product.delete', ['product'=> $product]) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" name="" id="">
                        </form>
                    </td> 
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    @endsection