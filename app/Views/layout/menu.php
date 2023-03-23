<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
  <li class="nav-header">Main Menu</li>
  <li class="nav-item">
    <a href="<?= base_url('home'); ?>" class="nav-link">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        Dashboard
      </p>
    </a>
  </li>

  <li class="nav-item">
    <a href="<?= base_url('acara'); ?>" class="nav-link">
      <i class="nav-icon fas fa-calendar-alt"></i>
      <p>
        Acara
      </p>
    </a>
  </li>

  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-address-book"></i>
      <p>
        Kontak
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?= base_url('groups'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Group Saya</p>
        </a>
      </li>
    </ul>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?= base_url('contacts'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Kontak Saya</p>
        </a>
      </li>
    </ul>
  </li>

  <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-envelope"></i>
      <p>
        Undangan
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?= base_url('mengundang'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Saya Mengundang</p>
        </a>
      </li>
    </ul>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="<?= base_url('diundang'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Saya Diundang</p>
        </a>
      </li>
    </ul>
  </li>

</ul>