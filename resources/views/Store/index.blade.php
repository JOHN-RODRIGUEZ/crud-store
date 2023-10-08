@extends('home')
@section('content')






<div class="row ">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <br><br>
        <h3>List of Store</h3>
        <br>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
            New
        </button>
  
        <div class="table-responsive">
            <br>
            <table class="table ">
                <thead class="bg-dark text-white">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">slug</th>
                        <th scope="col">Front page</th>
                        <th scope="col">Description</th>
                        <th scope="col">Location</th>
                        <th scope="col">Nit</th>
                        <th scope="col">Status</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stores as $store)
                    <tr class="">
                        <td scope="row">{{$store->id}}</td>
                        <td>{{$store->name}}</td>
                        <td>{{$store->slug}}</td>
                        <td>{{$store->front_page}}</td>
                        <td>{{$store->description}}</td>
                        <td>{{$store->location}}</td>
                        <td>{{$store->nit}}</td>
                        <td>{{$store->status}}</td>
                        <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$store->id}}">
                                Edit
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$store->id}}">
                                Delete
                            </button>
                        </td>
                    </tr>
                    @include('store.info')
                    @endforeach


                </tbody>
            </table>
        </div>
        @include('Store.create')

    </div>
    <div class="col-md-2"></div>
</div>



@endsection
