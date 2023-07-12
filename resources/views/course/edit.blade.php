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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Edit</a></li>
            </ol>
        </div>
        <!-- row -->
        <div class="row">
            
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Course</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="/course/{{ $course->id }}" method="post" class="mx-2">
                                @csrf
                                @method('PUT')

                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Nama Course</label>
                                    <div class="input-group">
                                        <span class="input-group-text"> <i class="fa fa-book"></i> </span>
                                        <input type="text" name="nama" class="form-control" id="validationCustomUsername" placeholder="Enter a Course Name.." required value="{{ $course->nama }}">
                                        <div class="invalid-feedback">
                                            Please Enter a 
                                          </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="text-label form-label" for="validationCustomUsername">Lecturer</label>
                                    <div class="input-group">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                        <select name="lecturer_id" id="lecturer_id" class="form-control">
                                            <option value="">--pilih--</option>
                                            @foreach ($lecturers as $lecturer)
                                                <option value="{{ $lecturer->id }}" {{ $lecturer->id ==$course->lecturer->id ? 'selected' : '' }}>{{ $lecturer->nama }}</option>
                                            @endforeach
                                        </select>
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
