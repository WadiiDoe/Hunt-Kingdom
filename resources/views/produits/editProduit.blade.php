@extends('layouts.app')

 @section("content")
<div id="wrapper">
   
        @include('layouts.components.main-sidebar')
        <div id="content-wrapper " class="container  d-flex flex-column mt-5">


            <h1 class="text-center text-primary">modifier produit </h1>

            <div class="mt-5" >
                <form method="post" action="{{route("produit.update",$produit->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                    <div class="form-group">
                        <label for="exampleInputEmail1">name</label>
                        <input type="text" class="form-control" name="name"   value="{{$produit->name}}"  >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">price</label>
                        <input type="text" class="form-control" name="price"  value="{{$produit->price}}"  >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">description</label>
                        <input type="text" class="form-control"  name="description"  value="{{$produit->description}}" >
                    </div>
                    <select name="category_id" class="form-control form-select select2" data-bs-placeholder="Select Category">
														 @foreach($categories as $category)
                                                         <option label="Select Category"></option>
                                                        <option value="{{ $category->id }}">
                                                        {{ $category->name }}</option>
                                                 @endforeach  
													</select>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">image</label>
                        <input type="file" class="form-control-file" name="image">
                    </div>
                   

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
</div>
@endsection
