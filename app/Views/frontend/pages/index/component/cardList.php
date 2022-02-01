<div class="col-md-9">
  <div class="row row-sm">
    <?php foreach($data as $v) { ?>
      <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
        <div class="product-card card">
          <div class="card-body h-100">
            <div class="d-flex">
              <?php if($v->status == 'BUKA'){?>
                <small class=" w-50 font-weight-bold text-warning">Bengkel buka</small>
              <?php }elseif($v->status == 'TUTUP'){?>
                <small class=" w-50 font-weight-bold text-danger">Bengkel sedang tutup</small>
              <?php }else{?>
                -
              <?php } ?>
            </div>
            <h3 class="h6 mb-0 font-weight-bold text-uppercase"><?= $v->name ?></h3>
            <div class="d-flex">
              <span class="text-secondary small text-uppercase"><?= $v->address ?></span>
            </div>
            <a class="badge badge-success text-white" target="_blank" href="https://www.google.com/maps/?q=<?= $v->latitude ?>,<?= $v->longitude ?>">
              <i class="fe fe-map-pin "></i> Buka Maps
            </a>
            <?php if($v->photo1){ ?>
              <img class="w-100 mt-2 mb-3 img-display" src="<?= base_url()?>/assets/images/<?= $v->photo1?>" alt="product-image" height="200" width="100" style="max-height:200px;" />
            <?php }elseif($v->photo2){?>
              <img class="w-100 mt-2 mb-3 img-display" src="<?= base_url()?>/assets/images/<?= $v->photo2?>" alt="product-image" height="200" width="100" style="max-height:200px;" />
            <?php }else if($v->photo3){?>
              <img class="w-100 mt-2 mb-3 img-display" src="<?= base_url()?>/assets/images/<?= $v->photo3?>" alt="product-image" height="200" width="100" style="max-height:200px;" />
            <?php }else{?>
              <img class="w-100 mt-2 mb-3 img-display" src="<?= base_url()?>/assets/img/ecommerce/01.jpg" alt="product-image" height="200" width="100" style="max-height:200px;" />
            <?php } ?>
            <a href="https://wa.me/<?= $v->phone_number ?>" target="_blank" class="btn btn-primary btn-block mb-0">
              <i class="fe fe-phone mr-1"></i>
              Hubungi
          </a>
          </div>
        </div>
      </div>
    <?php }?>
  </div>
</div>