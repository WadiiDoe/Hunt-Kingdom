@extends('layouts.app')

@section('styles')
@endsection

@section('content')
    <!-- PAGE HEADER -->
    <div class="page-header">
        <div>
            
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:;">Permissions</a></li>
                <li class="breadcrumb-item active" aria-current="page">List</li>
            </ol>
        </div>
        
    </div>
    <!-- END PAGE HEADER -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card overflow-hidden">
                <div class="card-body">
                    <div>
                        <h5 class="main-content-label mb-1">Permissions </h5>
                        <h6><a href="{{route('admin.permissions.create')}}"
                class=""><i class="bi bi-plus-circle"></i>
                Add new
                permission</a></h6>
                        <p class="text-muted card-sub-title">
                    </div>
                    <div class="table-responsive">
                        <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                            <thead>
                                <tr>
                                    <th class="border-bottom-0">Permission</th>
                                   
                                    <th class="border-bottom-0">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($permissions as $permission)
                                    <tr>
                                        <td> <h5>{{ $permission->name }} </h5></td>
                                        
                                        <td>

                                            
                                          <a href="{{route('admin.permissions.edit',$permission->id)}}"
                                          class="btn btn-warning">Edit</a>
                                           
                                            
                                          <form action="{{ route('admin.permissions.destroy', $permission->id) }}" method="POST" class="inline">
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
