@extends('layouts.app')

@section('content')
    @auth
        <h3 class="mt-3">Product</h3>

        @if (auth()->user()->role == 'admin' || auth()->user()->role == 'manager')
            <a href="{{ route('product.create') }}" class="btn btn-success mt-3">Create New Product</a>
        @endif

        <table class="table table-striped mt-3 text-center">
            <thead class="bg-black text-white">
                <th>Id</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                @if (auth()->user()->role == 'admin' || auth()->user()->role == 'manager')
                    <th>Action</th>
                @endif
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->qty }}</td>
                        @if (auth()->user()->role == 'admin' || auth()->user()->role == 'manager')
                            @can('isAdmin')
                                <td class="d-flex justify-content-center">
                                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-info text-white me-2">Edit</a>
                                    <form action="{{ route('product.destroy', $product->id) }}" method="post" class="w-25">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            @elsecan('isManager')
                                <td class="d-flex justify-content-center">
                                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-info text-white">Edit</a>
                                </td>
                            @endcan
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endauth
    @guest
        <div class="bg-light p-5 rounded text-center">
            <h1 class="text-center">Home Page</h1>
            <p>You are in home page.</p>
        </div>
    @endguest
@endsection
