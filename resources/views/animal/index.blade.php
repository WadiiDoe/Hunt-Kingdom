@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Animals List</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Animals</a></li>
									<li class="breadcrumb-item active" aria-current="page">You can find different animals here</li>
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
										<span>Add</span>
									</button>
								</div>
							</div>
						</div>
						<!-- END PAGE HEADER -->

						<!-- ROW -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Animals List</h6>
											<p class="text-muted card-sub-title"></p>
										</div>  
										<div class="table-responsive border">
											<table class="table text-nowrap text-md-nowrap mg-b-0">
                                                <thead>
													<tr>
														<th>Image</th>
														<th>Name</th>
														<th>Description</th>
														<th>Zone</th>
														<th>Category</th>
                                                        <th>Actions</th>
													</tr>
												</thead>
												<thead>
													@foreach($animals as $animal)
                        <tr>

							
                            <th> <img src="{{ url('public/images/'.$animal->picture) }}"style="height: 100px; width: 150px;"></th>
                            <th>{{$animal->name}}</th>
                            <th>{{$animal->description}}</th>
                            <th>{{$animal->zone}}</th>
                            <th>{{$animal->category()->first()->name}}</th>

                            <td>
                                <a class="btn btn-outline-success" href="{{ route('animal.show',$animal->id) }}">
                                    Détails</a>
                                <a class="btn btn-outline-success" href="{{ route('animal.edit',$animal->id) }}">Modifier</a>
                                <form action="{{ route('animal.destroy',$animal->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-success">Delete</button>
                                </form>


                            </td>
                        </tr>
                    @endforeach
												</thead>
										
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						
@endsection

@section('scripts')

@endsection
