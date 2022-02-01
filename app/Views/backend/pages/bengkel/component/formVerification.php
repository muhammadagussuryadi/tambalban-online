<form method="POST" action="{baseUrl}/be/bengkelVerification" enctype="multipart/form-data">
  <div class="modal-header">
    <h6 class="modal-title">FORM DATA</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
  </div>
  <div class="modal-body">
    <div class="row row-sm mg-b-20">
      <input type="hidden" name="id" value="{id}">
      <div class="col-lg-6 mg-b-10">
        <p class="mg-b-10">Status Bengkel</p>
        <select class="form-control select2" name="verification" style="width:100%;">
          <option value="">--Pilih Status--</option>
          <option value="1" {if $verification==1}selected{endif}>Izinkan Publish</option>
          <option value="2" {if $verification==2}selected{endif}>Tolak</option>
        </select>
      </div>
      <div class="col-lg-12 mg-b-10">
        <p class="mg-b-10">Catatan</p>
        <textarea name="verification_note" class="form-control" id="verification_note" rows="5">{verification_note}</textarea>
        <span class="text-danger">
          <small>*lengkapi jika menolak bengkel</small>
        </span>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn ripple btn-primary" type="submit">SIMPAN</button>
    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">BATAL</button>
  </div>
</form>