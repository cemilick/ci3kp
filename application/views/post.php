<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<?php foreach ($post as $post): ?>
    <div class="card col-md-2 m-5">
        <div class="card-header">
            <?= $post['judul'] ?>
        </div>
        <div class="card-body">
            <?= $post['isi'] ?>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#UbahModal">
                Ubah
            </button>
        </div>
    </div>
    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="UbahModal" tabindex="-1" aria-labelledby="UbahModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="UbahModalLabel">Ubah Data Post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex justify-content-center">
        <form action="<?= base_url() ?>post/update/<?= $post['id'] ?>" method="post">
            <div class="form-group my-2">
                <label for="">Judul :</label>
                <input type="text" name="judul" id="" class="form-control col-md-9 " value="<?= $post['judul'] ?>">
            </div>
            <div class="form-group my-2">
            <label for="">Isi Post</label>
                <textarea name="isi" id=""  class="form-control col-md-9"><?= $post['isi'] ?></textarea>
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
<?php endforeach; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>