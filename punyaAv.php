<?php
//contoh class
 class rumah{
     // contoh property
     public $namaRumah;
     public $noRumah;
     public $luasPetak;
     // contoh method
     public function getCetak(){
         return "$this->namaRumah, $this->noRumah, $this->luasPetak";
     }
     public function __construct($namaRumah="nama rumah ", $noRumah="no rumah ", $luasPetak=0){
         $this->namaRumah = $namaRumah;
         $this->noRumah = $noRumah;
         $this->luasPetak = $luasPetak;
     }
 }
 class cetakbikinrumah{
     public function cetakbikin($rumah){
         $str="{$rumah->namaRumah}, {$rumah->getcetak()}";
         return $str;
     }
 }

 // contoh objek nya
 $rumah1 = new rumah("Joglo", "21", "60 M");
 $rumah2 = new rumah("Balon", "44", "100 M");
 $rumah3 = new rumah("Gadang", "12", "80 M");
 $rumah4 = new rumah("Adat", "33", "100 M");
 $bikinrumah = new cetakbikinrumah();

 echo "Nama Rumah 1: " . $rumah1->getcetak();
 echo "<br>";
 echo "Nama Rumah 2: " . $rumah2->getcetak();
 echo "<br>";
 echo "Nama Rumah 3: " . $rumah3->getcetak();
 echo "<br>";
 echo "Nama Rumah 4: " . $rumah4->getcetak();
 echo "<br>";
 echo $bikinrumah-> cetakbikin($rumah1);


 ?>
