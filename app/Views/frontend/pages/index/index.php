<?= $this->extend('frontend/layouts/index'); ?>

<?= $this->section('content');?>

<div class="row row-sm">
    
  <?= $this->include('frontend/pages/index/component/search') ?>
  <?= $this->include('frontend/pages/index/component/cardList') ?>
    
</div>

<?= $this->endSection();?>