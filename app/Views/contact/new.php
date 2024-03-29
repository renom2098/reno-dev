<?= $this->extend('layout/default') ?>

<?= $this->section('title'); ?>
<title>Create Contact | Dev</title>
<?= $this->endsection('title'); ?>

<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Kontak</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Kontak</a></li>
              <li class="breadcrumb-item active">Tambah Kontak</li>
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
            <a href="<?= base_url('contacts'); ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
          </div>
        </div>
        <div class="card-body col-md-6">
            <form action="<?= site_url('contacts'); ?>" method="post" autocomplete="off">
            <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label>Group*</label>
                  <select name="id_group" class="form-control" required>
                  <option value="" hidden></option>
                  <?php foreach ($groups as $key => $value) : ?>
                    <option value="<?= $value->id_group; ?>"><?= $value->name_group; ?></option>
                  <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                    <label>Nama Kontak*</label>
                    <input type="text" name="name_contact" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Nama Alias</label>
                    <input type="text" name="name_alias" class="form-control">
                </div>
                <div class="form-group">
                    <label>Telepon</label>
                    <input type="number" name="phone" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="address" class="form-control" cols="20" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label>Info (kota / instansi / dll)</label>
                    <textarea name="info_contact" class="form-control" cols="20" rows="10"></textarea>
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