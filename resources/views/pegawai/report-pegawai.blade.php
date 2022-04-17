@extends('layouts.app')

@section('title')
Report Pegawai|
@endsection

@section('css')

@endsection

@section('content')

<div class="main-content side-content pt-0">
    <div class="container-fluid">
        <div class="inner-body">


            <div class="row row-sm">
                <div class="page-header breadcumbsz">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Report</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}">Welcome</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Report</li>
                        </ol>
                    </div>
                    <div class="d-flex">
                        <div class="justify-content-center">
                            <a href="#" target="_blank" class="btn btn-success" id="cetak_pegawai">Download Data <i class="fas fa-file-pdf"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-header">

                            <div class="wrap_report">

                                <div class="card-header">
                                    <table id="employe" class="display table_karyawan" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>No Telp</th>
                                                <th>Alamat</th>
                                                <th>Jabatan</th>
                                                <th>Sallary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dtPegawai as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>{{ $item->no_telp }}</td>
                                                    <td>{{ $item->alamat }}</td>
                                                    <td>{{ $item->jabatan->type_j }}</td>
                                                    <td>{{ $item->jabatan->sallary }}</td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>

                                </div>


                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')
<script type="text/javascript">

    $("#cetak_pegawai").click(function(){
        window.print();
    });

</script>
@endsection
