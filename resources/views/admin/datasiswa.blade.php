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
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5>Kontrol Data Siswa</h5>
                <div>
                    <p type="button" class="btn btn-primary" style="text-align: center" data-toggle="modal"
                        data-target="#exampleModal">
                        Add Siswa
                    </p>
                </div>
            </div>


            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>nama guru</th>
                                <th>mata pengampu</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($siswa as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_siswa }}</td>
                                {{--nama_array->publik_function_model->variabel relasi--}}
                                <td>{{ $data->kelasku->nama_kelas }}</td>
                                <td>aksi</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->
{{-- Display modal area --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @if(session('success'))
                <script>
                    Swal.fire({
                        title: 'Success!',
                        text: '{{ session("success") }}',
                        icon: 'success',
                        confirmButtonText: 'Ok'
                    });
                </script>
            @endif
            <div class="modal-body">
                <form id="postForm" method="POST" action="{{ url('admin/data-siswa') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nama_siswa">Nama Siswa</label>
                        <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required>
                    </div>
                    <div class="form-group">
                        <label for="kelassiswa">Kelas Siswa</label>
                        <select class="form-control" id="kelassiswa" name="kelassiswa" required>
                            <option value="">==Pilih Kelas Siswa==</option>
                            @foreach($kelas as $data)
                            <tr>
                                <option value="{{$data->id_kelas}}">{{$data->nama_kelas}}</option>
                            </tr>
                            @endforeach
                        </select>
                    </div>                 
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection