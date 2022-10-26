@extends('layouts.app')

@section("content")
<div id="wrapper">

    @include('layouts.components.main-sidebar')
    <div id="content-wrapper " class="container  d-flex flex-column mt-5">


        <h1 class="text-center text-primary">Add new user</h1>

        <div class="mt-5">
            <form method="POST" action="{{ route('admin.users.store')}}">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input class="form-control" id="name" type="text" name="name" value="{{ old('name') }}"
                        placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input class="form-control" id="email" type="text" name="email" value="{{ old('email') }}"
                        placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Password</label>
                    <input class="form-control" id="password" type="password" name="password"
                        value="{{ old('password') }}" placeholder="Enter password">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Confirm Password</label>
                    <input class="form-control" id="password_confirmation" type="password" name="password_confirmation"
                        placeholder="Re-enter password">
                </div>

                <div class="form-group">
                <h3 class="text-xl my-4 text-gray-600">Role</h3>
                <div class="form-check form-switch">
                @foreach($roles as $role)
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="roles[]"
                    value="{{$role->id}}">
                <label class="form-check-label" for="flexSwitchCheckDefault">{{ $role->name }}</label>
                <br>
                @endforeach
              </div>
              </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>
@endsection