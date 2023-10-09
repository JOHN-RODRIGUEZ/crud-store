@extends('home')
@section('content')


<div class="container ">
    <div class="p-4 rounded"></div>
        <form class="row">
            @csrf
            <div class="col-md-4">
                    <h3>List of Store</h3>
                </div>

                <div class="col-md-8">
                    <div class="input-group ">
                        <input type="search" name="search" value="{{ $search }}" class="form-control" placeholder="Search Store...">
                        <button class="btn  btn btn-primary"> <i class='bx bx-search-alt-2'></i>Search</button>
                    </div>
                </div>
        </form>


        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
            New
        </button>
  
        <div class="table-responsive">
            <br>
            
            <table class="table table-striped">
               <table class="table ">
                <thead class="bg-cyan-500 text-black">
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
            </table>
        </div>
        @include('Store.create')

    <div class="col-md-2"></div>
</div>

@endsection

