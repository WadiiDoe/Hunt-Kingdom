@extends('layouts.app')

@section("content")
<div id="wrapper">

    @include('layouts.components.main-sidebar')
    <div id="content-wrapper " class="container  d-flex flex-column mt-5">


        <h1 class="text-center text-primary">Edit Role</h1>

        <div class="mt-5">
            <form method="POST" action="{{ route('admin.roles.update',$role->id)}}">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="exampleInputEmail1">Role</label>
                    <input class="form-control" iid="role_name"
                    type="text"
                    name="name"
                    value="{{ old('name',$role->name) }}"
                    placeholder="Enter role">
                </div>
                <div class="form-group">
                  <h3 class="text-xl my-4 text-gray-600">Permissions</h3>
                  <div class="form-check form-switch">
                  @foreach($permissions as $permission)
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="permissions[]"
                  value="{{$permission->id}}"  @if(count($role->permissions->where('id',$permission->id)))
                                      checked 
                                    @endif
                                  >
                  <label class="form-check-label" for="flexSwitchCheckDefault">{{ $permission->name }}</label>
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