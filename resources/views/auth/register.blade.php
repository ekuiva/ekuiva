@extends('layouts.auth')
@section('title', 'Register')

@section('content')
<div class="media align-items-stretch justify-content-center ht-100p">
    <div class="sign-wrapper mg-lg-r-50 mg-xl-r-60">
        <div class="pd-t-20 wd-100p">
        <h4 class="tx-color-01 mg-b-5">Daftar Akun Baru</h4>
        <p class="tx-color-03 tx-16 mg-b-40">Daftar gratis dan hanya perlu satu menit.</p>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">{{ __('Name') }}</label>
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Masukan Nama Anda" required autofocus>
                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="email">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Masukan Email Anda" required>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Masukan Password Anda" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Masukan Konfirmasi Password" required>
            </div>

            <div class="form-group">
                <label for="npp">{{ __('NPP') }}</label>
                <input id="npp" type="text" class="form-control{{ $errors->has('npp') ? ' is-invalid' : '' }}" name="npp" placeholder="Masukan NPP Anda" required>
                @if ($errors->has('npp'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('npp') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="jabatan">{{ __('Jabatan') }}</label>
                <input id="jabatan" type="text" class="form-control{{ $errors->has('jabatan') ? ' is-invalid' : '' }}" name="jabatan" placeholder="Masukan Jabatan Anda" required>
                @if ($errors->has('jabatan'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('jabatan') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group tx-12">
                Dengan mengklik <strong>Buat Akun Baru</strong> di bawah, Anda menyetujui ketentuan layanan dan pernyataan privasi kami.
            </div><!-- form-group -->
    
            <button class="btn btn-brand-02 btn-block">Buat Akun Baru</button>
        </form>
        <div class="divider-text">or</div>
        <div class="tx-13 mg-t-20 tx-center">Sudah memiliki akun? <a href="{{ url('login') }}">Sign In</a></div>
        </div>
    </div><!-- sign-wrapper -->
    <div class="media-body pd-y-30 pd-lg-x-50 pd-xl-x-60 align-items-center d-none d-lg-flex pos-relative">
        <div class="mx-lg-wd-500 mx-xl-wd-550">
        <img src="../../assets/img/img16.png" class="img-fluid" alt="">
        </div>
    </div><!-- media-body -->
</div><!-- media -->
@endsection
