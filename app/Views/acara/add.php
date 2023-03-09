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
            <h1>Tambah Acara</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Acara</a></li>
              <li class="breadcrumb-item active">Tambah Acara</li>
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
          <div>
            <a href="<?= base_url('acara'); ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
          </div>
        </div>
        <div class="card-body col-md-6">
            <form action="<?= base_url('acara'); ?>" method="post" autocomplete="off">
                <div class="form-group">
                    <label>Nama Acara*</label>
                    <input type="text" name="name_acara" class="form-control" require>
                </div>
                <div class="form-group">
                    <label>Tanggal Acara*</label>
                    <input type="date" name="date_acara" class="form-control" require>
                </div>
                <div class="form-group">
                    <label>Info Acara</label>
                    <textarea name="info_acara" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Tambah</button>
                    <button type="reset" class="btn btn-secondary"><i class="fas fa-sync-alt"></i> Reset</button>
                </div>
            </form>
        </div>
        <div class="card-footer">
          <!-- <h1>ini footer acara</h1> -->
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
<?= $this->endSection() ?>