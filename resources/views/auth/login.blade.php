@extends('layouts.auth')
@section('title', 'Login')

@section('content')
<div class="media align-items-stretch justify-content-center ht-100p pos-relative">
    <div class="media-body align-items-center d-none d-lg-flex">
        <div class="mx-wd-600">
        <img src="{{ asset('assets/img/img15.png') }}" class="img-fluid" alt="">
        </div>
        <div class="pos-absolute b-0 l-0 tx-12 tx-center">
        Desain vector dibuat oleh: <a href="https://www.freepik.com/pikisuperstar" target="_blank">pikisuperstar (freepik.com)</a>
        </div>
    </div><!-- media-body -->
    <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
        <div class="wd-100p">
        <h3 class="tx-color-01 mg-b-5">Sign In</h3>
        <p class="tx-color-03 tx-16 mg-b-40">Selamat Datang! Silahkan masukan akun Anda.</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label>Alamat Email</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="alamat@email.com" required autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <div class="d-flex justify-content-between mg-b-5">
                    <label class="mg-b-0-f">Password</label>
                </div>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Masukan Password Anda" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif                  
            </div>
            <button class="btn btn-brand-02 btn-block">Sign In</button>
        </form>
        </div>
    </div><!-- sign-wrapper -->
</div><!-- media -->
@endsection
