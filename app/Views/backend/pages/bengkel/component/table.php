<div class="row row-sm">
  <div class="col-md-12 mb-1 mg-t-10">
    <div class="table-responsive freeze-table-user">
      <table class="table text-md-nowrap" id="example1">
        <thead>
          <tr>
            <th class="wd-10p border-bottom-0">Action</th>
            <th class="wd-5p border-bottom-0">No</th>
            <th class="wd-10p border-bottom-0">Photo</th>
            <th class="wd-20p border-bottom-0">Nama</th>
            <th class="wd-20p border-bottom-0">No Hp/Whatsapp</th>
            <th class="wd-25p border-bottom-0">Alamat</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $key => $v) : ?>
            <tr>
              <td class="text-center">
                <?php if(session()->login_session['id'] == $v['id_user'] || session()->login_session['role_user'] == 0){?>
                <a href="javascript:;" class="btn btn-sm btn-danger deleted-alert" rt-deleted="<?= base_url();?>/be/bengkel/<?= $v['id']?>"><i class="fa fa-trash"></i></a>
                <a href="javascript:;" class="btn btn-sm btn-warning edit-form" rt-form="<?= base_url();?>/be/bengkelForm/<?= $v['id']?>"><i class="fa fa-edit"></i></a>
                <?php }else{ ?>
                  --
                <?php } ?>
              </td>
              <td><?= ++$key ?></td>
              <td class="text-center">
                <img class="w-100 mt-2 mb-3" src="<?= base_url()?>/assets/images/<?= $v['photo1']?>" alt="product-image" height="50" width="50" />
              </td>
              <td>
                <?= $v['name'] ?>
                <?php if($v['status'] == 'BUKA'){?>
                  <br>
                  <span class="badge badge-success">BUKA</span>
                <?php }elseif($v['status'] == 'TUTUP'){?>
                  <br>
                  <span class="badge badge-danger">TUTUP</span>
                <?php }else{?>
                  <br>
                  <span class="badge badge-dark">STATUS BELUM DISET</span>
                <?php }?>
              </td>
              <td>
                <?= $v['owner'] ?><br>
                <?= $v['phone_number'] ?>
              </td>
              <td>
                <?= $v['address'] ?>
                <br>
                <?= $v['address_detail'] ?>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>