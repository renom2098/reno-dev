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
            <h1>Tambah Group Kontak</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Group</a></li>
              <li class="breadcrumb-item active">Tambah Group</li>
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
          <!-- <h1>Hello Group!</h1> -->
          <div>
            <a href="<?= base_url('groups'); ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
          </div>
        </div>
        <div class="card-body col-md-6">
            <?php $validation = \Config\Services::validation(); ?>
            <form action="<?= site_url('groups'); ?>" method="post" autocomplete="off">
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label>Nama Group*</label>
                    <input type="text" name="name_group" value="<?= old('name_group'); ?>" class="form-control <?= $validation->hasError('name_group') ? 'is-invalid' : null ?>">
                    <div class="invalid-feedback">
                      <?= $validation->getError('name_group'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Info Group</label>
                    <textarea name="info_group" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Tambah</button>
                    <button type="reset" class="btn btn-secondary"><i class="fas fa-sync-alt"></i> Reset</button>
                </div>
            </form>
        </div>
        <div class="card-footer">
          <!-- <h1>ini footer Group</h1> -->
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
<?= $this->endSection() ?>