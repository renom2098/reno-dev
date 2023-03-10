<?= $this->extend('layout/default') ?>

<?= $this->section('title'); ?>
<title>Acara | Dev</title>
<?= $this->endsection('title'); ?>

<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Acara</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Acara</a></li>
              <li class="breadcrumb-item active">Acara</li>
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

    <?php if(session()->getFlashdata('error')) : ?>
      <div class="alert alert-Danger alert-dismissible show fade">
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
          <!-- <h1>Hello Acara!</h1> -->
          <div>
            <a href="<?= base_url('acara/add'); ?>" class="btn btn-primary">Tambah Data</a>
          </div>
        </div>
        <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th style="width: 100px">Nama Acara</th>
              <th style="width: 10px">Tanggal Acara</th>
              <th style="width: 10px">Info</th>
              <th style="width: 40px">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($acara as $ac => $value) : ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $value->name_acara; ?></td>
                <td><?= date('d/m/Y', strtotime($value->date_acara)); ?></td>
                <td><?= $value->info_acara; ?></td>
                <td class="text-center">
                  <a href="<?= $value->id_acara; ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                  <a href="<?= $value->id_acara; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        </div>
        <div class="card-footer">
          <!-- <h1>ini footer acara</h1> -->
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
<?= $this->endSection() ?>