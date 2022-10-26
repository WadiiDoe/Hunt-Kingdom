@extends('layouts.app')

@section('styles')

@endsection

@section('content')


<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">{{$animal->name}}</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Utilities</a></li>
									<li class="breadcrumb-item active" aria-current="page">Display</li>
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
						<div class="row row-sm">
							<div class="col-xl-12 col-lg-12">
								<div class="card custom-card" id="basic">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Basic Display For Animal</h6>
											<p class="text-muted  card-sub-title">The following display utilities classes will set display property of an element.</p>
										</div>
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>Animal Name :</code></td>
														<td>{{ $animal->name }}</td>
													</tr>
													<tr>
														<td><code>Animal Zone</code></td>
														<td>{{ $animal->zone }}</td>
													</tr>
													<tr>
														<td><code>Animal Description</code></td>
														<td>{{$animal->description}}</td>
													</tr>
                                                    <tr>
														<td><code>Animal Category</code></td>
														<td>{{$animal->category()->first()->name}}</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								
							</div>
						</div>


                        @endsection

@section('scripts')

@endsection 