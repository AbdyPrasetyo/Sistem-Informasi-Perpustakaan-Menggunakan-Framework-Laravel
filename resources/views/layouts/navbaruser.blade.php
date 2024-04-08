 <!-- Navbar -->

 <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
     id="layout-navbar">
     <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
         <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
             <i class="bx bx-menu bx-sm"></i>
         </a>
     </div>

     <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">


         <ul class="navbar-nav flex-row align-items-center ms-auto">
             <!-- Place this tag where you want the button to render. -->


             <!-- User -->
             @php
             $user = Auth::user()->join('profiles', 'profiles.users_id', '=', 'users.id')->where('users.id',
             Auth::user()->id)->first();
             @endphp
             <li class="nav-item navbar-dropdown dropdown-user dropdown">
                 <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                     <div class="avatar avatar-online">
                        @if ($user->image != null)
                        <img src="{{ asset('img/avatars/'. $user->image) }}" alt
                            class="w-px-40  rounded-circle"  height="10px"/>
                        @else
                        <img src="{{ asset('/img/avatars/6.png') }}" alt
                            class="w-px-40 h-auto rounded-circle" />

                            @endif
                     </div>
                 </a>
                 <ul class="dropdown-menu dropdown-menu-end">
                     <li>
                         <a class="dropdown-item" href="#">
                             <div class="d-flex">
                                 <div class="flex-shrink-0 me-3">
                                     <div class="avatar avatar-online">
                                         @if ($user->image != null)
                                         <img src="{{ asset('img/avatars/'. $user->image) }}" alt
                                             class="w-px-40  rounded-circle" height="10px" />
                                         @else
                                         <img src="{{ asset('/img/avatars/6.png') }}" alt
                                             class="w-px-40  rounded-circle" />
                                         @endif

                                     </div>
                                 </div>

                                 <div class="flex-grow-1">
                                     <span class="fw-semibold d-block">{{ $user->name }}</span>
                                     <small class="text-muted">{{ $user->role }}</small>
                                 </div>
                             </div>
                         </a>
                     </li>
                     <li>
                         <div class="dropdown-divider"></div>
                     </li>
                     <li>
                         <a class="dropdown-item" href="{{ url('userprofile') }}">
                             <i class="bx bx-user me-2"></i>
                             <span class="align-middle">Pengaturan Akun</span>
                         </a>
                     </li>

                     <li>
                         <div class="dropdown-divider"></div>
                     </li>
                     <form id="logout-form" action="{{ route('logout') }}" method="GET">
                         <li>
                             @csrf
                             <button type="submit" class="dropdown-item"  onclick="return confirm('Apakah anda yakin ingin keluar dari sistem?'); saveandsubmit(event);"> <i class="bx bx-power-off me-2"></i>
                                 <span class="align-middle">Log Out</span></button>

                         </li>
                     </form>
                 </ul>
             </li>
             <!--/ User -->
         </ul>
     </div>
 </nav>

 <div class="content-wrapper">
