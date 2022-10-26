
			<div class="sticky">
					<div class="main-menu main-sidebar main-sidebar-sticky side-menu">
						<div class="main-sidebar-header main-container-1 active">
							<div class="sidemenu-logo">
								<a class="main-logo" href="{{url('/')}}">
									<img src="{{Vite::asset('assets/img/brand/logo-light.png')}}" class="header-brand-img desktop-logo-dark" alt="logo">
									<img src="{{Vite::asset('assets/img/brand/icon-light.png')}}" class="header-brand-img icon-logo-dark" alt="logo">
									<img src="{{Vite::asset('assets/img/brand/logo.png')}}" class="header-brand-img desktop-logo" alt="logo">
									<img src="{{Vite::asset('assets/img/brand/icon.png')}}" class="header-brand-img icon-logo" alt="logo">
								</a>
							</div>
							<div class="main-sidebar-body main-body-1">
								<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#c9bebe" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
								<ul class="menu-nav nav">
									<li class="nav-item">
										<a class="nav-link with-sub" href="javascript:void(0);">
											<svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24"><path d="M10.5,13h-7C3.2,13,3,13.2,3,13.5v7C3,20.8,3.2,21,3.5,21h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,13.2,10.8,13,10.5,13z M10,20H4v-6h6V20z M10.5,3h-7C3.2,3,3,3.2,3,3.5v7C3,10.8,3.2,11,3.5,11h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,3.2,10.8,3,10.5,3z M10,10H4V4h6V10z M20.5,3h-7C13.2,3,13,3.2,13,3.5v7c0,0.3,0.2,0.5,0.5,0.5h7c0.3,0,0.5-0.2,0.5-0.5v-7C21,3.2,20.8,3,20.5,3z M20,10h-6V4h6V10z M20.5,16.5h-3v-3c0-0.3-0.2-0.5-0.5-0.5s-0.5,0.2-0.5,0.5v3h-3c-0.3,0-0.5,0.2-0.5,0.5s0.2,0.5,0.5,0.5h3v3c0,0.3,0.2,0.5,0.5,0.5h0c0.3,0,0.5-0.2,0.5-0.5v-3h3c0.3,0,0.5-0.2,0.5-0.5S20.8,16.5,20.5,16.5z"/></svg>
											<span class="sidemenu-label">Animal Dashboaed</span>
											<i class="angle fe fe-chevron-right"></i>
										</a>
										<ul class="nav-sub">
											<li class="side-menu-label1"><a href="/animal">Animal Dashboaed</a></li>
											<li class="nav-sub-item">
												<a class="nav-sub-link" href="{{url('animal')}}">Animal list</a>
											<span class="sidemenu-label">User</span>
											<i class="angle fe fe-chevron-right"></i>
										</a>
										<ul class="nav-sub">
											<li class="side-menu-label1"><a href="javascript:void(0);">Users</a></li>
											
											<li class="nav-sub-item">
												@canany('User access','User add','User edit','User delete')
													<a class="nav-sub-link" href="/admin/users">Users list</a>
													@endcanany
												</li>
											<li class="nav-sub-item">
											@canany('Role access','Role add','Role edit','Role delete')
												<a class="nav-sub-link" href="{{ route('admin.roles.index') }}">Roles</a>
												@endcanany

											</li>
											

											
											<li class="nav-sub-item">
											@canany('Permission access','Permission add','Permission edit','Permission delete')
												<a class="nav-sub-link" href="{{ route('admin.permissions.index') }}">Permission</a>
												@endcanany
											</li>
										</ul>
									
										</ul>
									</li>
								</ul>
								<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#c9bebe" width="24" height="24" viewBox="0 0 24 24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg></div>
							</div>
						</div>
					</div>
				</div>
				