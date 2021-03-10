<?php

/**
3. Buatlah class Tablet dengan beberapa property dan sebuah method didalamnya. Property
class tablet $merk, $camera, dan $memory Kemudian buat class handphone mewarisi class
tablet. dalam class handphone bisa mengakses seluruh property dan method apapun dari
class tablet misalkan ditambahkan $handphone_baru dari class handphone dan Method
beli_handphone(). Buatlah tiga code program yang berbeda tetapi menjalakan enkapsulasi
model pada objek : Public , Protect, Private yang mewariskan kelass induk (kemudian
jelaskan Perbedaanya).
 */

abstract class tablet
{
  public $merk = "nokia";
  protected $camera = "16 MB";
  private $memory = "160 GB";

  function bukaApp()
  {
    echo $this->memory;
  }
}

class handphone extends tablet
{
  public $handphone_baru;


  function beli_handphone()
  {
    echo $this->camera;
  }
}

$obj = new handphone();
echo $obj->merk; //nokia
echo $obj->camera; //fatal error
echo $obj->memory; //undefinied
echo $obj->bukaApp(); //160 GB
echo $obj->beli_handphone(); //16 GB

/**Kesimpulan
 * 1. property dengan visibility public bisa diakses dimanapun termasuk diluar kelas.
 * 2. property dengan visibility protected hanya bisa diakses oleh kelas itu sendiri atau turunan dari kelas tersebut
 * 3. property dengan visibility private hanya bisa diakses didalam kelas itu,
 * sehingga kelas yang lain tidak dapat merubahnya termasuk kelas turunannya sekalipun.
 */
