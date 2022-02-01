<div class="col-md-3 mb-3 mb-md-0">
    <form method="GET">
    <div class="card">
      <h5 class="m-0 p-3 card-title bg-light border-bottom">Cari Bengkel Disini</h5>
      <div class="py-2 px-3">
        <input type="text" name="keyword" class="form-control" placeholder="keyword" value="<?php echo $keyword;?>">
      </div>
      <!-- <h5 class="m-0 p-3 card-title bg-light border-bottom">Jarak</h5>
      <div class="py-2 px-3">
        <label class="p-1 d-flex align-items-center">
          <select class="select2 form-control" name="" id="">
            <option value="5">5 KM</option>
            <option value="10">10 KM</option>
            <option value="15">15 KM</option>
            <option value="20">20 KM</option>
          </select>
        </label>
      </div> -->
      <!-- <h5 class="m-0 p-3 card-title bg-light border-bottom border-top">Harga</h5>
      <div class="p-3 d-flex align-items-center">
        <div class="w-50">
          <input placeholder="10.000" class="form-control rounded-0" />
        </div>
        <span class="h4 m-0 font-weight-normal px-2">-</span>
        <div class="w-50">
          <input placeholder="20.000" class="form-control rounded-0" />
        </div>
      </div> -->
      <div class="px-3 py-2 border-top">
        <button class="btn btn-danger btn-block">
          <i class="fe fe-search"> Cari</i>
        </button>
        <?php if($keyword){?>
          <a href="/" class="btn btn-warning btn-block" >
            <i class="fe fe-refresh-cw"> Reset</i>
          </a>
        <?php }?>
      </div>
    </div>
  </form>
</div>