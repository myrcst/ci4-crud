<?= $this->extend('layouts/default'); ?>

<?= $this->section('content') ?>

   <div>
      <h2>Albums</h2>
    </div>


<div class="content">
   <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#new">
New Album
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="new" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="newLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?= form_open('create') ?>
   <div class="card-body">
      <div class="mb-3">
         <label for="img_url" class="form-label">Image URL</label>
         <input type="text" class="form-control" id="img_url" name="img_url" placeholder="">
      </div>
      <div class="mb-3">
         <label for="album_name" class="form-label">Album Name</label>
         <input type="text" class="form-control" id="album_name" name="album_name" placeholder="">
      </div>
      <div class="mb-3">
         <label for="type" class="form-label">Type</label>
         <input type="text" class="form-control" id="type" name="type" placeholder="">
      </div>
      <!-- <div class="mb-3">
         <label for="songs" class="form-label">Songs</label>
         <textarea class="form-control" id="songs" name="songs" rows="3"></textarea>
      </div> -->
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-info">Submit</button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>


<div class="container-fluid py-5 mb-5">
      <div class="d-flex">
      <div class="row  row-cols-md-4 g-3">
         <?php foreach ($albums as $album) : ?>
         <div class="col">
          <div class="card shadow-sm text-center">
            <img src="<?= $album['img_url'] ?>" class="card-img-top" alt="...">
          <div class="accordion-item">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
            <div class="card-body text-center">           
              <h4 class="card-text"><?= $album['album_name'] ?></h4>
              <div class="d-flex justify-content-between align-items-center">
              </div>
                <small class="text-muted"><?= $album['type'] ?></small>
            </div>
            </button>
                  <a href="<?= base_url("edit/$album[id]") ?>" class="btn btn-outline-primary btn-sm mb-3">Edit</a>
                  <a href="<?= base_url("delete/$album[id]") ?>" class="btn btn-outline-danger btn-sm mb-3">Delete</a>
              <!-- <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <li class="list-group-item"><?= $album['songs'] ?></li>
                </div>
               </div> -->
              </div>
            </div>
          </div>
         <?php endforeach ?>
      </div>
   </div>
</div>
<!-- <div class="container">
       <div class="row  row-cols-md-4 g-3">
        <div class="col">
          <div class="card shadow-sm text-center">
          <img src="public/images/g1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-text">Got it?</h4>
              <div class="d-flex justify-content-between align-items-center">
             </div>
                <small class="text-muted">Mini Album</small>
              </div>
            </div>
          </div>
          <div class="col">
          <div class="card shadow-sm text-center">
          <img src="public/images/g2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-text">Got♥</h4>
              <div class="d-flex justify-content-between align-items-center">
             </div>
                <small class="text-muted">Mini Album</small>
              </div>
            </div>
          </div>
          <div class="col">
          <div class="card shadow-sm text-center">
          <img src="public/images/g3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-text">Around the World</h4>
              <div class="d-flex justify-content-between align-items-center">
             </div>
                <small class="text-muted">Japanese Single</small>
              </div>
            </div>
          </div>
          <div class="col">
          <div class="card shadow-sm text-center">
          <img src="public/images/g4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-text">Identify</h4>
              <div class="d-flex justify-content-between align-items-center">
             </div>
                <small class="text-muted">Full Album</small>
              </div>
            </div>
          </div>
          <div class="col">
          <div class="card shadow-sm text-center">
          <img src="public/images/g5.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-text">Love Train</h4>
              <div class="d-flex justify-content-between align-items-center">
             </div>
                <small class="text-muted">Japanese Single</small>
              </div>
            </div>
          </div>
          <div class="col">
          <div class="card shadow-sm text-center">
          <img src="public/images/g6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-text">Just Right</h4>
              <div class="d-flex justify-content-between align-items-center">
             </div>
                <small class="text-muted">Mini Album</small>
              </div>
            </div>
          </div>
          <div class="col">
          <div class="card shadow-sm text-center">
          <img src="public/images/g7.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-text">Laugh Laugh Laugh</h4>
              <div class="d-flex justify-content-between align-items-center">
             </div>
                <small class="text-muted">Japanese Single</small>
              </div>
            </div>
          </div>
          <div class="col">
          <div class="card shadow-sm text-center">
          <img src="public/images/g9.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-text">Just Right</h4>
              <div class="d-flex justify-content-between align-items-center">
             </div>
                <small class="text-muted">Chinese Single</small>
              </div>
            </div>
          </div>
        </div>
 -->
<?= $this->endSection() ?>
