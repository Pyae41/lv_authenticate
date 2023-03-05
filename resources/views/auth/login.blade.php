@extends('layouts.auth')

@section('content')
    <div class="card p-3 w-50 mx-auto">
        <div class="card-title">
            <h1 class="text-center">Login</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('login.perform') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" name="name" id="" placeholder="Username" class="form-control" required>

                    @if ($errors->has('name'))
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <input type="password" name="password" id="" placeholder="Your Password" class="form-control"
                        required>
                    @if ($errors->has('password'))
                        <small class="text-danger">{{ $errors->first('password') }}</small>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary w-100">Login in</button>
            </form>
        </div>
    </div>
@endsection
