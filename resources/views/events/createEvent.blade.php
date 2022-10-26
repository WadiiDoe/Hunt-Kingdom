@extends('layouts.app')

 @section("content")
<div id="wrapper">
   
        @include('layouts.components.main-sidebar')
        <div id="content-wrapper " class="container  d-flex flex-column mt-5">


            <h1 class="text-center text-primary">Ajouter un nouveau evenement</h1>

            <div class="mt-5" >
                <form method="post" action="{{route("event.store")}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">titre</label>
                        <input type="text" class="form-control" name="Title" value="{{old('Title')}}"  >
                    </div>
                    <span style="color:red">
                @error('Title') 
                {{$message}}
                @enderror
                </span>
                    <div class="form-group">
                        <label for="exampleInputEmail1">description</label>
                        <input type="text" class="form-control" name="description"  value="{{old('description')}}">
                    </div>
                    <span style="color:red">
                @error('description') 
                {{$message}}
                @enderror
                </span>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" class="form-control-file" name="picture">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">location</label>
                        <input type="text" class="form-control"  name="location" value="{{old('location')}}">
                    </div>
                    <span style="color:red">
                @error('location') 
                {{$message}}
                @enderror
                </span>


                    <div class="form-group">
                        <label for="exampleInputEmail1">debut</label>
                        <input type="date" class="form-control"  name="start_date">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">fin</label>
                        <input type="date" class="form-control"  name="end_date">
                    </div>
                    





                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
</div>
@endsection
