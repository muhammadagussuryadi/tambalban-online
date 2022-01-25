<form method="POST" action="{baseUrl}/be/administrator" enctype="multipart/form-data">
  <div class="modal-header">
    <h6 class="modal-title">FORM DATA</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
  </div>
  <div class="modal-body">
    <div class="row row-sm mg-b-20">
      <input type="hidden" name="id" value="{id}">
      <div class="col-lg-6 mg-b-10">
        <p class="mg-b-10">Nama </p>
        <input type="text" name="name" class="form-control" placeholder="Nama" value="{name}">
      </div>
      <div class="col-lg-6 mg-b-10">
        <p class="mg-b-10">Email</p>
        <input type="email" name="email" class="form-control" placeholder="Email" value="{email}">
      </div>
      <div class="col-lg-6 mg-b-10">
        <p class="mg-b-10">Username</p>
        <input type="text" name="username" class="form-control" placeholder="Username" value="{username}">
      </div>
      <div class="col-lg-6 mg-b-10">
        <p class="mg-b-10">Password</p>
        <input type="password" name="password" class="form-control" placeholder="Password" value="">
        <input type="hidden" name="passwordOld" class="form-control" placeholder="Password" value="{password}">
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn ripple btn-primary" type="submit">SIMPAN</button>
    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">BATAL</button>
  </div>
</form>
