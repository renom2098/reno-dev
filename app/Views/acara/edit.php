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
            <h1>Edit Acara</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Acara</a></li>
              <li class="breadcrumb-item active">Edit Acara</li>
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
            <a href="<?= site_url('acara'); ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
          </div>
        </div>
        <div class="card-body col-md-6">
            <form action="<?= site_url('acara/'.$acara->id_acara); ?>" method="post" autocomplete="off">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label>Nama Acara*</label>
                    <input type="text" name="name_acara" class="form-control" value="<?= $acara->name_acara; ?>" require>
                </div>
                <div class="form-group">
                    <label>Tanggal Acara*</label>
                    <input type="date" name="date_acara" class="form-control" value="<?= $acara->date_acara; ?>" require>
                </div>
                <div class="form-group">
                    <label>Info Acara</label>
                    <textarea name="info_acara" class="form-control" cols="30" rows="10"><?= $acara->info_acara; ?></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Update</button>
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