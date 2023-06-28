<div class="row gx-2 mt-2">
   <div class="col-lg-8">
      <input type="text" name="kode_barang" class="form-control input-kode" id="inputKode" placeholder="Kode Barang ...">
   </div>
   <div class="col-lg-4 input-jumlah-container">
      <div class="input-jumlah-number-container">
         <input type="number" name="jml_barang" class="form-control input-jumlah" id="inputJumlah" value="1" min="1">
      </div>
      <button type="button" class="btn btn-plus-minus btn-minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
         <i class="fa-solid fa-minus"></i>
      </button>
      <button type="button" class="btn btn-plus-minus btn-plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
         <i class="fa-solid fa-plus"></i>
      </button>
   </div>
</div>