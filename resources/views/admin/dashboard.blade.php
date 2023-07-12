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
                                Dashboard
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
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-6 col-xxl-12">
						<div class="row">
							<div class="col-xl-12 col-xxl-6">
								<div class="card dlab-join-card h-auto">
									<div class="card-body">
										<div class="dlab-media d-flex justify-content-between">
											<div class="dlab-content">
												<h4>Join Now and Get Discount Voucher Up To 20%</h4>
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. </p>
											</div>	
											<div class="dlab-img">
												<img src="https://getskills.dexignzone.com/xhtml/images/egucation-girl.png" alt="">
											</div>	
											<div class="dlab-icon">
												<img src="https://getskills.dexignzone.com/xhtml/images/vector/calpng.png" alt="" class="cal-img">
												<img src="https://getskills.dexignzone.com/xhtml/images/vector/book.png" alt="" class="book-img">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12 bt-order">
								<div class="row">
									<div class="col-xl-4 col-sm-6">
										<div class="dlab-cource bg-secondary">
											<div class="d-flex align-items-center">
												<span class="course-icon">
													<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M19 0.25H4C3.00544 0.25 2.05161 0.645088 1.34835 1.34835C0.645088 2.05161 0.25 3.00544 0.25 4V19C0.25 19.9946 0.645088 20.9484 1.34835 21.6517C2.05161 22.3549 3.00544 22.75 4 22.75H19C19.9946 22.75 20.9484 22.3549 21.6517 21.6517C22.3549 20.9484 22.75 19.9946 22.75 19V4C22.75 3.00544 22.3549 2.05161 21.6517 1.34835C20.9484 0.645088 19.9946 0.25 19 0.25ZM16.875 8.5125L11.1625 16.0125C11.0461 16.1638 10.8965 16.2864 10.7253 16.3709C10.5542 16.4554 10.3659 16.4995 10.175 16.5C9.98513 16.501 9.79753 16.4588 9.62643 16.3765C9.45532 16.2942 9.30522 16.174 9.1875 16.025L6.1375 12.1375C6.03655 12.0078 5.96212 11.8595 5.91848 11.7011C5.87484 11.5426 5.86283 11.3772 5.88314 11.2141C5.90346 11.051 5.95569 10.8935 6.03687 10.7506C6.11804 10.6077 6.22657 10.4822 6.35625 10.3812C6.61815 10.1774 6.95032 10.0859 7.27968 10.1269C7.44276 10.1472 7.60025 10.1994 7.74314 10.2806C7.88604 10.3618 8.01155 10.4703 8.1125 10.6L10.15 13.2L14.875 6.95C14.9751 6.81868 15.1002 6.70836 15.2429 6.62536C15.3857 6.54235 15.5434 6.48828 15.7071 6.46622C15.8707 6.44417 16.0371 6.45457 16.1968 6.49682C16.3564 6.53908 16.5062 6.61237 16.6375 6.7125C16.7688 6.81263 16.8791 6.93765 16.9621 7.08042C17.0451 7.22318 17.0992 7.3809 17.1213 7.54456C17.1433 7.70823 17.1329 7.87463 17.0907 8.03427C17.0484 8.19392 16.9751 8.34368 16.875 8.475V8.5125Z" fill="var(--secondary)"/>
													</svg>
												</span>	
												<div class="ms-2">
													<h4 class="mb-0">1.500</h4>
													<span>All Courses</span>
												</div>
											</div>
											<img src="https://getskills.dexignzone.com/xhtml/images/vector/check.png" alt="">
										</div>
									</div>
									<div class="col-xl-4 col-sm-6">
										<div class="dlab-cource">
											<div class="d-flex align-items-center">
												<span class="course-icon">
													<svg width="23" height="23" viewBox="0 0 21 26" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M14.3201 4.65852H2.86175C2.35544 4.6591 1.87003 4.8592 1.51201 5.21494C1.15399 5.57068 0.952605 6.053 0.952026 6.55609V24.5829C0.952032 24.7573 1.00037 24.9282 1.09175 25.077C1.18312 25.2259 1.31399 25.3468 1.47 25.4266C1.626 25.5063 1.80111 25.5418 1.97609 25.5292C2.15108 25.5166 2.31918 25.4563 2.46195 25.355L8.5901 21.005L14.72 25.355C14.8628 25.4563 15.0309 25.5166 15.2058 25.5292C15.3808 25.5418 15.5559 25.5063 15.7119 25.4265C15.8679 25.3468 15.9988 25.2258 16.0901 25.077C16.1815 24.9282 16.2298 24.7572 16.2298 24.5829V6.55609C16.2292 6.053 16.0278 5.57068 15.6698 5.21494C15.3118 4.8592 14.8264 4.6591 14.3201 4.65852V4.65852Z" fill="#21262E"/>
														<path d="M18.1395 0.863403H5.72635C5.4731 0.863403 5.23023 0.963364 5.05116 1.14129C4.87209 1.31923 4.77148 1.56055 4.77148 1.81218C4.77148 2.06382 4.87209 2.30514 5.05116 2.48307C5.23023 2.661 5.4731 2.76096 5.72635 2.76096H18.1395V20.7878C18.1395 21.0394 18.2401 21.2808 18.4192 21.4587C18.5983 21.6366 18.8412 21.7366 19.0944 21.7366C19.3476 21.7366 19.5905 21.6366 19.7696 21.4587C19.9487 21.2808 20.0493 21.0394 20.0493 20.7878V2.76096C20.0487 2.25788 19.8473 1.77556 19.4893 1.41982C19.1313 1.06408 18.6459 0.863979 18.1395 0.863403V0.863403Z" fill="#21262E"/>
													</svg>
												</span>	
												<div class="ms-2">
													<h4 class="mb-0">1.112</h4>
													<span>Upcoming</span>
												</div>
											</div>
											<img src="https://getskills.dexignzone.com/xhtml/images/vector/bookmarks.png" class="bookmarks" alt="">
										</div>
									</div>
									<div class="col-xl-4 col-sm-12">
										<div class="dlab-cource bg-primary">
											<div class="d-flex align-items-center">
												<span class="course-icon">
													<svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M13.4999 7.13426C12.1639 7.13426 10.8617 7.55464 9.7778 8.33585C8.69393 9.11705 7.88334 10.2195 7.46084 11.487C7.03834 12.7545 7.02536 14.1228 7.42373 15.3981C7.82209 16.6733 8.61162 17.791 9.68047 18.5926V23.6852C9.68047 24.3605 9.94874 25.0082 10.4263 25.4857C10.9038 25.9632 11.5514 26.2315 12.2268 26.2315H14.7731C15.4484 26.2315 16.096 25.9632 16.5736 25.4857C17.0511 25.0082 17.3194 24.3605 17.3194 23.6852V18.5926C18.3882 17.791 19.1777 16.6733 19.5761 15.3981C19.9745 14.1228 19.9615 12.7545 19.539 11.487C19.1165 10.2195 18.3059 9.11705 17.222 8.33585C16.1382 7.55464 14.836 7.13426 13.4999 7.13426ZM13.4999 5.86111C13.8376 5.86111 14.1614 5.72698 14.4002 5.48822C14.6389 5.24946 14.7731 4.92563 14.7731 4.58797V2.04167C14.7731 1.70401 14.6389 1.38018 14.4002 1.14142C14.1614 0.902659 13.8376 0.768524 13.4999 0.768524C13.1622 0.768524 12.8384 0.902659 12.5997 1.14142C12.3609 1.38018 12.2268 1.70401 12.2268 2.04167V4.58797C12.2268 4.92563 12.3609 5.24946 12.5997 5.48822C12.8384 5.72698 13.1622 5.86111 13.4999 5.86111ZM24.9582 12.2269H22.4119C22.0743 12.2269 21.7505 12.361 21.5117 12.5998C21.2729 12.8385 21.1388 13.1623 21.1388 13.5C21.1388 13.8377 21.2729 14.1615 21.5117 14.4003C21.7505 14.639 22.0743 14.7731 22.4119 14.7731H24.9582C25.2959 14.7731 25.6197 14.639 25.8585 14.4003C26.0973 14.1615 26.2314 13.8377 26.2314 13.5C26.2314 13.1623 26.0973 12.8385 25.8585 12.5998C25.6197 12.361 25.2959 12.2269 24.9582 12.2269ZM4.58788 12.2269H2.04158C1.70392 12.2269 1.38009 12.361 1.14133 12.5998C0.902567 12.8385 0.768433 13.1623 0.768433 13.5C0.768433 13.8377 0.902567 14.1615 1.14133 14.4003C1.38009 14.639 1.70392 14.7731 2.04158 14.7731H4.58788C4.92554 14.7731 5.24937 14.639 5.48813 14.4003C5.72689 14.1615 5.86102 13.8377 5.86102 13.5C5.86102 13.1623 5.72689 12.8385 5.48813 12.5998C5.24937 12.361 4.92554 12.2269 4.58788 12.2269ZM7.97445 6.39584L6.14112 4.58797C5.89294 4.35329 5.5617 4.22682 5.22027 4.23637C4.87884 4.24592 4.55519 4.39071 4.32051 4.63889C4.08584 4.88707 3.95937 5.21831 3.96892 5.55974C3.97847 5.90117 4.12326 6.22482 4.37144 6.45949L6.20477 8.22917C6.3278 8.34797 6.47351 8.44076 6.63319 8.50201C6.79287 8.56325 6.96325 8.5917 7.13417 8.58565C7.30567 8.585 7.47527 8.5497 7.63279 8.48188C7.79031 8.41406 7.9325 8.31511 8.05084 8.19098C8.2781 7.94248 8.39765 7.61407 8.38334 7.27763C8.36902 6.94119 8.222 6.62413 7.97445 6.39584ZM22.6538 4.65162C22.4153 4.4145 22.0926 4.2814 21.7563 4.2814C21.4199 4.2814 21.0972 4.4145 20.8587 4.65162L19.0254 6.39584C18.7882 6.63438 18.6551 6.95706 18.6551 7.29341C18.6551 7.62975 18.7882 7.95244 19.0254 8.19098C19.1437 8.31511 19.2859 8.41406 19.4434 8.48188C19.6009 8.5497 19.7705 8.585 19.942 8.58565C20.2698 8.58435 20.5845 8.45666 20.8205 8.22917L22.6538 6.45949C22.7732 6.34114 22.8679 6.20033 22.9325 6.04518C22.9972 5.89004 23.0304 5.72363 23.0304 5.55556C23.0304 5.38749 22.9972 5.22108 22.9325 5.06594C22.8679 4.91079 22.7732 4.76998 22.6538 4.65162Z" fill="var(--primary)"/>
													</svg>
												</span>	
												<div class="ms-2">
													<h4 class="mb-0">903</h4>
													<span>Progress Courses</span>
												</div>
											</div>
											<img src="https://getskills.dexignzone.com/xhtml/images/vector/bulb.png" class="bulb" alt="">
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12 col-xxl-6">
								<div class="card score-active">
									<div class="card-header border-0 flex-wrap">
										<h4>Learning Activity</h4>
										<ul class="d-flex">
											<li>
												<svg class="me-2" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="1.5" y="1.5" width="9" height="9" rx="4.5" fill="white" stroke="var(--primary)" stroke-width="3"/>
												</svg>
												Last Month
											</li>
											<li>
												<svg class="me-2" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="1.5" y="1.5" width="9" height="9" rx="4.5" fill="white" stroke="var(--secondary)" stroke-width="3"/>
												</svg>
												Last Month
											</li>
										</ul>
									</div>
									<div class="card-body pb-1 custome-tooltip style-1 py-0 ">
										<div id="activity"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-xxl-12">
						<div class="row">
							<div class="col-xl-12">
								<div class="card score-active">
									<div class="card-header border-0 pb-2 flex-wrap">
										<h4>Score Activity</h4>
										<ul class="d-flex">
											<li>
												<svg class="me-2" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="1.5" y="1.5" width="9" height="9" rx="4.5" fill="white" stroke="var(--primary)" stroke-width="3"/>
												</svg>
												Last Month
											</li>
											<li>
												<svg class="me-2" width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect x="1.5" y="1.5" width="9" height="9" rx="4.5" fill="white" stroke="var(--secondary)" stroke-width="3"/>
												</svg>
												Last Month
											</li>
										</ul>
										<div class="d-flex align-items-center">
											<select class="default-select dashboard-select tp-btn-light btn-dark">
                                                <option data-display="This Month">This Month</option>
                                                <option value="2">This Weekly</option>
                                                 <option value="2">This Day</option>
                                              </select>
											<div class="dropdown">
												<a href="javascript:void(0);" class="btn-link btn sharp tp-btn-light btn-dark" data-bs-toggle="dropdown" aria-expanded="false">
													<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12.0012 9.86C11.6544 9.86 11.3109 9.92832 10.9905 10.061C10.67 10.1938 10.3789 10.3883 10.1336 10.6336C9.88835 10.8788 9.6938 11.17 9.56107 11.4905C9.42834 11.8109 9.36002 12.1544 9.36002 12.5012C9.36002 12.848 9.42834 13.1915 9.56107 13.5119C9.6938 13.8324 9.88835 14.1236 10.1336 14.3688C10.3789 14.6141 10.67 14.8086 10.9905 14.9413C11.3109 15.0741 11.6544 15.1424 12.0012 15.1424C12.7017 15.1422 13.3734 14.8638 13.8687 14.3684C14.3639 13.873 14.642 13.2011 14.6418 12.5006C14.6417 11.8001 14.3632 11.1284 13.8678 10.6332C13.3724 10.138 12.7005 9.85984 12 9.86H12.0012ZM3.60122 9.86C3.25437 9.86 2.91092 9.92832 2.59048 10.061C2.27003 10.1938 1.97887 10.3883 1.73361 10.6336C1.48835 10.8788 1.2938 11.17 1.16107 11.4905C1.02834 11.8109 0.960022 12.1544 0.960022 12.5012C0.960022 12.848 1.02834 13.1915 1.16107 13.5119C1.2938 13.8324 1.48835 14.1236 1.73361 14.3688C1.97887 14.6141 2.27003 14.8086 2.59048 14.9413C2.91092 15.0741 3.25437 15.1424 3.60122 15.1424C4.30171 15.1422 4.97345 14.8638 5.46866 14.3684C5.96387 13.873 6.24198 13.2011 6.24182 12.5006C6.24166 11.8001 5.96324 11.1284 5.46781 10.6332C4.97237 10.138 4.30051 9.85984 3.60002 9.86H3.60122ZM20.4012 9.86C20.0544 9.86 19.7109 9.92832 19.3905 10.061C19.07 10.1938 18.7789 10.3883 18.5336 10.6336C18.2884 10.8788 18.0938 11.17 17.9611 11.4905C17.8283 11.8109 17.76 12.1544 17.76 12.5012C17.76 12.848 17.8283 13.1915 17.9611 13.5119C18.0938 13.8324 18.2884 14.1236 18.5336 14.3688C18.7789 14.6141 19.07 14.8086 19.3905 14.9413C19.7109 15.0741 20.0544 15.1424 20.4012 15.1424C21.1017 15.1422 21.7734 14.8638 22.2687 14.3684C22.7639 13.873 23.042 13.2011 23.0418 12.5006C23.0417 11.8001 22.7632 11.1284 22.2678 10.6332C21.7724 10.138 21.1005 9.85984 20.4 9.86H20.4012Z" fill="#A098AE"/>
													</svg>
												</a>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item" href="javascript:void(0);">Delete</a>
													<a class="dropdown-item" href="javascript:void(0);">Edit</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body pb-1 custome-tooltip pt-0">
										<div id="chartBar" class="chartBar"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-6">
								<div class="card">
									<div class="card-body pt-3">
										<div id="redial"></div>
										<div class="redial-content">
											<h4>My Progress</h4>
											<p>Lorem ipsum dolor sit amet, consectetur</p>
											<a href="course-details-2.html" class="btn btn-primary">More Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-8 col-lg-6">
								<div class="card">
									<div class="card-body card-calendar">
										<input type='text' class="form-control d-none" id='datetimepicker' />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
            </div>
        </div>
       


        @include('partial.script')
    
