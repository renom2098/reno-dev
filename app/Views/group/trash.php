<?= $this->extend('layout/default') ?>

<?= $this->section('title'); ?>
<title>Group | Dev</title>
<?= $this->endsection('title'); ?>

<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Group Kontak - Trash</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Group</a></li>
              <li class="breadcrumb-item active">Sampah Group Kontak</li>
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
                <a href="<?= base_url('groups'); ?>" class="btn btn-primary">Back</a>
              </div>
              <div class="float-right">
                <a href="<?= base_url('groups/restore'); ?>" class="btn btn-info btn-sm">Restore All</a>
                <form action="<?= base_url('groups/delete2'); ?>" method="post" class="d-inline" onsubmit="return confirm('yakin mau menghapus permanen??')">
                  <?= csrf_field(); ?>
                    <button class="btn btn-danger btn-sm">Delete All</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th style="width: 10px">#</th>
              <th style="width: 100px">Nama Group</th>
              <th style="width: 10px">Info</th>
              <th style="width: 40px">Action</th>
            </tr>
          </thead>
          <tbody>
          <?php $no = 1; ?>
            <?php foreach ($groups as $g => $value) : ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $value->name_group; ?></td>
                <td><?= $value->info_group; ?></td>
                <td class="text-center">
                  <a href="<?= base_url('groups/restore/'.$value->id_group); ?>" class="btn btn-info btn-sm">Restore</a>
                  <form action="<?= base_url('groups/delete2/'.$value->id_group); ?>" method="post" class="d-inline" onsubmit="return confirm('yakin mau menghapus permanen??')">
                  <?= csrf_field(); ?>
                    <button class="btn btn-danger btn-sm">Delete Permanently</button>
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