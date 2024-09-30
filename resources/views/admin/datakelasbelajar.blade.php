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
                <h5>Kontrol Data Guru</h5>
                <div>
                    <p type="button" class="btn btn-primary" style="text-align: center" data-toggle="modal"
                        data-target="#exampleModal">
                        Add Guru
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
                            {{-- @php $no = 1; @endphp
                            @foreach($guru as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->nama_guru }}</td>
                                <td> {{ $data->mapel ? $data->mapel->nama_mapel : 'Tidak ada mata pelajaran' }}</td>
                                <!-- Sesuaikan dengan kolom di tabel guru -->
                                <td>aksi</td>
                            </tr>
                            @endforeach --}}

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
                <h5 class="modal-title" id="exampleModalLabel">Add Guru</h5>
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
                <form id="postForm" method="POST" action="{{ url('admin/data-guru') }}">
                    @csrf
                    <div class="form-group">
                        <label for="matapelajaran">Jadwal Hari</label>
                        <select class="form-control" id="matapelajaran" name="matapelajaran" required>
                            <option value="">===Pilih Hari===</option>
                            <option value="1">Senin</option>
                            <option value="2">Selasa</option>
                            <option value="3">Rabu</option>
                            <option value="4">Kamis</option>
                            <option value="5">Jumat</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="matapelajaran">Kelas Ngajar</label>
                        <select class="form-control" id="matapelajaran" name="matapelajaran" required>
                            <option value="">Pilih Guru</option>
                            @foreach($dbku['kelas'] as $data)
                            <tr>
                                <option value="{{$data->id_kelas}}">{{$data->nama_kelas}}</option>
                            </tr>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="matapelajaran">Guru dan Mapel</label>
                        <select class="form-control" id="matapelajaran" name="matapelajaran" required>
                            <option value="">Pilih Guru</option>
                            @foreach($dbku['guru'] as $data)
                            <tr>
                                <option value="{{$data->id_guru}}">{{$data->nama_guru}}-{{$data->mapel->nama_mapel}}</option>
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