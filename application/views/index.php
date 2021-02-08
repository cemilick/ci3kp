<div class="container p-3">
    <h2 class="mb-3">Daftar Post</h2>
    <?php foreach($post as $post): ?>
        <div class="card my-2">
            <div class="card-header bg-dark text-light"><h4><?= $post['judul'] ?></h4></div>
            <div class="card-body d-flex">
                <img width="200px" src="http://bbvdps.ditjenpkh.pertanian.go.id/wp-content/uploads/2014/01/default-post-image-bbvet-denpasar-2.jpg" alt="">
                <?= $post['isi'] ?>
            </div>
            <div class="card-footer d-flex justify-content-end">
                <a href="<?= base_url() ?>post/show/<?= $post['id'] ?>" class="btn btn-primary">Read More</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>