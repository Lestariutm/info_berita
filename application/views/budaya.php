<section class="hoc container clear"> 
    <div class="center btmspace-80">
      <h2 class="heading nospace">Kumpulan Berita-berita Budaya</h2>
      <p class="nospace">Menampilkan beberapa informasi-informasi mengenai budaya</p>
    </div>
    <ul class="nospace group services">
      <?php foreach ($budaya->result() as $in) {
                        ?>
      <li class="one_third first">
        <article><a href="#"><img style="width: 200px; height: 200px;" class="img-responsive" src="<?php echo base_url('upload/budaya/'. $in->gambar); ?>" alt="Image"></a>
          <h6 class="heading"><?php echo $in->judul; ?></h6>
          <p><?php echo $in->isi_berita; ?></p>
          <footer><a href="#">Read More &raquo;</a></footer>
        </article>
      </li>
          <?php   
                    } 
                    ?>
    </ul>
    <div class="clear"></div>
  </section>
</div>