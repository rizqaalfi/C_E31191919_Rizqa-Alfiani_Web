<?php

/**
 * 
1. Buat sebuah class bernama class laptop.
2. Pada class laptop tersebut memiliki 2 properties dengan hak akses public, yaitu pemilik
dan merk. Pada class tersebut juga memiliki 3 methods, yaitu hidupkan_laptop(),
matikan_laptop() dan restart_laptop().
4. Untuk method hidupkan_laptop() berisi teks sebagai berikut:
“Hidupkan laptop [merk] punya [pemilik]”
5. Untuk method matikan_laptop() berisi teks sebagai berikut:
“Matikan laptop [merk] punya [pemilik]”
6. Untuk method restart_laptop() berisi teks sebagai berikut:
“Matikan laptop [merk] punya [pemilik]”
“Hidupkan laptop [merk] punya [pemilik]”
7. Buatlah 3 objek menggunakan class laptop sehingga menampilkan teks sebagai berikut:
a. Hidupkan laptop ASUS milik A.
b. Matikan laptop Acer milik B.
c. Matikan laptop Lenovo milik C. Hidupkan laptop Lenovo milik C.
 */

class laptop
{
  public $pemilik;
  public $merk;

  function hidupkan_laptop()
  {
    return "Hidupkan Laptop " . $this->merk . " punya " . $this->pemilik;
  }
  function matikan_laptop()
  {
    return "Matikan Laptop " . $this->merk . " punya " . $this->pemilik;
  }
  function restrat_laptop()
  {
    return "Matikan Laptop " . $this->merk . " punya " . $this->pemilik . "<br>" .
      "Hidupkan Laptop " . $this->merk . " punya " . $this->pemilik;
  }
}

$A = new laptop();
$B = new laptop();
$C = new laptop();

$A->merk = "Asus";
$B->merk = "Acer";
$C->merk = "Lenovo";

$A->pemilik = "A";
$B->pemilik = "B";
$C->pemilik = "C";

echo $A->hidupkan_laptop() . "<br><br>" .
  $B->matikan_laptop() . "<br><br>" .
  $C->restrat_laptop();
