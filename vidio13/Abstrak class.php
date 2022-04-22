<?php
class buah {
    private $warna;
    public function makan (){
        //kunyah
        //nyamm..nyam..nyam
    }
    public function setWarna($warna){
        $this->warna = $warna;
    }
}

class Apel extends Buah{
    public function makan(){
        //kunyah
        //sampai bagian tengah
    }
}
class Jeruk extends Buah{
    public function makan(){
        ///makan
        ///dikupas
        
    }
}