<?= $this->extend('backend/layouts/index'); ?>

<?= $this->section('content');?>

<div class="row row-sm content-push ">

</div>

<script type="text/javascript">
  $(document).ready(function(){
    $.ajax({
      url:'<?= base_url();?>/be/dashboard-content',
      method: 'GET',
    }).done(function(data){
      $(".content-push").html(data);
    }).fail(function(data){
      alert("failed load");
    })
  });
</script>

<?= $this->endSection();?>