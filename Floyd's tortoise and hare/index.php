<?php  
  class CycleDetection{
    public function __construct(){
        
    }
    // Floyd's tortoise and hare
    public function floyd($nums){
      $tortoise = $nums[0];
      $hare     = $nums[0];
      $nData    = count($nums);

      while(true){
        if($hare == $nData || $tortoise == $nData){
          return "NO DUPLICATE";
        }
        $tortoise = $nums[$tortoise];
        $hare     = $nums[$nums[$hare]];
        echo "<pre>";
        echo "TORTOISE: ".$tortoise."\n";
        echo "HARE: ".$hare."\n";
        echo "</pre>";
        if ($tortoise == $hare){
          // echo "SAMA TORTOISE DAN HARE<br>";
          // echo $tortoise." ".$hare;
          break;
        }
      }
      $ptr1 = $nums[0];
      $ptr2 = $tortoise;
      while ($ptr1 != $ptr2){
        $ptr1 = $nums[$ptr1];
        $ptr2 = $nums[$ptr2];
      }
      return $ptr1;
    }
  }
  
  $arr      = [1,3,4,2,5,1];
  $detector = new CycleDetection();

  echo $detector->floyd($arr);
?>