<?php
class PlayerBLK{

  var $NM;

  var $PS;
  var $AC;
  var $IN;
  var $TE;
  var $ME;
  var $MA;
  var $PH;
  var $EC;
  var $PC;
  var $LO;
  var $CH;
 // var $LL;

  function __construct( $par1, $par2, $par3, $par4, $par5, $par6, $par7, $par8, $par9, $par10, $par11, $par12) {
   
   $this->NM = $par1;

   $this->PS = $par2;
   $this->AC = $par3;
   $this->IN = $par4;
   $this->TE = $par5;
   $this->ME = $par6;
   $this->MA = $par7;
   $this->PH = $par8;
   $this->EC = $par9;
   $this->PC = $par10;
   $this->LO = $par11;
   $this->CH = $par12;
  // $this->LL = 0;
  }
}

class PlayerDEF{

  var $NM = "Leon";

  var $PS=4;
  var $AC=array(1,0,0,1,0,1,1,1,0,1);
  var $IN=array(1,1,1,1,1,1);
  var $TE=array(0,0,1,0);
  var $ME=array(1,0,1,1);
  var $MA=array(1,0,1);
  var $PH=array(1,1,1);
  var $EC=array(0,0,0,0,0,0,0,0,0,0,0,0,0);
  var $PC=array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
  var $LO="begin";
  var $CH=1;
  //var $LL=0;

}

?>