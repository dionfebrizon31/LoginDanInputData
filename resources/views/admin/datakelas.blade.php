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
                <h5>Kontrol Data Kelas</h5>
                <div>
                    <p type="button" class="btn btn-primary" style="text-align: center" data-toggle="modal"
                        data-target="#addmapel">
                        Add Mata Pelajaran
                    </p>
                </div>

            </div>

            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>nama kelas</th>
                                <th>Muatan kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($kelas as $data)
                                {{-- aray -> namakelaspublicnya model_countdi panggil --}}
                                @if($data->countkelas_count > 0)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $data->nama_kelas }}</td>
                                        <td>{{ $data->countkelas_count }} / {{ $data->muatan_kelas }}</td>
                                        <td>edit | hapus</td>
                                    </tr>
                                @else
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama_kelas }}</td>
                                    <td>{{ $data->countkelas_count }} / {{ $data->muatan_kelas }}</td>
                                    <td>edit | hapus</td>
                                </tr>
                                @endif
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
<div class="modal fade" id="addmapel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addmapel">Add Kelas</h5>
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
                <form id="postForm" method="POST" action="{{ url('admin/data-kelas') }}">
                    @csrf
                    <div class="form-group">
                        <label for="title">Nama Kelas</label>
                        <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Muatan kelas(number)</label>
                        <input type="number" class="form-control" id="muatankelas" name="muatankelas" required>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection