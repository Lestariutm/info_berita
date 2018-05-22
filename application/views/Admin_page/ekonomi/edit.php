<div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">EDIT BERITA</h1>
                </div>
                <form action="<?php echo base_url('index.php/Admin_ekonomi/update'); ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $query->ekonomi_id; ?>">
                	<label>Judul Berita</label><br>
                	<input type="text" value="<?php echo $query->judul; ?>" name="judul" placeholder="Masukan Judul" class="form-control"><br>
                	<label>Gambar Berita</label><br>
                	<input type="file" class="form-control" name="gambar"><br>
                	<label>Isi Berita</label>
                	<textarea class="form-control" placeholder="Masukan Berita" name="isi_berita" rows="8"><?php echo $query->isi_berita; ?></textarea><br>
                	<a href="#" class="btn btn-primary">UPDATE</a>
                </form>

            </div>
        </div>