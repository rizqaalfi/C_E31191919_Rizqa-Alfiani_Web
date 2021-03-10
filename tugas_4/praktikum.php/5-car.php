<?php

//penerapan final untuk mencegah overriding

class car5
{
  final public function hello()
  {
    return "hello!";
  }
}

class sportcar5 extends car5
{
  /** 
   * akan terdapat pesan kesalahan, karena tidak bisa membuat overide dari method yg final
   * 
  public function hello()
  {
    return "haii !!";
  }


   */
}

$sportcar = new sportcar5();
echo $sportcar->hello();
