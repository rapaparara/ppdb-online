<nav class="fixed-top navbar navbar-expand-lg navbar-light" style="background-color: #e0e0e0;">
  <a class="navbar-brand" href="<?php echo base_url('') ?>">PPDB Online</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if($this->uri->segment(1)=='pendaftaran'){echo 'active';}?>">
        <a class="nav-link" href="<?php echo base_url('pendaftaran') ?>">Pendaftaran</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pengumuman
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <a class="btn btn-outline-dark" role=button href="<?php echo base_url('admin/') ?>">Masuk</a>
  </div>
</nav>