<?php
class Database
{
   private $db_host = 'localhost'; 
   private $db_user = 'root'; 
   private $db_pass = ''; 
   private $db_name = 'dms'; 
   
   public function connect(){
         if(!$this->con)
         {
            $myconn = @mysql_connect($this->db_host,$this->db_user,$this->db_pass);
            if($myconn)
            {
                $seldb = @mysql_select_db($this->db_name,$myconn);
                if($seldb)
                {
                    $this->con = true; 
                    return true; 
                } else
                {
                    return false; 
                }
            } else
            {
                return false; 
            }
         } else
         {
            return true; 
         }   
   }
}
?>
   