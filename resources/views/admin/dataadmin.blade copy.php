@extends('layout.main')

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
                
            <h5>Striped Table</h5>
            <span class="d-block m-t-5">use class <code>table-striped</code> inside table element</span>
        </div>
        <div class="card-body table-border-style">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- [ stiped-table ] end -->


                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="Email">Email admin</label>
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