<form method="POST" action="{baseUrl}/be/bengkel" enctype="multipart/form-data">
  <div class="modal-header">
    <h6 class="modal-title">FORM DATA</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
  </div>
  <div class="modal-body">
    <div class="row row-sm mg-b-20">
      <input type="hidden" name="id" value="">
      <div class="col-lg-12 mg-b-10">
        <p class="mg-b-10">Nama Bengkel</p>
        <input type="text" name="name" class="form-control" placeholder="Nama" value="">
      </div>
      <div class="col-lg-6 mg-b-10">
        <p class="mg-b-10">No Hp/Whatsapp</p>
        <input type="text" name="phone_number" class="form-control" placeholder="No Hp/Whatsapp" value="">
      </div>
      <div class="col-lg-6 mg-b-10">
        <p class="mg-b-10">Owner</p>
        <input type="text" name="owner" class="form-control" placeholder="Owner" value="">
      </div>
      <div class="col-lg-4 mg-b-10">
        <p class="mg-b-10">Photo 1</p>
        <input type="file" name="photo1" class="form-control">
      </div>
      <div class="col-lg-4 mg-b-10">
        <p class="mg-b-10">Photo 2</p>
        <input type="file" name="photo2" class="form-control">
      </div>
      <div class="col-lg-4 mg-b-10">
        <p class="mg-b-10">Photo 3</p>
        <input type="file" name="photo3" class="form-control">
      </div>
      <div class="col-lg-12 mg-b-10">
        <p class="mg-b-10">Keterangan Alamat</p>
        <textarea name="address_detail" class="form-control" id="address_detail" rows="5"></textarea>
      </div>
      <div class="col-lg-12" style="height:400px" >
      <p class="mg-b-10">Alamat</p>
      <input id="map-search" name="address" class="form-control controls" type="text" placeholder="Cari Lokasi" size="104">
      <br>
      <input type="hidden" class="latitude" name="latitude">
      <input type="hidden" class="longitude" name="longitude">
      <input type="hidden" class="reg-input-city" placeholder="City">
      <span class="loading-maps"></span>
      <div id="map-canvas" style="height: 300px;width: 98%;position: absolute;"></div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn ripple btn-primary" type="submit">SIMPAN</button>
    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">BATAL</button>
  </div>
</form>

<script>
    var latData   = -6.5450531;
    var longData  = 106.2536119;
  </script>
  <script type="text/javascript" src="{baseUrl}/assets/js/master-maps.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key={googleKey}&libraries=places&callback=initialize"></script>