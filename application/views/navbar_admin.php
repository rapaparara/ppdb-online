<nav class="fixed-top navbar navbar-expand-lg navbar-light" style="background-color: #e0e0e0;">
  <a class="navbar-brand" href="<?php echo base_url('admin/') ?>">Admin PPDB Online</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php if($this->uri->segment(2)=='pendaftar'){echo 'active';}?>">
        <a class="nav-link" href="<?php echo base_url('admin/pendaftar') ?>">Pendaftar</a>
      </li>
    </ul>
    <a class="btn btn-outline-dark" role=button href="<?php echo base_url('') ?>">Keluar</a>
  </div>
</nav>