<?php 
    require_once 'classes/class.php';
    require_once 'classes/class2.php';
    require_once 'classes/class3.php';
    require_once 'classes/class4.php';

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Modul 7</title>
</head>

<body>
    <div class="container mt-4 mx-auto w-75 ">
        <h3 class="text-center">Praktikum 6</h3>
        <div class="row mx-auto p-5 bg-dark">
            <div class="col-3 ">
                <a href="" class="btn btn-primary mx-5 px-3 py-2" data-toggle="modal" data-target="#soal1">Soal 1</a>
            </div>
            <div class="col-3 ">
                <a href="" class="btn btn-primary mx-5 px-3 py-2" data-toggle="modal" data-target="#soal2">Soal 2</a>
            </div>
            <div class="col-3 ">
                <a href="" class="btn btn-primary mx-5 px-3 py-2 " data-toggle="modal" data-target="#soal3">Soal 3</a>
            </div>
            <div class="col-3">
                <a href="" class="btn btn-primary mx-5 px-3 py-2 " data-toggle="modal" data-target="#soal4">Soal 4</a>
            </div>
        </div>
    </div>

    <!-- Modal Soal 1 -->
    <div class="modal fade" id="soal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Soal 1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mx-auto">
                        <div class="col">
                            <?php 
                                echo $truck1->getMaxLoad() . '<br>';
                                echo $truck1->addBox(3000) . '<br>';
                                echo $truck1->addBox(1000) . '<br>';
                                echo $truck1->addBox(6000) . '<br>';
                                echo $truck1->addBox(8000) . '<br>';
                                echo "Bahan bakar yang dibutuhkan sebanyak " . $truck1->calcFuelNeeds() . ' Liter';
                            ?>
                        </div>
                    </div>
                    <div class="row mx-auto mt-3">
                        <div class="col">
                            <?php 
                                echo 'Maksimal muatan Perahu adalah ' . $riverBarge1->getMaxLoad() . '<br>';
                                echo $riverBarge1->addBox(3000) . '<br>';
                                echo $riverBarge1->addBox(1000) . '<br>';
                                echo $riverBarge1->addBox(6000) . '<br>';
                                echo $riverBarge1->addBox(8000) . '<br>';
                                echo $riverBarge1->addBox(9000) . '<br>';
                                echo "Bahan bakar yang dibutuhkan sebanyak " . $riverBarge1->calcFuelNeeds() . ' Liter';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Soal 2 -->
    <div class="modal fade" id="soal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Soal 2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mx-auto">
                        <div class="col">
                            <?php 
                                echo $superman->land() . '<br>';
                                echo $superman->takeOff() . '<br>';
                                echo $superman->fly() . '<br>';
                                echo $superman->leapBuilding() . '<br>';
                                echo $superman->stopBullet() . '<br><br>';

                                echo $bird->buildNest() . '<br>';
                                echo $bird->takeOff() . '<br>';
                                echo $bird->fly() . '<br>';
                                echo $bird->land() . '<br>';
                                echo $bird->layEggs() . '<br><br>';

                                echo $airplane->takeOff() . '<br>';
                                echo $airplane->fly() . '<br>';
                                echo $airplane->land() . '<br>';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Soal 3 -->
    <div class="modal fade" id="soal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Soal 3</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mx-auto">
                        <div class="col">
                            <?php 
                                echo $singa->eat() . '<br><br>';

                                echo $manusia->eat() . '<br><br>';

                                echo $airplane2->getMaxLoad() . '<br>';
                                echo $airplane2->addBox(5000) . '<br>';
                                echo $airplane2->addBox(7000) . '<br>';
                                echo $airplane2->addBox(3000) . '<br>';
                                echo $airplane2->addBox(2000) . '<br>';
                                echo $airplane2->calcFuelNeeds() . ' liter<br>';
                                echo $airplane2->takeOff() . '<br>';
                                echo $airplane2->fly() . '<br>';
                                echo $airplane2->land() . '<br><br>';

                                echo $superman2->eat() . '<br>';
                                echo $superman->land() . '<br>';
                                echo $superman->takeOff() . '<br>';
                                echo $superman->fly() . '<br>';
                                echo $superman->leapBuilding() . '<br>';
                                echo $superman->stopBullet() . '<br>';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Soal 4 -->
    <div class="modal fade" id="soal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Soal 4</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mx-auto">
                        <div class="col">
                            <?php 
                                echo $riverBarge2->getMaxLoad() . '<br>';
                                echo $riverBarge2->addBox(12000) . '<br>';
                                echo $riverBarge2->addBox(15000) . '<br>';
                                echo $riverBarge2->addBox(3000) . '<br>';
                                echo $riverBarge2->addBox(1000) . '<br>';
                                echo $riverBarge2->dock() . '<br>';
                                echo $riverBarge2->cruise() . '<br>';
                                echo $riverBarge2->calcFuelNeeds() . '<br><br>';

                                echo $seaPlane->getMaxLoad() . '<br>';
                                echo $seaPlane->addBox(12000) . '<br>';
                                echo $seaPlane->addBox(8000) . '<br>';
                                echo $seaPlane->addBox(3000) . '<br>';
                                echo $seaPlane->dock() . '<br>';
                                echo $seaPlane->cruise() . '<br>';
                                echo $seaPlane->takeOff() . '<br>';
                                echo $seaPlane->fly() . '<br>';
                                echo $seaPlane->land() . '<br>';
                                echo $seaPlane->calcFuelNeeds() . '<br><br>';

                                echo $helicopter->getMaxLoad() . '<br>';
                                echo $helicopter->addBox(8000) . '<br>';
                                echo $helicopter->addBox(2000) . '<br>';
                                echo $helicopter->addBox(3000) . '<br>';
                                echo $helicopter->takeOff() . '<br>';
                                echo $helicopter->fly() . '<br>';
                                echo $helicopter->land() . '<br>';
                                echo $helicopter->calcFuelNeeds() . '<br><br>';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>