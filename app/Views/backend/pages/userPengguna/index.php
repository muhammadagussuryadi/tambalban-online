<?= $this->extend('backend/layouts/index'); ?>

<?= $this->section('content');?>

<?= $this->endSection(); ?><?= $this->extend('backend/layouts/index'); ?>

<?= $this->section('content');?>

<div class="row">
  <div class="col-lg-12 col-md-12">
    <div class="card">
      <div class="card-header tx-medium bd-0 bg-light">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 pt-1">
              TABEL DATA
          </div>
        </div>
      </div>
      <div class="card-body">
        <?= $this->include('backend/pages/userPengguna/component/table'); ?>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>