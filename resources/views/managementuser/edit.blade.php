@include('partial.head')

@include('partial.chatbox')


    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            Management Users
                        </div>
                    </div>

                    {{-- Header right --}}
                    @include('partial.header_right')
                    {{-- Header right --}}

                </div>
            </nav>
        </div>
    </div>

    @include('partial.sidebar')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Form</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0)">Edit</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Data Users</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            
                            <form action="/managementuser/{{ $managementuser->id }}" method="post" class="mx-2">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Nama Lengkap</label>
                                    <div class="input-group">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                        <input type="text" name="name" class="form-control" id="validationCustomUsername" placeholder="Enter a Your Name.." required value="{{ $managementuser->name }}">
                                        <div class="invalid-feedback">
                                            Please Enter a Nama Lengkap
                                          </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                        <input type="text" name="email" class="form-control" id="validationCustomUsername" placeholder="Enter a Your email.." required value="{{ $managementuser->email }}">
                                        <div class="invalid-feedback">
                                            Please Enter a Email
                                          </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Role</label>
                                    <div class="input-group">
                                        <span class="input-group-text"> <i class="fa fa-pen"></i> </span>
                                        <select class="form-control" name="role">
                                            <option value="admin" {{ $managementuser->role == 'admin' ? 'selected' : '' }} >Admin</option>
                                            <option value="student" {{ $managementuser->role == 'student' ? 'selected' : '' }}>Student</option>
                                        </select>
                                    </div>
                                </div>

                                {{-- <div class="mb-3">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                      <label class="form-check-label" for="invalidCheck2">
                                        Check Me
                                      </label>
                                    </div>
                                </div> --}}
                                <button type="submit" class="btn me-2 btn-primary">Submit</button>
                                <button type="reset" class="btn btn-light">cencel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('partial.script')
