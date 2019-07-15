@extends('layouts.app') @section('title', 'Edit User') @section('content')

<div class="container">
    <ol class="breadcrumb df-breadcrumbs mg-b-10">
        <li class="breadcrumb-item"><a href="{{ @url('/') }}">Home</a></li>
        @role('Admin')
        <li class="breadcrumb-item"><a href="{{ @url('users') }}">Management User</a></li>
        @endrole
        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
    </ol>
    
    <hr class="mg-y-30">

    @if (session('success'))
        @alert(['type' => 'success'])
            {!! session('success') !!}
        @endalert
    @elseif (session('warning'))
        @alert(['type' => 'warning'])
            {!! session('warning') !!}
        @endalert
    @elseif (session('danger'))
        @alert(['type' => 'danger'])
            {!! session('danger') !!}
        @endalert
    @endif

    <h4 id="section1" class="mg-b-10">Menu @yield('title')</h4>
    <p class="mg-b-30"> @yield('title') terkait kebutuhan data user sesuai dengan yang dibutuhkan didalam form berikut ini.</p>

    <form action="{{ route('users.update', Crypt::encryptString($user->id)) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="name" value="{{ $user->name }}" class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}" required>
                <p class="text-danger">{{ $errors->first('name') }}</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" value="{{ $user->email }}" class="form-control {{ $errors->has('email') ? 'is-invalid':'' }}" required readonly>
                <p class="text-danger">{{ $errors->first('email') }}</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid':'' }}">
                <p class="text-muted font-italic font-weight-light">Biarkan kosong, jika tidak ingin mengganti password</p>
                <p class="text-danger">{{ $errors->first('password') }}</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <label for="">NPP</label>
                <input type="text" name="npp" value="{{ $user->npp }}" class="form-control {{ $errors->has('npp') ? 'is-invalid':'' }}" placeholder="NPP" required>
                <p class="text-danger">{{ $errors->first('npp') }}</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
                <label for="">Jabatan</label>
                <input type="text" name="jabatan" value="{{ $user->jabatan }}" class="form-control {{ $errors->has('jabatan') ? 'is-invalid':'' }}" placeholder="Jabatan" required>
                <p class="text-danger">{{ $errors->first('jabatan') }}</p>
            </div>
          </div>
        </div>
        <div class="form-group">
            @role('Admin')
            <a href="{{ url('users') }}" class="btn btn-outline-dark btn-sm"><i data-feather="arrow-left"></i> Kembali</a>
            @endrole
            <button class="btn btn-primary btn-sm"><i data-feather="save"></i> Simpan</button>
        </div>
    </form>

</div>

@endsection