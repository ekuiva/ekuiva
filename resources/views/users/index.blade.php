@extends('layouts.app') @section('title', 'User') @section('content')

<div class="container">
    <ol class="breadcrumb df-breadcrumbs mg-b-10">
        <li class="breadcrumb-item"><a href="{{ @url('/') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Management @yield('title')</li>
    </ol>

    <hr class="mg-y-20">
    <div class="d-sm-flex align-items-center justify-content-between ">
        <div>
            <h4 id="section1" class="mg-b-10">Management @yield('title')</h4>
            <p class="mg-b-30">Menu Management @yield('title') berfungsi untuk melakukan penambahan, edit dan menghapus data @yield('title') sekaligus memanagement data @yield('title').</p>
        </div>

        <div>
            <a href="{{ url('/users/create') }}" class="btn btn-primary btn-sm"><i data-feather="plus"></i> Tambah Data</a>
        </div>
    </div>

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

    <div data-label="@yield('title')" class="df-example mt-3">
        <div class="demo-table table-responsive">
            <table id="data-table" class="table ">
                <thead>
                    <tr>
                        <th class="wd-20p">Nama</th>
                        <th class="wd-25p">Email</th>
                        <th class="wd-20p">Role</th>
                        <th class="wd-15p">Status</th>
                        <th class="wd-20p">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $row)
                    <tr>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>
                            @foreach ($row->getRoleNames() as $role)
                            <label for="" class="badge badge-light">{{ $role }}</label>
                            @endforeach
                        </td>
                        <td>
                            @if ($row->status)
                            <label class="badge badge-success">Aktif</label>
                            @else
                            <label for="" class="badge badge-default">Suspend</label>
                            @endif
                        </td>
                        <td>
                            <form action="{{ url('users', Crypt::encryptString($row->id)) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <a href="{{ url('users/roles', Crypt::encryptString($row->id)) }}" class="btn btn-xs btn-light btn-icon"><i data-feather="lock"></i></a>
                                <a href="{{ url('users/edit', Crypt::encryptString($row->id)) }}" class="btn btn-xs btn-light btn-icon"><i data-feather="edit"></i></a>
                                <button class="btn btn-xs btn-light btn-icon"><i data-feather="trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">Tidak ada data</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- container -->

@endsection @push('js')
<script>
    $(function() {
        'use strict'

        $('#data-table').DataTable({
            order: [[ 0, "asc" ]],
            language: {
                searchPlaceholder: 'Pencarian...',
                lengthMenu: '_MENU_ items/page',
            }
        });

        // Select2
        $('.dataTables_length select').select2({
            minimumResultsForSearch: Infinity
        });

    });
</script>
@endpush