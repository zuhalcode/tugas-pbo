<?php 
    require_once 'class.php';
    require_once 'class2.php';
    require_once 'class3.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Modul 4</title>
  </head>
  <body>
    <div class="container">
      <h2 class="text-center my-2">Praktikum 4</h2>
      
      <div class="row mx-auto d-flex flex-column">
        <div class="col w-50 mx-auto text-center border">
          <h4 class="text-center p-1">Soal 1</h4>
          <p class="">
            <?= $dosen1->info() . "<br>"; ?>
            <?= $dosen2->info() . "<br>"; ?>
            <?= $dosen3->info() . "<br>"; ?>
          </p>
        </div>
      </div>

      <div class="row mx-auto w-75 d-flex flex-column border m-2">
        <h4 class="text-center p-2">Soal 2</h4>
        <div class="col w-75 mx-auto d-flex ">
          <form action="" method="post" class="d-flex">
            <input class="m-1" type="number" name="input1" >
            <input class="m-1" type="number" name="input2" >
            <input class="m-1" type="number" name="input3" >
            <button class="m-1" type="submit" name="submit">Submit</button>
          </form>
        </div>
        <center>
          <?php 
              error_reporting(0);
              if (isset($_POST['submit'])) {
                if (!$_POST['input3']) {
                  $value1 = new RerataNilai2($_POST['input1'], $_POST['input2']);
                  echo $value1->average(0);
                } else {
                  $value1 = new RerataNilai2($_POST['input1'], $_POST['input2']);
                  echo $value1->average($_POST['input3']);
                }
              }
            ?>
          </center>
        </div>

        <center class="w-25 mx-auto m-3">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary m-2 w-25" data-toggle="modal" data-target="#exampleModal">
            Soal 3
          </button>
        </center>

      <!-- Modal -->
      <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tabel Katak</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <table class="table">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Objek</th>
                  <th scope="col">Umur</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Panjang Ekor</th>
                  <th scope="col">Cara Bergerak</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>O1</td>
                  <td><?= $katak->getUmur(); ?></td>
                  <td><?= $katak->getNama(); ?></td>
                  <td></td>
                  <td><?= $katak->caraBergerak(); ?></td>
                </tr>

                <tr>
                <th scope="row">2</th>
                  <td>O2</td>
                  <td><?= $kecebong->getUmur(); ?></td>
                  <td><?= $kecebong->getNama(); ?></td>
                  <td><?= $kecebong->getPanjangEkor(); ?></td>
                  <td><?= $kecebong->caraBergerak(); ?></td>
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














    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html> 