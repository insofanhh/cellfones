@extends('layouts.app')
@section('content')  
    
    <h1>Create a product</h1>
    <div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <form action="{{ route('product.store') }}" method="post">
        @csrf
        @method('post')
        <div>
            <label for="">Name</label>
            <input type="text" name="name" id="">
        </div>
        <div>
            <label for="">Qty</label>
            <input type="text" name="qty" id="">
        </div>
        <div>
            <label for="">Price</label>
            <input type="text" name="price" id="">
        </div>
        <div>
            <label for="">Description</label>
            <textarea name="description" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
        <button type="submit">Submit</button>
        </div>
    </form>
    @endsection