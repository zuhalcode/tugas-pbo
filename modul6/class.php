<?php

class Pegawai2
{
    protected $nama;
    
    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getGaji()
    {
        return Manajer2::getGaji();
    }

    public function getKendaraan()
    {
        return Kurir::getKendaraan();
    }
    

}

class Manajer2 extends Pegawai2
{
    private $gaji;

    public function __construct($nama, $gaji)
    {
        $this->gaji = $gaji;
        parent::__construct($nama);
    }

    public function getGaji()
    {
        return $this->gaji;
    }
}

class Kurir extends Pegawai2
{
    private $kendaraan;

    public function __construct($nama, $kendaraan)
    {
        $this->kendaraan = $kendaraan;
        parent::__construct($nama);
    }

    public function getKendaraan()
    {
        return $this->kendaraan;
    }
    

}

class Info
{
    public static function info(Pegawai2 $pegawai)
    {
        return 'Manajer ' . $pegawai->getNama() . ' mendapatkan gaji sebesar Rp. ' . number_format($pegawai->getGaji())  ;
    }

    public static function infoKurir(Pegawai2 $pegawai)
    {
        return 'Kurir ' . $pegawai->getNama() . ' mendapatkan hadiah ' . $pegawai->getKendaraan();
    }
}

$manajer1 = new Manajer2('Zuhal', 50000000);
$kurir1 = new Kurir('Arif', 'Lamborghini');