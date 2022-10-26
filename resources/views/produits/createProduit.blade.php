@extends('layouts.app')

 @section("content")
<div id="wrapper">
   
        @include('layouts.components.main-sidebar')
        <div id="content-wrapper " class="container  d-flex flex-column mt-5">


            <h1 class="text-center text-primary">Ajouter un nouveau produit</h1>

            <div class="mt-5" >
                <form method="post" action="{{route("produit.store")}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        
                        <label for="exampleInputEmail1">name</label>
                        <input type="text" class="form-control" name="name"  >
                    </div>
                    <span style="color:red">
                @error('name') 
                {{$message}}
                @enderror
                </span>
                    <div class="form-group">
                        <label for="exampleInputEmail1">price</label>
                        <input type="text" class="form-control" name="price"  >
                    </div>
                    <span style="color:red">
                @error('Price') 
                {{$message}}
                @enderror
                </span>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">description</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <span style="color:red">
                @error('description') 
                {{$message}}
                @enderror
                </span>

                    <select name="category_id" class="form-control form-select select2" data-bs-placeholder="Select Category">
														 @foreach($categories as $category)
                                                         <option label="Select Category"></option>
                                                        <option value="{{ $category->id }}">
                                                        {{ $category->name }}</option>
                                                 @endforeach  
													</select>
                    <div class="form-group">
                        <label for="exampleInputEmail1">image</label>
                        <input type="file" class="form-control-file"  name="image">
                    </div>







                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
</div>
@endsection