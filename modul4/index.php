<?php 
  require_once 'class.php';
  require_once 'class2.php';

  $rekening1 = new PengambilanUang(5000);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <link rel="stylesheet" href="src/css/style.css">

    <title>Modul 3</title>
  </head>
  <body>

    <div class="container d-flex flex-column justify-content-center align-items-center">

      <h2 class="text-center">Praktikum 3</h3>
      <div class="row w-50">
        <div class="col border border-dark m-2">
          <h5 class="text-center">Soal 1</h5>
          <p class="m-2">
            <?php 
              echo $rekening1->getSaldo();
              echo '<br> -------------------------------- <br>';
              echo $rekening1->ambilUang(4500);
              echo '<br> -------------------------------- <br>';
              echo $rekening1->ambilUang(2500);
            ?>
          </p>
        </div>
      </div>
      </div>

     



      <div class="row">
        <div class="col d-flex flex-column justify-content-center align-items-center">
          <h5 class="text-center m-3">Soal 2</h5>
           <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
              Lihat Tabel
            </button>
        </div>
      </div>
    </div>

        <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
          <div class="modal-header ">
            <h5 class="modal-title" id="staticBackdropLabel">Tabel Data Object</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <table class="table-sm text-center">
            <thead class="thead-dark">
              <tr class="">
                <th scope="col">No</th>
                <th scope="col">Object</th>
                <th scope="col">Jumlah Roda</th>
                <th scope="col">Warna</th>
                <th scope="col">Bahan Bakar</th>
                <th scope="col">Kapasitas Mesin</th>
                <th scope="col">Muatan Maksimal</th>
                <th scope="col">Tarif Awal</th>
                <th scope="col">Tarif Per KM</th>
                <th scope="col">Jumlah Sadel</th>
                <th scope="col">Jumlah Gir</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <th scope="row">1</th>
                <td>Truk 1</td>
                <td><?= $truk1->getjmlRoda(); ?></td>
                <td><?= $truk1->getWarna(); ?></td>
                <td><?= $truk1->getBahanBakar(); ?></td>
                <td><?= $truk1->getKapasitaMesin(); ?></td>
                <td><?= $truk1->getMuatanMaks(); ?></td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Truk 2</td>
                <td><?= $truk2->getjmlRoda(); ?></td>
                <td><?= $truk2->getWarna(); ?></td>
                <td><?= $truk2->getBahanBakar(); ?></td>
                <td><?= $truk2->getKapasitaMesin(); ?></td>
                <td><?= $truk2->getMuatanMaks(); ?></td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Taksi 1</td>
                <td><?= $taksi1->getjmlRoda(); ?></td>
                <td><?= $taksi1->getWarna(); ?></td>
                <td><?= $taksi1->getBahanBakar(); ?></td>
                <td><?= $taksi1->getKapasitaMesin(); ?></td>
                <td>-</td>
                <td><?= $taksi1->getTarifAwal(); ?></td>
                <td><?= $taksi1->getTarifPerKm(); ?></td>
                <td>-</td>
                <td>-</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Taksi 2</td>
                <td><?= $taksi2->getjmlRoda(); ?></td>
                <td><?= $taksi2->getWarna(); ?></td>
                <td><?= $taksi2->getBahanBakar(); ?></td>
                <td><?= $taksi2->getKapasitaMesin(); ?></td>
                <td>-</td>
                <td><?= $taksi2->getTarifAwal(); ?></td>
                <td><?= $taksi2->getTarifPerKm(); ?></td>
                <td>-</td>
                <td>-</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Sepeda 1</td>
                <td><?= $sepeda1->getjmlRoda(); ?></td>
                <td><?= $sepeda1->getWarna(); ?></td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><?= $sepeda1->getJmlSadel(); ?></td>
                <td><?= $sepeda1->getJmlGir(); ?></td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Sepeda 2</td>
                <td><?= $sepeda2->getjmlRoda(); ?></td>
                <td><?= $sepeda2->getWarna(); ?></td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td>-</td>
                <td><?= $sepeda2->getJmlSadel(); ?></td>
                <td><?= $sepeda2->getJmlGir(); ?></td>
              </tr>
            </tbody>
          </table>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
   
    <script src="src/js/script.js"></script>
  </body>
</html>
