<div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">POST BERITA</h1>
                </div>
                <form action="<?php echo base_url('index.php/Admin_sosial/save'); ?>" method="POST" enctype="multipart/form-data">
                    <label>Judul Berita</label><br>
                    <input type="text" name="judul" placeholder="Masukan Judul" class="form-control"><br>
                    <label>Gambar Berita</label><br>
                    <input type="file" class="form-control" name="gambar"><br>
                    <label>Isi Berita</label>
                    <textarea class="form-control" placeholder="Masukan Berita" name="isi_berita" rows="8"></textarea><br>

                    <button class="btn btn-primary">SIMPAN</button>
                </form>

            </div>
        </div>