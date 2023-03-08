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
              <li class="breadcrumb-item"><a href="#">Acara</a></li>
              <li class="breadcrumb-item active">Acara</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <!-- <h1>Hello Acara!</h1> -->
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
            <?php foreach ($acara as $ac => $value) : ?>
              <tr>
                <td><?= $ac + 1 ?></td>
                <td><?= $value->name_acara; ?></td>
                <td><?= $value->date_acara; ?></td>
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