<body>
  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>    
    
    <header class="site-navbar py-1" role="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="<?=base_url()?>/user/index" class="text-black h2 mb-0">- id<strong>Bis</strong>id -</a></h1>
          </div>
          <!-- MENU ATAS -->
          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="<?=base_url()?>/user/index">Beranda</a></li>
                <li>
                  <a href="<?=base_url()?>/user/ide_bisnis">Ide Bisnis</a>
                </li>
                <li><a href="<?=base_url()?>/user/daftar_pelatihan">Pelatihan</a></li>
                <li><a href="<?=base_url()?>/user/tentang">Tentang</a></li>
                <li><a href="<?=base_url()?>/user/kontak">Kontak</a></li>
                <li class="active"><a href="<?=base_url()?>/login/profil">Hi, (Nama Kamu)</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-6 col-xl-2 text-right d-block">
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
          </div>
        </div>
      </div>
    </header>

    <!-- GAMBAR ATAS -->
    <div class="unit-5 overlay" style="background-image: url(<?php echo base_url('assets/user2/images/hero_bg_2.jpg')?>);">
      <div class="container text-center">
        <h2 class="mb-0">- Update Profil Kamu -</h2>
        <p class="mb-0 unit-6"><a href="<?=base_url()?>/user/index">Beranda</a> <span class="sep">></span> <span><a href="<?=base_url()?>/user/profil_user">Profil Kamu</a><span class="sep">></span><span>Update Profil</span></p>
      </div>
    </div>

    <!-- FORM PENAMBAHAN -->
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 mb-5">
            <form action="#" class="p-5 bg-white" method="post" enctype="multipart/form-data">
            <h4><strong><center>- Update Profil Kamu -</center></strong></h4><br>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Nama Anda</label>
                  <input type="text" id="fullname" class="form-control" value="Sheva Putri Wahidah">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">E-mail</label>
                  <input type="email" id="fullname" class="form-control" value="shevapw@gmail.com">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Telepon</label>
                  <input type="text" id="fullname" class="form-control" value="085706643004">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Username</label>
                  <input type="text" id="fullname" class="form-control" value="shevaputrie">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Password</label>
                  <input type="password" id="fullname" class="form-control" value="idBisid">
                </div>
              </div>
              <div class="row form-group mb-5">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Ubah Foto Profil : </label>
                  <input type="file" id="fullname" class="form-control">
                  <p>Format .jpg dan .png Maks. Ukuran : 500KB</p>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <center><input type="submit" value="Simpan" class="btn btn-primary  py-2 px-5"></center>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>