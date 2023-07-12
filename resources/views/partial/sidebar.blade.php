<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="  " href="/dashboard" aria-expanded="false">
                    <i class="bi bi-grid"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="bi bi-book"></i>

                    <span class="nav-text">Courses</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/course">Courses</a></li>
                    @if(Auth::user()->role == 'admin')
                    <li><a href="/course/create">Add Course</a></li>
                    @endif
                </ul>
            </li>

            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="bi bi-people"></i>

                    <span class="nav-text">Lecturer</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/lecturer">Lecturer</a></li>
                    @if(Auth::user()->role == 'admin')
                    <li><a href="/lecturer/create">Add Lecturer</a></li>
                    @endif
                </ul>
            </li>

            <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
                <i class="bi bi-person-vcard"></i>

                    <span class="nav-text">Students</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="/student">Students</a></li>
                    @if(Auth::user()->role == 'admin')
                    <li><a href="/student/create">Add Students</a></li>
                    @endif
                    
                </ul>
            </li>

            @if(Auth::user()->role == 'admin')
            <li><a href="/managementuser" aria-expanded="false">
                <i class="bi bi-person-gear"></i>
                    <span class="nav-text">Management User</span>
                </a>
            </li>
            @endif

        

            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" aria-expanded="false">
                <svg  xmlns="http://www.w3.org/2000/svg" class="bi" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>

                    <span class="nav-text">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
               </li>
            
        </ul>
        <br><br><br><br><br>
        <div class="plus-box " style="position:">
            <div class="d-flex align-items-center">
                <h5>Upgrade your Skills to Pro</h5>
                <img src="https://getskills.dexignzone.com/xhtml/images/medal.png" alt="">
            </div>
            <p>Upgrade to premium to get premium course</p>
            <a href="#" class="btn btn-primary btn-sm">Course</a>
        </div>
        <div class="copyright">
            <p><strong>Dreams LMS</strong> © 2023 All Rights Reserved</p>
        </div>
    </div>
</div>