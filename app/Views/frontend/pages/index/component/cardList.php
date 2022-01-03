<div class="col-md-9">
  <div class="row row-sm">
    <?php foreach($data as $v) { ?>
      <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4">
        <div class="product-card card">
          <div class="card-body h-100">
            <div class="d-flex">
              <span class="text-secondary small text-uppercase"><?= $v->address ?></span>
            </div>
            <h3 class="h6 mb-0 font-weight-bold text-uppercase"><?= $v->name ?></h3>
            <small class="text-muted">5km, dari jarak kamu</small>
            <div class="d-flex">
            <h4 class="h5 w-50 font-weight-bold text-success">Buka</h4>
            </div>
            <!-- <img class="w-100 mt-2 mb-3" src="<?= base_url()?>/assets/img/ecommerce/01.jpg" alt="product-image" /> -->
            <img class="w-100 mt-2 mb-3" src="<?= $v->photo1?>" alt="product-image" height="200" width="100" />
            <button class="btn btn-primary btn-block mb-0">
              <i class="fe fe-phone mr-1"></i>
              Hubungi
            </button>
          </div>
        </div>
      </div>
    <?php }?>
  </div>
</div>