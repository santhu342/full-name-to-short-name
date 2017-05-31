<?php
  /**
   * Created by Santhosh Kumar Rajagiri.
   * Date: 31-05-2017
   * Converting Full length name to short name....
   * for example one string length is above 25 letters(including space) than converting to first word and last word is same and reaming words first letter and dot 
   * string is Mohan  Santhosh kumar rajagiri its comes Mohan S. K. Rajagiri like this
   */
   
   function converName($name){
    $str_count = strlen($name);
        if($str_count > 25)
        {
            $name = explode(" ",$name);
            $str_count = count($name);
                        
            $con_name = "";
            for($i=0; $i < $str_count; $i++ )
            {
                if($i == 0 || $i == $str_count-1)
                {
                    $con_name .= $name[$i]." ";
                }
                else
                {
                    $con_name .= $name[$i][0].". ";
                }
                
            }
            
            return $con_name;
        }
        return $name;

}
?>
