@extends('layouts.app')

 @section("content")
<div id="wrapper">
   
        @include('layouts.components.main-sidebar')
        <div id="content-wrapper " class="container  d-flex flex-column mt-5">


            <h1 class="text-center text-primary">Liste des produits</h1>
            <a class="btn btn-primary mt-5 w-25" href="{{route("produit.create")}}">
                Ajouter un produit
            </a>
            <table class="table mt-2">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Image</th>
                 

                    <th scope="col">Action</th>

                </tr>
                </thead>
                <tbody>
                @foreach($produits as $produit)
                    <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$produit->name}}</td>
                        <td>{{$produit->Price}}</td>
                        <td>{{$produit->description}}</td>
                        <td>{{$produit->category()->first()->name}}</td>

                        <td><img src="/images/{{$produit->image}}" width="50px"></td>
                   

                        <td>

                            <form action="{{route("produit.destroy",$produit->id)}}" method="POST" >

                                <a class="btn btn-success" href="{{route("produit.edit",$produit->id)}}"><i class="fa fa-cog" aria-hidden="true"></i>


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