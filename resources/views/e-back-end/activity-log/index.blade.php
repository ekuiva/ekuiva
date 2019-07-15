@extends('layouts.app') @section('title', 'Activity Log') @section('content')

<div class="container">
    <ol class="breadcrumb df-breadcrumbs mg-b-10">
        <li class="breadcrumb-item"><a href="{{ @url('/') }}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Management @yield('title')</li>
    </ol>

    <hr class="mg-y-20">
    <div class="d-sm-flex align-items-center justify-content-between ">
        <div>
            <h4 id="section1" class="mg-b-10">Management @yield('title')</h4>
            <p class="mg-b-30">Menu Management @yield('title') berfungsi untuk melakukan melihat aktivitas log user.</p>
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
        <div class="table-responsive">
            <table id="data-table" class="table">
                <thead>
                    <tr>
                        <th class="wd-10p">Diakses</th>
                        <th class="wd-20p">User</th>
                        <th class="wd-25p">Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($logs as $key => $row)
                    <tr>
                        <td>
                            @isset($row->created_at)
                            {{ $row->created_at }}
                            @endisset
                        </td>
                        <td>
                            @isset($row->User->name)
                            {{ $row->User->name }}
                            @endisset
                        </td>
                        <td>
                            @isset($row->description)
                            {{ $row->description }}
                            @endisset
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
            order: [[ 0, "desc" ]],
            language: {
                searchPlaceholder: 'Pencarian...',
                sSearch: '',
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