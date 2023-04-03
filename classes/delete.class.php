<?php
    
    include_once 'include/autoloader.inc.php';
    session_start();
    class Delete extends Connect {

    

        
        public function execute($query){
            try{
                $conn = $this->connect();
                 $conn->query($query);
            }catch(mysqli_sql_exception ){

            echo $conn->error;
            }
            
           

        }
           
        public function delete(){
            // $conn = $this->connect();

   



            if (isset($_POST["deleteALL"])) {
                 $del= $_POST["delete_id"] ;
                   
                    
                   foreach($del as $d){
                    mysqli_query($this->connect(),"DELETE FROM `product1` WHERE `sku` = '$d'");
                   }
                      
                   header("location: index.php?message=Data has been deleted successfully".$d);
                        
                    }
                       
                         
                        mysqli_close($this->connect());
                         
                            
            }
        }
      
     


?>