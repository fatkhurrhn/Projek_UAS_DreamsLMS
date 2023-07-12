

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
					<div class="col-xl-3 col-sm-6">
						<div class="card bg-secondary">
							<div class="card-body">
								<div class="student-box d-flex justify-content-between align-items-center flex-wrap">
									<div>
										<span class="student-icon">
											<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M14.1665 19.1666C17.8331 19.1666 20.8331 16.1666 20.8331 12.4999C20.8331 8.83325 17.8331 5.83325 14.1665 5.83325C10.4998 5.83325 7.49981 8.83325 7.49981 12.4999C7.49981 16.1666 10.4998 19.1666 14.1665 19.1666ZM21.6665 17.6666C24.4998 19.9999 28.6665 19.4999 30.9998 16.6666C33.3331 13.8333 32.8331 9.66659 29.9998 7.33325C28.8331 6.33325 27.3331 5.83325 25.8331 5.83325C24.3331 5.83325 22.8331 6.33325 21.6665 7.33325C24.4998 9.66659 24.9998 13.6666 22.6665 16.6666C22.4998 16.9999 21.9998 17.3333 21.6665 17.6666ZM38.1665 32.3333C37.1665 26.1666 31.9998 21.6666 25.8331 21.6666C24.3331 21.6666 22.9998 21.8333 21.6665 22.3333C25.9998 23.8333 29.1665 27.6666 29.8331 32.1666C29.9998 32.9999 29.3331 33.9999 28.3331 33.9999H28.1665H36.4998C37.4998 33.9999 38.1665 33.3333 38.1665 32.3333C38.1665 32.4999 38.1665 32.3333 38.1665 32.3333ZM14.1665 21.6666C7.99981 21.6666 2.66647 26.1666 1.83314 32.3333C1.66647 33.1666 2.33314 34.1666 3.33314 34.1666H3.49981H24.8331C25.8331 34.1666 26.4998 33.4999 26.4998 32.4999V32.3333C25.6665 26.1666 20.3331 21.6666 14.1665 21.6666Z" fill="var(--secondary)"/>
											</svg>
										</span>
										<h4>43.322</h4>
										<span class="pb-3 d-block">Total Students</span>
									</div>
									<div id="NewCustomers"></div>
								</div>
							</div>
						</div>
					</div>	
					<div class="col-xl-3 col-sm-6">
						<div class="card overflow-hidden">
							<div class="card-header border-0 pb-0">
								<h4>New Users</h4>
							</div>
							<div class="card-body pt-0">
								<div class="student-box d-flex justify-content-between align-items-center flex-wrap">
									<div>
										<h4 class="fw-normal mb-3">+12.890</h4>
										<span class="text-secondary">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M23.25 12C23.25 5.775 18.225 0.75 12 0.75C5.775 0.749999 0.75 5.775 0.75 12C0.749999 18.225 5.775 23.25 12 23.25C18.225 23.25 23.25 18.225 23.25 12ZM11.25 16.575L11.25 9.675L9.3 11.4C8.85 11.775 8.25 11.7 7.875 11.325C7.725 11.1 7.65 10.875 7.65 10.65C7.65 10.35 7.8 10.05 8.025 9.9L11.625 6.75C11.7 6.675 11.775 6.675 11.85 6.6C11.925 6.6 11.925 6.6 12 6.525C12.075 6.525 12.075 6.525 12.15 6.525L12.225 6.525C12.3 6.525 12.3 6.525 12.375 6.525L12.45 6.525C12.525 6.525 12.525 6.525 12.6 6.6C12.6 6.6 12.675 6.6 12.675 6.675L12.75 6.75C12.75 6.75 12.75 6.75 12.825 6.825L15.975 10.05C16.35 10.425 16.35 11.1 15.975 11.475C15.6 11.85 14.925 11.85 14.55 11.475L13.125 9.975L13.125 16.65C13.125 17.175 12.675 17.7 12.075 17.7C11.7 17.55 11.25 17.1 11.25 16.575Z" fill="var(--secondary)"/>
											</svg>
										+15%</span>
									</div>
									<div id="NewCustomers2"></div>
								</div>
							</div>
						</div>
					</div>	
					<div class="col-xl-6 col-sm-12">
						<div class="card">
							<div class="card-header border-0 pb-2 flex-wrap">
								<h4>Students Activity</h4>
								<div class="d-flex align-items-center">
									<ul class="d-flex">
										<li class="me-3">
											<svg class="me-2" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="1.5" y="1.5" width="9" height="9" rx="4.5" fill="white" stroke="#FEC64F" stroke-width="3"></rect>
											</svg>
											Last Month
										</li>
										<li class="ms-3">
											<svg class="me-2" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect x="1.5" y="1.5" width="9" height="9" rx="4.5" fill="white" stroke="#4CBC9A" stroke-width="3"></rect>
											</svg>
											Last Month
										</li>
									</ul>
									<div class="d-flex align-items-center ms-5">
										<div class="dropdown">
											<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-dark" data-bs-toggle="dropdown" aria-expanded="false">
												<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M12.0012 9.86C11.6544 9.86 11.3109 9.92832 10.9905 10.061C10.67 10.1938 10.3789 10.3883 10.1336 10.6336C9.88835 10.8788 9.6938 11.17 9.56107 11.4905C9.42834 11.8109 9.36002 12.1544 9.36002 12.5012C9.36002 12.848 9.42834 13.1915 9.56107 13.5119C9.6938 13.8324 9.88835 14.1236 10.1336 14.3688C10.3789 14.6141 10.67 14.8086 10.9905 14.9413C11.3109 15.0741 11.6544 15.1424 12.0012 15.1424C12.7017 15.1422 13.3734 14.8638 13.8687 14.3684C14.3639 13.873 14.642 13.2011 14.6418 12.5006C14.6417 11.8001 14.3632 11.1284 13.8678 10.6332C13.3724 10.138 12.7005 9.85984 12 9.86H12.0012ZM3.60122 9.86C3.25437 9.86 2.91092 9.92832 2.59048 10.061C2.27003 10.1938 1.97887 10.3883 1.73361 10.6336C1.48835 10.8788 1.2938 11.17 1.16107 11.4905C1.02834 11.8109 0.960022 12.1544 0.960022 12.5012C0.960022 12.848 1.02834 13.1915 1.16107 13.5119C1.2938 13.8324 1.48835 14.1236 1.73361 14.3688C1.97887 14.6141 2.27003 14.8086 2.59048 14.9413C2.91092 15.0741 3.25437 15.1424 3.60122 15.1424C4.30171 15.1422 4.97345 14.8638 5.46866 14.3684C5.96387 13.873 6.24198 13.2011 6.24182 12.5006C6.24166 11.8001 5.96324 11.1284 5.46781 10.6332C4.97237 10.138 4.30051 9.85984 3.60002 9.86H3.60122ZM20.4012 9.86C20.0544 9.86 19.7109 9.92832 19.3905 10.061C19.07 10.1938 18.7789 10.3883 18.5336 10.6336C18.2884 10.8788 18.0938 11.17 17.9611 11.4905C17.8283 11.8109 17.76 12.1544 17.76 12.5012C17.76 12.848 17.8283 13.1915 17.9611 13.5119C18.0938 13.8324 18.2884 14.1236 18.5336 14.3688C18.7789 14.6141 19.07 14.8086 19.3905 14.9413C19.7109 15.0741 20.0544 15.1424 20.4012 15.1424C21.1017 15.1422 21.7734 14.8638 22.2687 14.3684C22.7639 13.873 23.042 13.2011 23.0418 12.5006C23.0417 11.8001 22.7632 11.1284 22.2678 10.6332C21.7724 10.138 21.1005 9.85984 20.4 9.86H20.4012Z" fill="#A098AE"/>
												</svg>
											</a>
											<div class="dropdown-menu dropdown-menu-start">
												<a class="dropdown-item" href="javascript:void(0);">Delete</a>
												<a class="dropdown-item" href="javascript:void(0);">Edit</a>
											</div>
										</div>
									</div>
								</div>	
							</div>
							<div class="card-body pb-1 custome-tooltip pt-0 ps-0">
								<div id="studentsActivity"></div>
							</div>
						</div>
					</div>	


                    

					
					<div class="col-xl-12">
						<div class="card students-list">
							<div class="card-header border-0 flex-wrap pb-0">

								

								<a href="/student/create" class="btn btn-primary"><i class="fas fa-plus"></i> Add Student</a>
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
                                                <th>Phone Number</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
										<tbody>
                                            @php $iteration = 1 @endphp
                                            @foreach ($students as $item)
                                           
                                            <tr>
                                                <td>{{ $iteration++ }}</td>
                                                <td>{{ $item['nama'] }}</td>
                                                <td>{{ $item['email'] }}</td>
                                                <td>{{ $item['phone_number'] }}</td>
                                                <td>
                                                    @if(Auth::user()->role == 'admin')
													<div class="d-flex">
														<a href="/student/edit/{{  $item['id']  }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                                        <form action="/student" method="POST" class="d-inline">
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