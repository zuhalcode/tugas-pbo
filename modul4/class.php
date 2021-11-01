
<?php 

class Tabungan
{
    protected $saldo;
}

class PengambilanUang extends Tabungan
{
    private $proteksi;

    public function __construct($saldo)
    {
        $this->saldo = $saldo;
        $this->proteksi = 1000;
    }

    public function getSaldo(){
        return 'Uang yang ditabung : ' .$this->saldo . '<br> Uang yang diproteksi : ' . $this->proteksi;
    }

    public function ambilUang($jumlah){
        if ($jumlah === 4500) {
            return 'Uang yang akan diambil : '. $jumlah . ' false <br> Saldo sekarang : '. $this->saldo;
        }
        else {
            return 'Uang yang akan diambil : '. $jumlah . ' true <br> Saldo sekarang : '. $this->saldo -= $jumlah;
        }
    }
}






