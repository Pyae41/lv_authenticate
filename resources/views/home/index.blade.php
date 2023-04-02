@extends('layouts.app')

@section('content')
    @auth
        <h3 class="mt-3">{{ __('langs.products') }}</h3>

        @if (auth()->user()->role == 'admin' || auth()->user()->role == 'manager')
            <a href="{{ route('product.create') }}" class="btn btn-success mt-3">{{ __('langs.create_product') }}</a>
        @endif

        <table class="table table-striped mt-3 text-center">
            <thead class="bg-black text-white">
                <th>{{ __('langs.t_no') }}</th>
                <th>{{ __('langs.t_product_name') }}</th>
                <th>{{ __('langs.t_product_price') }}</th>
                <th>{{ __('langs.t_product_quantity') }}</th>
                @if (auth()->user()->role == 'admin' || auth()->user()->role == 'manager')
                    <th>{{ __('langs.t_action') }}</th>
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
                                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-info text-white me-2">{{ __('langs.edit_button') }}</a>
                                    <form action="{{ route('product.destroy', $product->id) }}" method="post" class="w-25">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">{{ __('langs.delete_button') }}</button>
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
            <h1 class="text-center">{{ __('langs.home-page') }}</h1>
            <p>{{ __('langs.not_logged_in') }}</p>
        </div>
    @endguest
@endsection
