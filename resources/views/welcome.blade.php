@extends('layouts.app')

@section('title')
Welcome to MRI Sallary e-Report |
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
                        <h2 class="main-content-title tx-24 mg-b-5">Dashboard</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Welcome</a></li>
                        </ol>
                    </div>

                </div>
                <div class="col-12 col-md-8">
                    <div class="card custom-card overflow-hidden">
                        <div class="wrap_welcome_t">
                            <h1>Welcome to MRI E-Sallary Report System</h1>
                        </div>
                        <img class="bg-welcome" src="{{asset('images/bg/bg-welcome.jpg')}}" alt=""/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('sweetalert::alert')

@endsection
@section('js')


<script type="text/javascript">


</script>
@endsection
