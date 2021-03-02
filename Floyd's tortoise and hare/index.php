<?php  
  class CycleDetection{
    public function __construct(){
        
    }
    // Floyd's tortoise and hare
    public function findDuplicate($nums){
      $tortoise = $nums[0];
      $hare = $nums[0];
      echo "<pre>";
      print_r ($nums);
      echo "</pre>";
      while(true){
        $tortoise = $nums[$tortoise];
        $hare = $nums[$nums[$hare]];
        echo "<pre>";
        echo $tortoise."\n";
        echo $hare."\n";
        echo "</pre>";
        if ($tortoise == $hare){
          echo "SAMA TORTOISE DAN HARE<br>";
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
  
  $arr      = [3,1,3,4,2,5,5];
  $detector = new CycleDetection();

  echo $detector->findDuplicate($arr);
?>