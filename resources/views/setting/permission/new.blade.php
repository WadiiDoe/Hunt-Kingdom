@extends('layouts.app')

@section("content")
<div id="wrapper">

    @include('layouts.components.main-sidebar')
    <div id="content-wrapper " class="container  d-flex flex-column mt-5">


        <h1 class="text-center text-primary">Add Permission</h1>

        <div class="mt-5">
            <form method="POST" action="{{ route('admin.permissions.store')}}">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="exampleInputEmail1">Permission Name</label>
                    <input class="form-control"  id="role_name"
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Enter permission">
                </div>
               
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>
@endsection