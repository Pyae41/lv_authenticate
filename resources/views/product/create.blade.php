@extends('layouts.app')

@section('content')
    @auth
        <h3 class="mt-3 mb-2">{{ __('langs.create_product') }}</h3>

        <a href="{{ route('home.index') }}" class="btn btn-dark">{{ __('langs.back_button') }}</a>

        <div class="card p-3 w-50 mx-auto mt-3">
            <div class="card-content">
                <form action="{{ route('product.store') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="" class="form-label">{{ __('langs.t_product_name') }}</label>
                        <input type="text" name="product_name" id=""
                            class="form-control @if ($errors->has('product_name')) border border-danger @endif"
                            placeholder="{{ __('langs.pro_placeholder_name') }}" value="{{ old('product_name') }}">
                        @if ($errors->has('product_name'))
                            <small class="text-danger">{{ $errors->first('product_name') }}</small>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="form-label">{{ __('langs.t_product_price') }}</label>
                        <input type="text" name="price" id=""
                            class="form-control  @if ($errors->has('price')) border border-danger @endif"
                            placeholder="{{ __('langs.pro_placeholder_price') }}" value="{{ old('price') }}">
                        @if ($errors->has('price'))
                            <small class="text-danger">{{ $errors->first('price') }}</small>
                        @endif
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="form-label">{{ __('langs.t_product_quantity') }}</label>
                        <input type="text" name="qty" id=""
                            class="form-control @if ($errors->has('qty')) border border-danger @endif"
                            placeholder="{{ __('langs.pro_placeholder_quantity') }}" value="{{ old('qty') }}">
                        @if ($errors->has('qty'))
                            <small class="text-danger">{{ $errors->first('qty') }}</small>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-success w-100">{{ __('langs.create_button') }}</button>
                </form>
            </div>
        </div>
    @endauth
@endsection
