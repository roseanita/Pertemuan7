<?php
class M_Harga extends CI_Model
{
    public $merk, $harga;

    public function getHarga($merk = null)
    {
        $this->merk = $merk;
        if ($this->merk == 'Nike') {
            $this->harga = 375000;
        } elseif ($this->merk == 'Adidas') {
            $this->harga = 300000;
        } elseif ($this->merk == 'Kickers') {
            $this->harga = 250000;
        } elseif ($this->merk == 'Eiger') {
            $this->harga = 275000;
        } elseif ($this->merk == 'Buccheri') {
            $this->harga = 400000;
        }

        return $this->harga;
    }
}
