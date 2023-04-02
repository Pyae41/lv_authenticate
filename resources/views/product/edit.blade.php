@extends('layouts.app')

@section('content')
    @auth
        <h3 class="mt-3">{{ __('langs.update_product') }}</h3>

        <a href="{{ route('home.index') }}" class="btn btn-dark">{{ __('langs.back_button') }}</a>

        <div class="card p-3 w-50 mx-auto mt-3">
            <div class="card-content">
                <form action="{{ route('product.update', $product->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group mb-3">
                        <label for="" class="form-label">{{ __('langs.t_product_name') }}</label>
                        <input type="text" name="product_name" id=""
                            class="form-control @if ($errors->has('product_name')) border border-danger @endif"
                            placeholder="{{ __('langs.pro_placeholder_name') }}" value="{{ $product->product_name }}">
                        @if ($errors->has('product_name'))
                            <small class="text-danger">{{ $errors->first('product_name') }}</small>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="form-label">{{ __('langs.t_product_price') }}</label>
                        <input type="text" name="price" id=""
                            class="form-control  @if ($errors->has('price')) border border-danger @endif"
                            placeholder="{{ __('langs.pro_placeholder_price') }}" value="{{ $product->price }}">
                        @if ($errors->has('price'))
                            <small class="text-danger">{{ $errors->first('price') }}</small>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="form-label">{{ __('langs.t_product_quantity') }}</label>
                        <input type="text" name="qty" id=""
                            class="form-control @if ($errors->has('qty')) border border-danger @endif"
                            placeholder="{{ __('langs.pro_placeholder_quantity') }}" value="{{ $product->qty }}">
                        @if ($errors->has('qty'))
                            <small class="text-danger">{{ $errors->first('qty') }}</small>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success w-100">{{ __('langs.update_button') }}</button>
                </form>
            </div>
        </div>
    @endauth
@endsection
