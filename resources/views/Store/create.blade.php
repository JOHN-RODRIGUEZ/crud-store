

<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Register Store</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>


      <form action="{{route('home.store')}}" method="post" enctype="multipart/form-data">
            @csrf
       <div class="modal-body">
        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="text"
            class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
         
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Slug</label>
          <input type="text"
            class="form-control" name="slug" id="" aria-describedby="helpId" placeholder="">
         
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Front page</label>
          <input type="text"
            class="form-control" name="front_page" id="" aria-describedby="helpId" placeholder="">
         
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Description</label>
          <input type="text"
            class="form-control" name="description" id="" aria-describedby="helpId" placeholder="">
         
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Location</label>
          <input type="text"
            class="form-control" name="location" id="" aria-describedby="helpId" placeholder="">
         
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Nit</label>
          <input type="text"
            class="form-control" name="nit" id="" aria-describedby="helpId" placeholder="">
         
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Status</label>
          <input type="text"
            class="form-control" name="status" id="" aria-describedby="helpId" placeholder="">
         
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>

    </div>
  </div>
</div>