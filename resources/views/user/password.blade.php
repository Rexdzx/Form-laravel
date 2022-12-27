@extends('app')
@section('content')

<div class="row">
    <div class="col-md-6">
        @if (session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if ($errors->any())
            @foreach ($errors->all() as $err )
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach
        @endif

        <form action="{{ route('password.action') }}" method="POST">
        @csrf    
        <div class="mb-3">
            <label>Password <span class="text-danger">*</span></label>
            <input type="password" name="old_password" class="form-control">
        </div>
        <div class="mb-3">
            <label>Password Baru <span class="text-danger">*</span></label>
            <input type="password" name="new_password" class="form-control">
        </div>
        <div class="mb-3">
            <label>Konfirmasi Password <span class="text-danger">*</span></label>
            <input type="password" name="new_password_confirmation" class="form-control">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">Ganti Password</button>
            <a href="{{ route('home') }}" class="btn btn-danger">Kembali</a>
        </div>
        </form>
    </div>
</div>

@endsection