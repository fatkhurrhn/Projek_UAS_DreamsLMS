

    <!--*******************
        Preloader start
    ********************-->
    @include('partial.head')
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->

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
       

        <!--**********************************
            Sidebar start
        ***********************************-->
       @include('partial.sidebar')
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
						


                    

					
					<div class="col-xl-12">
						<div class="card students-list">
							<div class="card-header border-0 flex-wrap pb-0">

								

								<h3>All Users</h3>
								<div class="input-group search-area w-auto">
									<span class="input-group-text"><a href="javascript:void(0)"><svg width="24" height="24" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M27.414 24.586L22.337 19.509C23.386 17.928 24 16.035 24 14C24 8.486 19.514 4 14 4C8.486 4 4 8.486 4 14C4 19.514 8.486 24 14 24C16.035 24 17.928 23.386 19.509 22.337L24.586 27.414C25.366 28.195 26.634 28.195 27.414 27.414C28.195 26.633 28.195 25.367 27.414 24.586ZM7 14C7 10.14 10.14 7 14 7C17.86 7 21 10.14 21 14C21 17.86 17.86 21 14 21C10.14 21 7 17.86 7 14Z" fill="var(--primary)"></path>
										</svg>
										</a></span>
									<input type="text" class="form-control" placeholder="Search here...">
								</div>
							</div>
							<div class="card-body py-0">
								<div class="table-responsive">
									<table class="table display mb-4 dataTablesCard order-table card-table text-black application" id="application-tbl1">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
										<tbody>
                                            @php $iteration = 1 @endphp
                                            @foreach ($users as $item)
                                           
                                            <tr>
                                                <td>{{ $iteration++ }}</td>
                                                <td>{{ $item['name'] }}</td>
                                                <td>{{ $item['email'] }}</td>
                                                <td>{{ $item['role'] }}</td>
                                                <td>
                                                    @if(Auth::user()->role == 'admin')
													<div class="d-flex">
														<a href="/managementuser/edit/{{  $item['id']  }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                                        <form action="/managementuser" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="hidden" value="{{ $item['id'] }}" name="id">
														<button class="btn btn-danger shadow btn-xs sharp" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i></button>
                                                        </form>
													</div>
                                                    @else 
                                                    - 
                                                    @endif 
												</td>
                                                @endforeach
                                        </tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
        <!--**********************************
            Content body end
        ***********************************-->
		
		
		@include('partial.script')