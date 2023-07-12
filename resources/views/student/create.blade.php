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
                            Data Students
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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Create</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Data Students</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="/student" method="post" class="form-valide-with-icon needs-validation">
                                    @csrf

                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Nama Lengkap</label>
                                    <div class="input-group">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                        <input type="text" name="nama" class="form-control" id="validationCustomUsername" placeholder="Enter a Your Name.." required>
                                        <div class="invalid-feedback">
                                            Please Enter a Nama Lengkap
                                          </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                        <input type="text" name="email" class="form-control" id="validationCustomUsername" placeholder="Enter a Your email.." required>
                                        <div class="invalid-feedback">
                                            Please Enter a Email
                                          </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Nomor Telepon</label>
                                    <div class="input-group">
                                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                                        <input type="text" name="phone_number" class="form-control" id="validationCustomUsername" placeholder="Enter a Your Number Telp.." required>
                                        <div class="invalid-feedback">
                                            Please Enter a Nomor Telepon
                                          </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                      <label class="form-check-label" for="invalidCheck2">
                                        Check Me
                                      </label>
                                    </div>
                                </div>
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
