<?= $this->extend('layouts/app2') ?>

<?= $this->section('content') ?>


<header class="site-header js-site-header">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="#">UTP</a></div>
          <div class="col-6 col-lg-8">


            <div class="site-menu-toggle js-site-menu-toggle"  data-aos="fade">
              <span></span>
              <span></span>
              <span></span>
            </div>
            <!-- END menu-toggle -->

            <div class="site-navbar js-site-navbar">
              <nav role="navigation">
                <div class="container">
                  <div class="row full-height align-items-center">
                    <div class="col-md-6 mx-auto">
                      <ul class="list-unstyled menu">
                        <li><a href="<?= base_url('home/')?>">Home</a></li>
                        <li class="active"><a href="<?= base_url('kelas/')?>">Kelas</a></li>
                        <li><a href="<?= base_url('user/')?>">User</a></li>
                      </ul>
                    </div>
                  </div>    
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="site-hero overlay" style="background-image: url(<?= base_url('/assets/img/sakura.jpg') ?>)" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
          <div class="col-md-10 text-center" data-aos="fade-up">
            <h1 class="heading">Kelas</h1>
          </div>
        </div>
      </div>

    </section>

<section class="in-list">

  <h1>Data Kelas</h1>
  <a href="<?= base_url('kelas/create_kelas')?>" class="btn btn-info">Tambah Data</a>
  <div class="tbl-header">
    <table class="list-table">
      <thead>
        <tr>
            <th style="width:10%">ID</th>
            <th>Nama Kelas</th>
            <th >Aksi</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
  <table class="list-table">
      <tbody>
      <?php
        foreach ($kelas as $kelass) {
        ?>
            <tr>
                <td style="width:10%"><?= $kelass['id'] ?></td>
                <td><?= $kelass['nama_kelas'] ?></td>
                <td>
                  <a href="<?= base_url('/kelas/' . $kelass['id'] . '/edit_kelas') ?>" class="btn btn-warning">Edit</a>
                  
                  <form action="<?= base_url('/kelas/' . $kelass['id']) ?>" method="post" class="d-inline">
                  <input type="hidden" name="_method" value="DELETE">
                  <?= csrf_field() ?>
                  <button type="submit" class="btn btn-danger">Hapus</a>
                  </form>

                </td>
            </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</section>

<?= $this->endSection() ?>

