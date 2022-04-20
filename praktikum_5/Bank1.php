<?php

class Account
{
    public $nama;
    public $saldo;
    public $noRekening;

    public function __construct($nam, $sal, $rek)
    {
        $this->nama = $nam;
        $this->saldo = $sal;
        $this->noRekening = $rek;
    }

    public function deposit($nominal)
    {
        $this->saldo += $nominal;
    }
    public function withdraw($jumlah)
    {
        $this->saldo -= $jumlah;
    }
    public function cetak()
    {
        echo "No Account : " . $this->noRekening . "<br>";
        echo "Atas Nama : <b>" . $this->nama . "</b><br>";
        echo "Saldo Anda Sebesar : <b>" . $this->saldo . "</b><br><br>";
    }
}

class AccountBank extends Account
{
    public function customerTransfer(Account $nam, $duit)
    {
        $this->saldo -= $duit;
        $nam->deposit($duit);
    }
}

$ahmad = new AccountBank('Ahmad', 6000000, 'C001');
$budi = new AccountBank('Budi', 5350000, 'C002');
$kurniawan = new AccountBank('kurniawan', 2500000, 'C003');

echo "Saldo awal <br>";

$ahmad->cetak();
$ahmad->deposit(1000000);
echo "Saldo deposit Rp. 1 Jt  <br>";
$ahmad->cetak();

echo "Saldo awal <br>";
$budi->cetak();
$ahmad->customerTransfer($budi, 1500000);
echo "Setelah Transfer Rp. 1,5 Jt oleh Ahmad <br>";
$budi->cetak();

echo "Kemudian Budi menarik uangnya Rp. 2,5 Jt <br>";
$budi->withdraw(2500000);
$budi->cetak();