@extends('layouts.app') @section('title', 'Tambah User') @section('content')

<div class="container">
    <ol class="breadcrumb df-breadcrumbs mg-b-10">
        <li class="breadcrumb-item"><a href="{{ @url('/') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ @url('users') }}">Management User</a></li>
        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
    </ol>

    <hr class="mg-y-30">

    <h4 id="section1" class="mg-b-10">Menu @yield('title')</h4>
    <p class="mg-b-30">Input data untuk terkait kebutuhan data user sesuai dengan yang dibutuhkan didalam form berikut ini.</p>

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}" placeholder="Nama" required autofocus>
                    <p class="text-danger">{{ $errors->first('name') }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid':'' }}"  placeholder="Email" required>
                    <p class="text-danger">{{ $errors->first('email') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid':'' }}"  placeholder="Password" required>
                    <p class="text-danger">{{ $errors->first('password') }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">NPP</label>
                    <input type="text" name="npp" class="form-control {{ $errors->has('npp') ? 'is-invalid':'' }}" placeholder="NPP" required>
                    <p class="text-danger">{{ $errors->first('npp') }}</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control {{ $errors->has('jabatan') ? 'is-invalid':'' }}" placeholder="Jabatan" required>
                    <p class="text-danger">{{ $errors->first('jabatan') }}</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Role</label>
                    <select name="role" class="form-control {{ $errors->has('role') ? 'is-invalid':'' }}" required>
                        <option value="">Pilih</option>
                        @foreach ($role as $row)
                        <option value="{{ $row->name }}">{{ $row->name }}</option>
                        @endforeach
                    </select>
                    <p class="text-danger">{{ $errors->first('role') }}</p>
                </div>
            </div>
        </div>

        <div class="form-group">
            <a href="{{ url('users') }}" class="btn btn-outline-dark btn-sm"><i data-feather="arrow-left"></i> Kembali</a>
            <button class="btn btn-primary btn-sm"><i data-feather="save"></i> Simpan</button>
        </div>
    </form>

</div>

@endsection