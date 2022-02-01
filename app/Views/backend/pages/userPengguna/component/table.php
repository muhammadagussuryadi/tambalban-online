<div class="row row-sm">
  <div class="col-md-12 mb-1 mg-t-10">
    <div class="table-responsive freeze-table-user">
      <table class="table text-md-nowrap" id="example1">
        <thead>
          <tr>
            <th class="wd-5p border-bottom-0">No</th>
            <th class="wd-20p border-bottom-0">Photo</th>
            <th class="wd-20p border-bottom-0">Nama</th>
            <th class="wd-15p border-bottom-0">Username</th>
            <th class="wd-25p border-bottom-0">Email</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $key => $v) : ?>
            <tr>
              <td class="text-center"><?= ++$key ?></td>
              <td class="text-center">
                <?php if($v['photo']){?>
                <img src="<?= $v['photo'] ?>" alt="" width="50">
                <?php }?>
              </td>
              <td><?= $v['name'] ?></td>
              <td><?= $v['username'] ?></td>
              <td><?= $v['email'] ?></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>