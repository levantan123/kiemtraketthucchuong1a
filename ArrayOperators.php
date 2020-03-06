<?php
class ArrayOperators {
  public $arr = [];
  /**public function __contruct($arr){
      $this->arr = $arr;
      //$this->sum=$sum;
      //$this->dem=$dem;
  }
  **/
  // Hàm đọc file
  public function readFile(){
    $f = fopen("numbers.txt","r");

    $line = fgets($f);
    $this->arr = explode(" ",$line);     
    print_r (explode(" ",$line));
  }
  
  
  // Hàm tính giá trị trung bình
  public function averageArray(){
    
    $lenght = count($this->arr);
    $this->sum=0;
    for($i=0;$i<$lenght;$i++){      
      $this->sum+=$this->arr[$i];
   
    }
    echo "Gia tri trung binh la: ".$this->sum/$lenght."\n";
  }
  
  
  // Hàm đếm chẵn lẻ
  public function countEvens(){
    $this->demle=0;
    $lenght=count($this->arr);
    for($i=0;$i<$lenght;$i++){
      if($this->arr[$i]%2!=0){
        $this->demle++;
        }
    }
    $a=$lenght-$this->demle;
    echo "Cac so le la: ".$this->demle."\n";
    echo "Cac so chan la: ".$a."\n";   
  }
  
  
  // Hàm sắp xếp giảm dần
  public function decreaseArray(){
    $lenght=count($this->arr);
   for($i=0;$i<$lenght-1;$i++){
     for($j=$i+1;$j<$lenght;$j++){
      if(($this->arr[$i])< ($this->arr[$j])){

        $this->tg = $this->arr[$i];
        $this->arr[$i] = $this->arr[$j];
        $this->arr[$j] = $this->tg;        
    }
      
     }
   }
   echo "Mang da sap xep la: "."\n";
   for($i = 0; $i <$lenght; $i++){
       print_r (explode(" ",$this->arr[$i]));
   }
    //$a = implode(",",$this->arr);
    //arsort($a);
    //echo "Mang sau khi sap xep la: ".$a."\n";
    //echo "Mang sau khi sap xep la: ".$this->arr[$j]."\n";
  }
  
  // Hàm tìm max2,min2
  public function min2Arraymax2Array (){
    //$this->decreaseArray();
    $lenght=count($this->arr);
    $a= $lenght-1; //$lenght-2
    unset($this->arr[0]);
    //unset($this->arr[]); 
    echo "So lon thu hai la: ".$this->arr[1]."\n";
    echo "So be thu hai la: ".$this->arr[$a]."\n";

  }
  
  // Hàm tính khoảng cách max,min
  public function bigSmallDiff(){
    $lenght=count($this->arr);
    for($i=0;$i<$lenght;$i++){
      if(($this->arr[$i]-$this->arr[$i+1])<($this->arr[$i+1]-$this->arr[$i+2])){
          $this->min = $this->arr[$i]-$this->arr[$i+1];
      }else
        $this->max=($this->arr[$i+1])-($this->arr[$i+2]);
      
    }
    echo "Khoang cach lon nhat giua hai so la: ".$this->max."\n";
    echo "Khoang cach nho nhat giua hai so la: ".$this->min."\n";
  }  
}


$arrOpt=new ArrayOperators();
//$arrOpt->readFile();
//$arrOpt->averageArray();
//$arrOpt->countEvens();
//$arrOpt->decreaseArray();
//$arrOpt->min2Arraymax2Array();
//$arrOpt->bigSmallDiff();

// Ghi file
$fp = fopen('results.txt', 'w');
fwrite($fp,$arrOpt->readFile());
fwrite($fp,$arrOpt->averageArray());
fwrite($fp,$arrOpt->countEvens());
fwrite($fp,$arrOpt->decreaseArray());
fwrite($fp,$arrOpt->min2Arraymax2Array());
fwrite($fp,$arrOpt->bigSmallDiff());
fclose($fp);
?>