<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <p>
                <b>Syifa</b> <br>
                Dikit lagi lebaran nih...Semoga dapet THR <br>
                <a href="">Like</a>
            </p>
            <hr>
            <p>
                <b>Nasywa</b> <br>
                Selamat mudik! Hati-hati di jalan yaa <br>
                <a href="">Like</a>
            </p>
            <form class="form">
                <div class="mb-3">
                    <textarea class="form-control"></textarea>
                </div>

                <div class="mb-3">
                    <input type="submit" class="btn btn-primary float-end" value="Comment" name="">
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>