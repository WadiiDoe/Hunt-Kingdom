@extends('layouts.app')

 @section("content")
<div id="wrapper">
   
        @include('layouts.components.main-sidebar')
        <div id="content-wrapper " class="container  d-flex flex-column mt-5">


            <h1 class="text-center text-primary">Liste des evenements</h1>
            <a class="btn btn-primary mt-5 w-25" href="{{route("event.create")}}">
                Ajouter un evenement
            </a>
            <table class="table mt-2">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">titre</th>
                    <th scope="col">location</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">date debut</th>
                    <th scope="col">date fin</th>

                    <th scope="col">Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($events as $event)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$event->Title}}</td>
                        <td>{{$event->location}}</td>
                        <td>{{$event->description}}</td>

                        <td><img src="/images/{{$event->picture}}" width="50px"></td>
                        <td>{{$event->start_date}}</td>
                        <td>{{$event->end_date}}</td>

                        <td>

                            <form action="{{route("event.destroy",$event->id)}}" method="POST" >

                                <a class="btn btn-success" href="{{route("event.edit",$event->id)}}"><i class="fa fa-cog" aria-hidden="true"></i>


                                </a>
                                @csrf
                                @method("DELETE")


                                <button class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i>
                                </button>

                            </form>

                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
</div>
@endsection