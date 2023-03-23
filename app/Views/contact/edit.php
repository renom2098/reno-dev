<?= $this->extend('layout/default') ?>

<?= $this->section('title'); ?>
<title>Edit Contact | Dev</title>
<?= $this->endsection('title'); ?>

<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Kontak</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">Contact</a></li>
              <li class="breadcrumb-item active">Edit Contact</li>
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
          <!-- <h1>Hello groups!</h1> -->
          <div>
            <a href="<?= site_url('contacts'); ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
          </div>
        </div>
        <div class="card-body col-md-6">
            <form action="<?= site_url('contacts/update/'); ?>" method="post" autocomplete="off">
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label>Nama Kontak*</label>
                    <input type="text" name="name_group" class="form-control" value="" require>
                </div>
                <div class="form-group">
                    <label>Info Kontak</label>
                    <textarea name="info_group" class="form-control" cols="30" rows="10"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Update</button>
                    <button type="reset" class="btn btn-secondary"><i class="fas fa-sync-alt"></i> Reset</button>
                </div>
            </form>
        </div>
        <div class="card-footer">
          <!-- <h1>ini footer groups</h1> -->
        </div>
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
<?= $this->endSection() ?>