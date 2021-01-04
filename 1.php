<?php

class fungsiwow {

    //propery class atau atribut
     public $integer;
     public $x;
     public $i;
     public $wow;
     private  $obj;
     
     public function __construct()
     {
        // $this->obj=new fungsiwow;
     }
     public function wow($integer) {   
         if($integer<2){
            $this->x=$integer;
            $this->wow=$integer;
         }else{
            $this->x=$integer;
            $this->wow=$integer+1;
        }
          return $this;
     }
     public function tampilkan(){
         echo "x=".$this->x." hasilnya ".$this->wow."<hr>"; //untuk mengembalikan nilai dari instansiasi 
     }
}

class langkah2 {

    //propery class atau atribut
   
  
     public function wow($i,$hasilmin2,$hasilmin1) {   
       
            $this->x=$i;
            $this->wow=$hasilmin2+(3*$hasilmin1);
      
          return $this;
     }
     public function tampilkan(){
         echo "x=".$this->x." hasilnya ".$this->wow."<hr>"; //untuk mengembalikan nilai dari instansiasi 
     }
}

//ulangi sampai x
for($i=0;$i<=8;$i++){
    $mindua=$i-2;
    $minsatu=$i-1;
    if($i<2){
        $var[$i] = new fungsiwow();
        $var[$i]->wow($i);
        $var[$i]->tampilkan();
    }else{
        $var[$i] = new langkah2();
        $var[$i]->wow($i,$mindua,$minsatu);
        $var[$i]->tampilkan();
    }
}



var_dump($var[3]);



