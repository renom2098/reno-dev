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
            <h1>Data Group Kontak</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Group</a></li>
              <li class="breadcrumb-item active">Group Kontak</li>
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
          <div>
            <a href="<?= base_url('groups/new'); ?>" class="btn btn-primary">Tambah Data</a>
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
                  <a href="<?= base_url('group/edit/'.$value->id_group); ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                  <form action="<?= site_url('group/'.$value->id_group); ?>" method="post" class="d-inline" onsubmit="return confirm('yakin mau menghapus??')">
                  <?php echo csrf_field(); ?>
                  <input type="hidden" name="_method" value="DELETE">
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