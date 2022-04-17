@extends('layouts.app')

@section('title')
Edit Pegawai|
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
                        <h2 class="main-content-title tx-24 mg-b-5">Edit Pegawai</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/home')}}">Welcome</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Pegawai</li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Pegawai</li>
                        </ol>
                    </div>

                </div>
                <div class="col-12 col-md-6">
                    <div class="card custom-card overflow-hidden">
                        <div class="card-header">

                            <form action="{{url('update-pegawai',$peg->id)}}" id="pegawai_form" class="form_pegawai" method="POST">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nama Pegawai" value="{{ $peg->name}}">
                                  </div>

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Pegawai" value="{{ $peg->email}}">
                                </div>

                                 <div class="form-group">
                                    <label for="no_telp">No. Telp</label>
                                    <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="No Telp Pegawai" value="{{ $peg->no_telp}}">
                                </div>

                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea type="text" class="form-control" id="alamat" name="alamat">{{ $peg->alamat}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <select name="jabatan_id" id="jabatan_id" class="form-select">
                                        <option disabled value>Pilih Jabatan</option>
                                        @foreach ($jab as $item)
                                            <option value="{{ $item->id }}">{{ $item->type_j }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group text-right">
                                    <button type="submit" class="btn-success btn">Ubah Data</button>
                                </div>

                            </form>

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

</script>
@endsection
