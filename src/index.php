<?php

$total_bayar = 0;
$input_length = 0;

if (isset($_POST['hitung'])) {

   $input_length = $_POST['input_length'];

   for ($i = 0; $i < $input_length; $i++) {

      $kode_barang[$i] = $_POST['kode_barang_' . ($i + 1)];
      $jml_barang[$i] = $_POST['jml_barang_' . ($i + 1)];

      switch ($kode_barang[$i]) {
         case 'B001':
            $nama_barang[$i] = "Aqua Air Mineral 1500Ml";
            $harga_barang[$i] = 6400;
            break;

         case 'B002':
            $nama_barang[$i] = "Sania Minyak Goreng Refill 2000Ml";
            $harga_barang[$i] = 48900;
            break;

         case 'B003':
            $nama_barang[$i] = "Bear Brand Susu Encer Steril 189Ml";
            $harga_barang[$i] = 10500;
            break;

         case 'B004':
            $nama_barang[$i] = "Pronas Corned Beef 198G";
            $harga_barang[$i] = 22900;
            break;

         case 'B005':
            $nama_barang[$i] = "Sunlight Cairan Pencuci Piring Jeruk Nipis 700mL";
            $harga_barang[$i] = 23700;
            break;

         case 'B006':
            $nama_barang[$i] = "Lifebuoy Sabun Mandi Lemon Fresh 110G";
            $harga_barang[$i] = 6900;
            break;

         default:
            $nama_barang[$i] = "TIDAK TERSEDIA";
            $harga_barang[$i] = 0;
            break;
      }

      $total_per_barang[$i] = $jml_barang[$i] * $harga_barang[$i];

      $total_bayar += $total_per_barang[$i];
   }

   // var_dump($kode_barang);
   // var_dump($jml_barang);
   // var_dump($nama_barang);
   // var_dump($harga_barang);
   // var_dump($total_per_barang);
}

?>

<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Program Kasir</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@700&family=Montserrat:wght@400;500;700&family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="styles/main.css">
   <script src="https://kit.fontawesome.com/daa4449d64.js" crossorigin="anonymous"></script>
</head>

<body>
   <section>
      <div class="container">
         <div class="row main-container my-5 px-0">
            <div class="col-lg-8 daftar-barang-container">
               <h2 class="text-center">Daftar Barang</h2>
               <div class="table-responsive-lg my-5">
                  <table class="table table-borderless table-daftar-barang">
                     <thead>
                        <tr>
                           <th width="24%"><i class="fa-solid fa-hashtag"></i>&ensp;Kode</th>
                           <th><i class="fa-solid fa-box"></i>&ensp;Nama Barang</th>
                           <th width="30%"><i class="fa-solid fa-tag"></i>&ensp;Harga</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th>B001</th>
                           <td>Aqua Air Mineral 1500Ml</td>
                           <td>Rp. 6.400,-</td>
                        </tr>
                        <tr>
                           <th>B002</th>
                           <td>Sania Minyak Goreng Refill 2000Ml</td>
                           <td>Rp. 48.900,-</td>
                        </tr>
                        <tr>
                           <th>B003</th>
                           <td>Bear Brand Susu Encer Steril 189Ml</td>
                           <td>Rp. 10.500,-</td>
                        </tr>
                        <tr>
                           <th>B004</th>
                           <td>Pronas Corned Beef 198G</td>
                           <td>Rp. 22.900,-</td>
                        </tr>
                        <tr>
                           <th>B005</th>
                           <td>Sunlight Cairan Pencuci Piring Jeruk Nipis 700mL</td>
                           <td>Rp. 23.700,-</td>
                        </tr>
                        <tr>
                           <th>B006</th>
                           <td>Lifebuoy Sabun Mandi Lemon Fresh 110G</td>
                           <td>Rp. 6.900,-</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <!-- <div class="copyright text-center">
                  &copy;2022 <span>Muhammad Falah Abdurrafi</span>
               </div> -->
            </div>
            <div class="col-lg-4 pembayaran-container">
               <h2 class="text-center mb-5">Pembayaran</h2>

               <form action="" method="POST">
                  <input type="hidden" name="input_length" id="inputLength" value="1">
                  <div id="ulangBarangContainer">
                     <div class="row input-barang gx-2 mt-2" id="inputBarang-1">
                        <div class="col-lg-8">
                           <input type="text" name="kode_barang_1" class="form-control input-kode" placeholder="Kode Barang ...">
                        </div>
                        <div class="col-lg-4 input-jumlah-container">
                           <div class="input-jumlah-number-container">
                              <input type="number" name="jml_barang_1" class="form-control input-jumlah" value="1" min="1">
                           </div>
                           <button type="button" class="btn btn-plus-minus btn-minus" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                              <i class="fa-solid fa-minus"></i>
                           </button>
                           <button type="button" class="btn btn-plus-minus btn-plus" onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                              <i class="fa-solid fa-plus"></i>
                           </button>
                        </div>
                     </div>
                  </div>

                  <button type="button" class="btn btn-tambah-barang d-block mt-2" id="ulangBarang">
                     <i class="fa-solid fa-plus"></i>&ensp;Tambah barang...
                  </button>

                  <hr>

                  <input type="submit" name="hitung" value="Hitung" role="button" class="btn btn-hitung-pembayaran d-block mx-auto mt-4" />
               </form>

               <div class="total-pembayaran-container justify-content-center" id="totalPembayaran">

                  <h5 class="text-center mt-5 mb-3">Total Pembayaran :</h5>
                  <div class="total-pembayaran-nilai-container bg-white-transparent text-center">
                     <h4 class="my-2">Rp. <?= number_format($total_bayar, 0, ",", "."); ?>,-</h4>
                  </div>

                  <h5 class="text-center mt-5">Detail Pembayaran :</h5>
                  <?php for ($i = 0; $i < $input_length; $i++) : ?>
                     <div class="table-responsive total-pembayaran-detail mt-3">
                        <table class="table table-borderless table-pembayaran-detail mb-0" cellspadding="2px">
                           <tr class="detail-top">
                              <td><?= $nama_barang[$i]; ?></td>
                              <td>
                                 <p class="detail-jumlah"><?= $jml_barang[$i]; ?>x</p>
                              </td>
                           </tr>
                           <tr class="bg-white-transparent">
                              <td colspan="2" class="detail-harga text-center">Rp. <?= number_format($total_per_barang[$i], 0, ",", "."); ?>,-</td>
                           </tr>
                        </table>
                     </div>
                  <?php endfor; ?>
               </div>
            </div>
         </div>
      </div>
   </section>

   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   <script>
      $("#ulangBarang").click(function() {
         const node = document.getElementById('inputBarang-1');
         const clone = node.cloneNode(true);

         document.getElementById('ulangBarangContainer').appendChild(clone);

         $('.input-barang').last().prop('id', 'inputBarang-' + $('.input-barang').length);
         $('.input-kode').last().prop('name', 'kode_barang_' + $('.input-barang').length);
         $('.input-jumlah').last().prop('name', 'jml_barang_' + $('.input-barang').length);
         $('#inputLength').prop('value', $('.input-barang').length);
      });
   </script>
</body>

</html>