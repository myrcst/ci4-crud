<?= $this->extend('layouts/default'); ?>


<?= $this->section('content') ?>
<div class="card" style="width: 18rem;">
   <div class="card-body">
      <?= form_open('update') ?>
      <input type="number" class="form-control" id="id" name="id" value="<?= $id ?>">
      <div class="mb-3">
         <label for="img_url" class="form-label">Image URL</label>
         <input type="text" class="form-control" id="img_url" name="img_url" value="<?= $img_url ?>">
      </div>
      <div class=" mb-3">
         <label for="album_name" class="form-label">Album Name</label>
         <input type="text" class="form-control" id="album_name" name="album_name" placeholder="" value="<?= $album_name ?>">
      </div>
      <div class="mb-3">
         <label for="type" class="form-label">Image URL</label>
         <input type="text" class="form-control" id="type" name="type" value="<?= $type ?>">
      </div>
<!--       <div class="mb-3">
         <label for="songs" class="form-label">Type</label>
         <textarea class="form-control" id="songs" name="songs" rows="3"><?= $songs ?></textarea>
      </div> -->
      <button class=" btn btn-info">Submit</button>
      <?= form_close() ?>
   </div>
</div>
<?= $this->endSection() ?>
