@extends('layouts.app')

@section('title', 'Manajemen Role')

@section('content')
<div class="container">
        <ol class="breadcrumb df-breadcrumbs mg-b-10">
            <li class="breadcrumb-item"><a href="{{ @url('/') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ @url('users') }}">Management User</a></li>
            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
        </ol>
    
        <hr class="mg-y-30">
    
        <h4 id="section1" class="mg-b-10">Menu @yield('title')</h4>
        <p class="mg-b-30">Set role data user untuk terkait kebutuhan role masing-masing user.</p>

        <div class="row">
                <div class="col-md-4">
                    @card
                        @slot('title')
                        Tambah Role
                        @endslot
                        
                        @if (session('error'))
                            @alert(['type' => 'danger'])
                                {!! session('error') !!}
                            @endalert
                        @endif

                        <form role="form" action="{{ url('roles') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Role</label>
                                <input type="text" 
                                name="name"
                                class="form-control {{ $errors->has('name') ? 'is-invalid':'' }}" id="name" required>
                            </div>
                        @slot('footer')
                            <div class="card-footer">
                                <button class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                        @endslot
                    @endcard
                </div>
                <div class="col-md-8">
                    @card
                        @slot('title')
                        List Role
                        @endslot
                        
                        @if (session('success'))
                            @alert(['type' => 'success'])
                                {!! session('success') !!}
                            @endalert
                        @elseif (session('warning'))
                            @alert(['type' => 'warning'])
                                {!! session('warning') !!}
                            @endalert
                        @endif
                        
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <td>No.</td>
                                        <td>Role</td>
                                        <td>Guard</td>
                                        <td>Created At</td>
                                        <td>Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @forelse ($role as $row)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->guard_name }}</td>
                                        <td>{{ date('d-m-Y', strtotime($row->created_at)) }}</td>
                                        <td>
                                            <form action="{{ url('roles', $row->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Tidak ada data</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="float-right">
                            {!! $role->links() !!}
                        </div>
                        @slot('footer')

                        @endslot
                    @endcard
                </div>
            </div>
</div>
@endsection