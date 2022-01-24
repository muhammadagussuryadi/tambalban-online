<div class="row row-sm">
  <div class="col-md-12 mb-1 mg-t-10">
    <div class="table-responsive freeze-table-user">
      <table class="table text-md-nowrap" id="example1">
        <thead>
          <tr>
            <th class="wd-10p border-bottom-0">Action</th>
            <th class="wd-5p border-bottom-0">No</th>
            <th class="wd-20p border-bottom-0">Nama</th>
            <th class="wd-15p border-bottom-0">Username</th>
            <th class="wd-25p border-bottom-0">Email</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $key => $v) : ?>
            <tr>
              <td class="text-center">
                <a href="javascript:;" class="btn btn-sm btn-danger deleted-alert" rt-deleted="<?= base_url();?>/be/administrator/<?= $v['id']?>"><i class="fa fa-trash"></i></a>
                <a href="javascript:;" class="btn btn-sm btn-warning edit-form" rt-form="<?= base_url();?>/be/administratorForm/<?= $v['id']?>"><i class="fa fa-edit"></i></a>
              </td>
              <td><?= ++$key ?></td>
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