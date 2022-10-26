@extends('layouts.app')

@section('styles')
@endsection

@section('content')
    <!-- PAGE HEADER -->
    <div class="page-header">
        <div>
            
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:;">Users</a></li>
                <li class="breadcrumb-item active" aria-current="page">User list</li>
            </ol>
        </div>
       
    </div>
    <!-- END PAGE HEADER -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div>
                        <h6 class="main-content-label mb-1">Users list </h6>
                        <h6><a href="{{route('admin.users.create')}}"
                          class=""><i class="bi bi-plus-circle"></i>
                          Add new
                          user</a></h6>
                        <p class="text-muted card-sub-title">
                    </div>
                    <div class="table-responsive">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">User Name</th>
                                    <th class="border-bottom-0">Role</th>
                                    <th class="border-bottom-0">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td> <h5>{{ $user->name }} </h5></td>
                                        <td>
                                            @foreach ($user->roles as $role)
                                               <span>{{ $role->name }}</span>
                                            @endforeach
                                        </td>
                                        <td>

                                            
                                          <a href="{{ route('admin.users.edit', $user->id) }}"
                                          class="btn btn-warning">Edit</a>
                                           
                                            
                                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                                class="inline">
                                                @csrf
                                                @method('delete')
                                                <a
                                                    class="btn btn-danger">Delete</a>
                                            </form>
                                         
                                        </td>

                                    </tr>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- INTERNAL DATA TABLE JS -->
    <script src="{{ asset('build/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('build/assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    @vite('resources/assets/js/table-data.js')
@endsection
