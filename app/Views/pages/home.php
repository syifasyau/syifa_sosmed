<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h4 class="mt-3">What's on your mind?</h4>

            <form class="form">
                <div class="mb-3">
                    <textarea class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-primary float-end" value="Post" name="">
                </div>

            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p>
                <b>Syifa</b> <br>
                Dikit lagi lebaran nih...Semoga dapet THR <br>
                <a href="">Like</a> - <a href="/pages/comment.php">Comment</a>
            </p>
            <hr>
            <p>
                <b>Nasywa</b> <br>
                Selamat mudik! Hati-hati di jalan yaa <br>
                <a href="">Like</a> - <a href="/pages/comment.php">Comment</a>
            </p>
            <hr>
            <p>
                <b>Ghazi</b> <br>
                Ga sabar lebaran soalnya mau makan opor nih... <br>
                <a href="">Like</a> - <a href="/pages/comment.php">Comment</a>
            </p>
        </div>
    </div>
</div>
<?= $this->endSection() ?>