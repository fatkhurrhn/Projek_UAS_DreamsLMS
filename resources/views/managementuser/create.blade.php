@extends('main')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">student</h1>

    <div class="row">
        <div class="col-sm-12">
            <div class="card shadow">
                <div class="card-header py-3">
                    <a href="/managementuser" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-arrow-left"></i>
                        </span>
                        <span class="text">Back</span>
                    </a>
                </div>
                <div class="card-body">

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Ada kesalahan input data! <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }} </li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="/managementuser" method="post" class="mx-2">
                    @csrf
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama User</label>
                        <div class="col-sm-10">
                            <input name="nama" type="text" class="form-control" placeholder="Nama student">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" type="email" class="form-control" placeholder="Email Address">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="role" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                        <select class="form-control" name="role">
                            <option value="dosen">Dosen</option>
                            <option value="student">Student</option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">password</label>
                        <div class="col-sm-10">
                            <input name="password" type="text" class="form-control" placeholder="password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password_confirmation" class="col-sm-2 col-form-label">password_confirmation</label>
                        <div class="col-sm-10">
                            <input name="password_confirmation" type="text" class="form-control" placeholder="password_confirmation">
                        </div>
                    </div>
    
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="reset" class="btn btn-md btn-danger"><i class="fa fa-times"></i> Reset</button>
                            <button type="submit" class="btn btn-md btn-success"><i class="fa fa-plus"></i> Tambah</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    
    
    
    
    </div>
    
@endsection


