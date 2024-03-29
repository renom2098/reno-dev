<?= $this->extend('layout/default') ?>

<?= $this->section('title'); ?>
<title>Contact | Dev</title>
<?= $this->endsection('title'); ?>

<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Kontak</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Kontak</a></li>
              <li class="breadcrumb-item active">Kontak</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    
    <!-- Main content -->
    <section class="content">

    <?php if(session()->getFlashdata('success')) : ?>
      <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">
          <button class="close" data-dismiss="alert">X</button>
          <b>Success!</b>
          <?= session()->getFlashdata('success') ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if(session()->getFlashdata('danger')) : ?>
      <div class="alert alert-danger alert-dismissible show fade">
        <div class="alert-body">
          <button class="close" data-dismiss="alert">X</button>
          <b>Danger!</b>
          <?= session()->getFlashdata('danger') ?>
        </div>
      </div>
    <?php endif; ?>

    <?php if(session()->getFlashdata('error')) : ?>
      <div class="alert alert-danger alert-dismissible show fade">
        <div class="alert-body">
          <button class="close" data-dismiss="alert">X</button>
          <b>Error!</b>
          <?= session()->getFlashdata('error') ?>
        </div>
      </div>
    <?php endif; ?>
    

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <!-- <h1>Hello Group!</h1> -->
          <div class="container">
            <div class="row">
              <div class="col align-self-start">
                <a href="<?= base_url('contacts/new'); ?>" class="btn btn-primary">Tambah Data</a>
              </div>
              <div class="float-right">
                <a href="<?= base_url('contacts/trash'); ?>" class="btn btn-warning">Data Sampah</a>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th style="width: 100px">Nama Kontak</th>
              <th style="width: 10px">Alias</th>
              <th style="width: 10px">Telepon</th>
              <th style="width: 10px">Email</th>
              <th style="width: 50px">Alamat</th>
              <th style="width: 10px">Info</th>
              <th style="width: 10px">Group</th>
              <th style="width: 40px">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($contacts as $c => $value) : ?>
              <tr>
                <td><?= $c + 1; ?></td>
                <td><?= $value->name_contact; ?></td>
                <td><?= $value->name_alias; ?></td>
                <td><?= $value->phone; ?></td>
                <td><?= $value->email; ?></td>
                <td><?= $value->address; ?></td>
                <td><?= $value->info_contact; ?></td>
                <td><?= $value->name_group; ?></td>
                <td class="text-center">
                  <a href="<?= base_url('contacts/edit/'.$value->id_contact); ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                  <form action="<?= site_url('contacts/delete/'.$value->id_contact); ?>" method="post" class="d-inline" onsubmit="return confirm('yakin mau menghapus??')">
                  <?php echo csrf_field(); ?>
                    <button class="btn btn-danger btn-sm">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </form>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        </div>
        <div class="card-footer">
          <!-- <h1>ini footer groups</h1> -->
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
<?= $this->endSection() ?>