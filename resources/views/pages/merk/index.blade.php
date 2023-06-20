@extends('template.index')

@section('content')
<div class="container-fluid px-4" style="background: linear-gradient(to bottom,  #a8c0ff, #3f2b96);">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Merk</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Data Merk</li>
            </ol>
            <a href="/merk/create" class="btn btn-success">
                <i class="fas fa-plus"></i> Tambah Data
              </a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Merk</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($merkData as $merk)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$merk->merk}}</td>
                                    <td>
                                        <a href="/merk/edit/{{ $merk->id}}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                                        <a href="/merk/delete/{{ $merk->id}}" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus</a>
                                          
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection