@extends('layouts.auth')

@section('content')
    <div class="card p-3 w-50 mx-auto">
        <div class="card-title">
            <h1 class="text-center">Register</h1>
        </div>
        <div class="card-body">
            <form action="{{ route('register.registration') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <input type="text" name="name" id="" placeholder="Username" class="form-control" required>

                    @if ($errors->has('name'))
                        <small class="text-danger">{{ $errors->first('name') }}</small>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <input type="text" name="email" id="" placeholder="example@gmail.com" class="form-control"
                        required>
                    @if ($errors->has('email'))
                        <small class="text-danger">{{ $errors->first('email') }}</small>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <input type="password" name="password" id="" placeholder="Your Password" class="form-control"
                        required>
                    @if ($errors->has('password'))
                        <small class="text-danger">{{ $errors->first('password') }}</small>
                    @endif
                </div>
                <div class="form-group mb-3">
                    <input type="password" name="confirm_password" id="" placeholder="Confirm Pasword"
                        class="form-control" required>
                    @if ($errors->has('confirm_password'))
                        <small class="text-danger">{{ $errors->first('confirm_password') }}</small>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
        </div>
    </div>
@endsection
