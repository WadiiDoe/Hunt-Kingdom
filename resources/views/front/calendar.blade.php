@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Calendar</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Calendar</li>
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center">
									<button type="button" class="btn btn-white btn-icon-text my-2 me-2">
										<i class="fe fe-settings"></i>
										<span>Settings</span>
									</button>
									<button type="button" class="btn btn-primary my-2 btn-icon-text">
										<i class="fe fe-download-cloud bg-white-transparent text-white"></i>
										<span>Reports</span>
									</button>
								</div>
							</div>
						</div>
						<!-- END PAGE HEADER -->

						<!-- ROW -->
						<div class="row	">
							<div class="col-xl-3">
								<div class="card custom-card">
									<div class="card-body text-center">
										<button class="btn btn-primary btn-block"><i class="fe fe-plus me-2"></i> Add New Event</button>
									</div>
									<div class="card-body">
										<nav class="nav main-nav-column main-nav-calendar-event" id="external-events-list">
											<a class="nav-link d-flex bg-primary-transparent-70 fc-event" data-class="bg-primary-transparent-70" href="javascript:;">
												<div class="fc-event-main">Calendar Events</div>
											</a>
											<a class="nav-link d-flex bg-secondary-transparent-70 fc-event" data-class="bg-secondary-transparent-70"  href="javascript:;">
												<div class="fc-event-main">Birthday Events</div>
											</a>
											<a class="nav-link d-flex bg-warning-transparent-70 fc-event" data-class="bg-warning-transparent-70" href="javascript:;">
												<div class="fc-event-main">Holiday Events</div>
											</a>
											<a class="nav-link d-flex bg-info-transparent-70  fc-event" data-class="bg-info-transparent-70" href="javascript:;">
												<div class="fc-event-main">Office Events</div>
											</a>
											<a class="nav-link d-flex bg-success-transparent-70 fc-event" data-class="bg-success-transparent-70" href="javascript:;">
												<div class="fc-event-main">Other Events</div>
											</a>
										</nav>
										<div class="calendar-image mt-5 d-none d-xl-block">
											<img src="{{asset('build/assets/img/pngs/calendar.png')}}" alt="img">
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-9">
								<div class="card custom-card">
									<div class="card-body">
										<div class="" id="calendar"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->
@endsection

@section('scripts')

		<!-- MOMENT JS -->
		<script src="{{asset('build/assets/plugins/moment/min/moment.min.js')}}"></script>

		<!-- DATEPICKER JS -->
		<script src="{{asset('build/assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>

        <!-- FULL-CALENDER JS -->
        <script src="{{asset('build/assets/plugins/fullcalendar/moment.min.js')}}"></script>
        <script src="{{asset('build/assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
		@vite('resources/assets/js/calendar.js')
		
		
		<!-- SELECT2 JS -->
		@vite('resources/assets/js/select2.js')
        
@endsection
