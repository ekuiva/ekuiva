@extends('layouts.app') @section('title', 'Set Role') @section('content')
<div class="container">
    <ol class="breadcrumb df-breadcrumbs mg-b-10">
        <li class="breadcrumb-item"><a href="{{ @url('/') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ @url('users') }}">Management User</a></li>
        <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
    </ol>

    <hr class="mg-y-30">

    <h4 id="section1" class="mg-b-10">Menu @yield('title')</h4>
    <p class="mg-b-30">Set role data user untuk terkait kebutuhan role masing-masing user.</p>

    <form action="{{ url('users/roles', Crypt::encryptString($user->id)) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT"> @if (session('success')) @alert(['type' => 'success']) {{ session('success') }} @endalert @endif

        <div class="table-responsive">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>Nama</th>
                        <td>:</td>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>:</td>
                        <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                    </tr>
                    <tr>
                        <th>Role</th>
                        <td>:</td>
                        <td>
                            @foreach ($roles as $row)
                            <input type="radio" name="role" {{ $user->hasRole($row) ? 'checked':'' }} value="{{ $row }}"> {{ $row }}
                            <br> @endforeach
                        </td>
                    </tr>
                    </thead>
            </table>
        </div>
        <a href="{{ url('users') }}" class="btn btn-outline-dark btn-sm"><i data-feather="arrow-left"></i> Kembali</a>
        <button type="submit" class="btn btn-primary btn-sm float-right">
            <i data-feather="lock"></i> Set Role
        </button>

    </form>
</div>
@endsection