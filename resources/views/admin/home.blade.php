@extends('layout.mainadmin')

@section('breadcrumbs')
<!-- [ breadcrumb ] start -->
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Form Elements</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                    <li class="breadcrumb-item"><a href="#!">Form Elements</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- [ breadcrumb ] end -->

@endsection

@section('content')

<!-- [ Main Content ] start -->
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Selamat Datang Di Sistem informasi Manajemen pegawai </h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="Email">Email address</label>
                                <input type="email" class="form-control" id="Email"
                                    aria-describedby="emailHelp" value="123">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="Text">Text</label>
                                <input type="text" class="form-control" id="Text" placeholder="123">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="password">password</label>
                                <input type="password" class="form-control" id="password" placeholder="">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- [ Main Content ] end -->

@endsection