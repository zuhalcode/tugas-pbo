<?php 

class Orang
{
    protected $nama, $umur;

    public function __construct($nama, $umur)
    {
        $this->nama = $nama;
        $this->umur = $umur;
    }

}

class Dosen extends Orang
{
    private $nip;

    public function __construct($nama, $umur, $nip)
    {
        $this->nip = $nip;
        parent::__construct($nama, $umur);
    }

    public function info(){
        return $this->nama . ' berumur '. $this->umur. ' dengan nip : '. $this->nip;
    }
}

$dosen1 = new Dosen('Zuhal', 55, 49861);
$dosen2 = new Dosen('Dzakiyyul', 30, 19263);
$dosen3 = new Dosen("Ashfiya'", 25, 78923);


