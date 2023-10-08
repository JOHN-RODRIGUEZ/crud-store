

<!-- Modal -->
<div class="modal fade" id="edit{{$store->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Store</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <form action="{{route('home.update', $store->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
       <div class="modal-body">
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text"
            class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" value="{{$store->name}}">
         
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Slug</label>
          <input type="text"
            class="form-control" name="slug" id="" aria-describedby="helpId" placeholder=""value="{{$store->slug}}">
         
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Front page</label>
          <input type="text"
            class="form-control" name="front_page" id="" aria-describedby="helpId" placeholder="" value="{{$store->front_page}}">
         
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Description</label>
          <input type="text"
            class="form-control" name="description" id="" aria-describedby="helpId" placeholder="" value="{{$store->description}}">
         
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Location</label>
          <input type="text"
            class="form-control" name="location" id="" aria-describedby="helpId" placeholder=""value="{{$store->location}}">
         
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Nit</label>
          <input type="text"
            class="form-control" name="nit" id="" aria-describedby="helpId" placeholder="" value="{{$store->nit}}">
         
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Status</label>
          <input type="text"
            class="form-control" name="status" id="" aria-describedby="helpId" placeholder="" value="{{$store->status}}">
         
        </div>
       
      </div>
      <div class= "modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>

    </div>
  </div>
</div>





















<!-- Modal Delete-->
<div class="modal fade" id="delete{{$store->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Store</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <form action="{{route('home.destroy',$store->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
       <div class="modal-body">
       Are you sure to delete <strong>{{$store->name}}?</strong>

       </div>
     
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">confirm</button>
      </div>
    </form>

    </div>
  </div>
</div>