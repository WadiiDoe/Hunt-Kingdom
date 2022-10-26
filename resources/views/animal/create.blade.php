@extends('layouts.app')

@section('styles')

@endsection

@section('content')




	<!-- PAGE HEADER -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Add animal</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:;">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
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
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   <div class="row">
        <div class="card-content">
            <div class="content">
                <form method="post" action="{{ route('animal.store') }}">
                    @csrf
                    <div class="form-group">
                       
                        <input type="texte" class="form-control" id="name"placeholder="Animal Name" name="name"  minlength="6">

                    </div>
                    <span style="color:red">
                @error('name') 
                {{$message}}
                @enderror
                </span>
                    <div class="form-group">
                       
                        <textarea class="form-control" id="description" rows="3" name="description"   placeholder="You can write your description here"></textarea>

                    </div>
                <span style="color:red">    
                @error('description') 
                {{$message}}
                @enderror
                </span>
                    <div class="form-group">
                      
                        <input type="texte"  class="form-control" id="zone" name="zone" placeholder="Animal Zone HERE">

                    </div>
                    <span style="color:red">
                @error('zone') 
                {{$message}}
                @enderror
                </span>
                 

                 
													<select name="category_id" class="form-control form-select select2" data-bs-placeholder="Select Category">
														 @foreach($categories as $category)
                                                         <option label="Select Year"></option>
                                                        <option value="{{ $category->id }}">
                                                        {{ $category->name }}</option>
                                                 @endforeach  
													</select>
												<div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" class="form-control-file" name="picture">
                    </div>
             
                <br>
                    <button type="submit" class="btn btn-primary ">Add</button>
                  
                </form>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

		<!-- INTERNAL SELECT2 JS -->
		@vite('resources/assets/js/select2.js')


@endsection