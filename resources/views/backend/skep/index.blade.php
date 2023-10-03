@extends('backend.layout.master')
@section('title','skep')
@section('content')

    <!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank"
        href="https://datatables.net">official DataTables documentation</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ (session('success')) }}
            </div>
        @endif
        @if(session('errors'))
            <div class="alert alert-danger" role="alert">
                {{ (session('errors'))->first() }}
            </div>
        @endif
        <a href="/skep/form_insert" class="btn btn-primary mb-3">Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>SK Tentang</th>
                        <th>Tanggal</th>
                        <th>File</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No</th>
                        <th>SK Tentang</th>
                        <th>Tanggal</th>
                        <th>File</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach($skep as $list)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $list->title }}</td>
                            <td>{{ $list->tanggal }}</td>
                            <td>
                                <a href="http://localhost:8000{{ Storage::url($list->file) }}">{{ $list->file }}</a>
                            </td>
                            <td>{{ $list->created_at }}</td>
                            <td>{{ $list->updated_at }}</td>
                            <td>
                                <a href="#" class="btn btn-success">Detil</a>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="/surat_keluar/delete/{{ $list->id_suratkeluar }}" class="btn btn-danger" onclick="return confirm('Yakin?')">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

<!-- Page level custom scripts -->
<script src="{{ asset('sbAdmin') }}/js/demo/datatables-demo.js"></script>

@endsection
