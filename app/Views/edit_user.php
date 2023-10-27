<?= $this->extend('layouts/app2') ?>

<?= $this->section('content') ?>

<div>
    
    <?php if (session()->getFlashdata('errors')) : ?>
        <div class="row">
        <div class="col-md-5">
            <div class="alert alert-danger" role="alert">
                <?= session()->getFlashdata('errors') ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

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
                        <li><a href="<?= base_url('kelas/')?>">Kelas</a></li>
                        <li class="active"><a href="<?= base_url('user/')?>">User</a></li>
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
          <div class="col-xl-12 text-center" data-aos="fade-up">
          <div class="data">
        <br>
        <br>
    <form action="<?= base_url('/user/' . $user['id']) ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            <?= csrf_field() ?>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input class="input-create" type="text" name="nama" id="nama" value="<?= $user['nama'] ?>">
                </td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                <select name="kelas" id="kelas">
        <?php
        foreach ($kelas as $item) {
        ?>
            <option class="option-class" value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?> >
                <?= $item['nama_kelas']  ?>
            </option>
        <?php   
        }
        ?>
    </select>

                    <!-- <input type="text" name="kelas" id="kelas"> -->
                </td>
            </tr>
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td>
                    <input class="input-create" type="text" name="npm" id="npm" value="<?= $user['npm'] ?>">
                </td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>:</td>
                <td>
                    <input class="input-create" type="file" id="foto" name="foto" accept=".jpg, .jpeg, .png">
                </td>
                <td>
                    <img src="<?= $user['foto'] ?? '<default-foto>' ?>">
                </td>
            </tr>
        </table>

        <button type="submit" class="btn-sakura">Simpan</button>
        <br>
        <br>
    </form>

    </div>
          </div>
        </div>
      </div>

    </section>

    

    </div>

<?= $this->endSection() ?>

