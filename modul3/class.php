<?php 

class Komunitas
{
    private $member, $nama, $admin;
    public function __construct(Admin $admin, $nama, Member $member)
    {
        $this->admin = $admin;
        $this->nama = $nama;
        $this->member = $member;
    }

    public function getKomunitas(){
        return $this->nama . ' dengan admin '. $this->admin->getNama() . ' beranggotakan '. $this->member->getNama();
    }
}

class Admin 
{
    private $nama, $anggota, $jumlah;
    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function setAnggota(Member $anggota){
        $this->anggota = $anggota;
    }

    public function getAnggota(){
        return $this->anggota;
    }

    public function getAdmin(){
        return 'Admin ' . $this->nama . ' beranggotakan ' . $this->anggota->getNama();
    }

    public function getNama(){
        return $this->nama;
    }
    public function setJumlah(Member $nama){
        $this->jumlah = $nama;
    }
    public function getJumlah(){
        return 'Admin '. $this->nama . ' beranggotakan '. $this->jumlah->getNama() . ', dan '.$this->jumlah->getJumlah();
    }
}

class Member
{
    private $nama, $jumlah;
    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }
    public function setJumlah(Admin $nama){
        $this->jumlah = $nama;
    }
    public function getJumlah(){
        return 'Member '.$this->nama.' beradmin '. $this->jumlah->getNama();
    }
}


// Komposisi
$komunitas1 = new Komunitas(new Admin('Zuhal'), 'UInspiration', new Member('Alvin'));
echo $komunitas1->getKomunitas();
echo '<br>';
echo '<br>';

// Assosiasi Uni-Directional
$admin2 = new Admin('Arif');
$member2 = new Member('Hidayat');
$admin2->setAnggota($member2);
echo $admin2->getAdmin();
echo '<br>';
echo '<br>';

// Assosiasi Bi-Directional
$admin3 = new Admin('Syarif');
$member3 = new Member('Harun');
$admin3->setAnggota($member3);
$admin3->setJumlah($member3);
$member3->setJumlah($admin3);
echo $admin3->getJumlah();













