 <?php
 




     

  function Status($input_name,$i=null)
        {
            $GLOBALS['Status'] = $arr = array('1' =>"Yes" ,'0' =>"No");

                echo "<select name=".$input_name." class='form-control'>
                <option value=''>Select Status</option>
                ";
               foreach ($GLOBALS['Status'] as $k => $v) {
                if($k == @$i)
                {
                echo"<option value=".$k." selected>".$v." </option>";
                }
                else
                {
                    echo"<option value=".$k.">".$v." </option>";
                }
            }
            echo "</select>";
        }

        


       

         function StatusName($value)
        {   
            $arr = array('1' =>"Yes" ,'0' =>"No");
           foreach ($arr as $k => $v) {
              if($k == $value){
                echo $v;
              }
           }
        }

       

          


?>