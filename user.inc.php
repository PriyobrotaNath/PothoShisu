<?php


class user {
	private $conn;
    function __construct() {
session_start();
	

    
    $servername = "localhost";
    $dbname = "potho_shisur_alo";
    $username = "root";
    $password = "";
  

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
       }else{
        $this->conn=$conn;
          
       }

    }

	
	//signin
    public function UserLogin($email,$password){
    	
        $sql = "SELECT *  FROM registration WHERE email='$email' AND password='$password'";
       $result=  $this->conn->query($sql);
       
       return $result;  
    }
	
	public function user($id){
    	
        $sql = "SELECT *  FROM registration WHERE id='$id'";
       $result=  $this->conn->query($sql);
       
       return $result;  
    }
	

    public function UserReg($name,$contact,$nid,$email,$address,$category,$password){
    	
        $sql = "INSERT INTO registration ( name , contact , nid , email , address , category , password ) VALUES ( '$name' , $contact , $nid , '$email' ,'$address','$category','$password')";
			
       $result=  $this->conn->query($sql);
       
       return $result;  
    }
	
	
	
	

    public function view_user_by_user_id($id){
       
       $user_id= mysqli_real_escape_string($this->conn,trim($id));
      
       $sql="Select * from registration where  id='$id'";
        
       $result=  $this->conn->query($sql);
     
        return $result->fetch_assoc(); 
    
        
    }
	
	
	  public function set_p($id,$n,$c,$ni,$e,$a,$p){
        
      $sql = "UPDATE `registration` SET `name`='$n',`contact`=$c,`nid`=$ni,`email`='$e',`address`='$a',`password`='$p' WHERE id='$id'";
       $result=  $this->conn->query($sql);
       return $result;  
    }
	
	
	
	
	 
	
	public function foodPost($name,$contact,$pick_up_address,$donation_school_name,$food_type,$item_name,$quantity,$cooked_date,$expire_date,$desire_donation_date,$delivary_system ){
    	
       
		
		 $sql = "INSERT INTO food_donation( name , contact , pick_up_address , donation_school_name , food_type , item_name , quantity , cooked_date , expire_date , desire_donation_date , delivary_system) 
		VALUES ( '$name' , $contact , '$pick_up_address' , '$donation_school_name' ,'$food_type','$item_name' ,$quantity ,'$cooked_date' , '$expire_date' , '$desire_donation_date' , '$delivary_system')";
		$result = $this->conn->query($sql);
		return $result;
       
    }
	
	
	public function manPowerPost($name,$contact,$nid,$birth_certificate_number,$address,$school,$college,$university,$category,$desire_working_area,$type ){
    	
        //echo $name." ".$id;
		//echo aaa;
		 $sql = "INSERT INTO manpower_donation( name , contact , nid , birth_certificate_number , address , school , college , university , category , desire_working_area , type) 
		VALUES ( '$name', $contact , $nid , $birth_certificate_number, '$address', '$school' , '$college' , '$university' , '$category' , '$desire_working_area' , '$type')";
		$result = $this->conn->query($sql);
		return $result;
       
    }
	
	
	 public function set_post($id,$n,$c,$pi,$do,$fo,$it,$qa,$co,$ex,$de,$sy){
        
      
	  //$sql = "UPDATE food_donation SET `name`='$n',`contact`=$c,`nid`=$ni,`email`='$e',`address`='$a',`password`='$p' WHERE id='$id'";
      

$sql="UPDATE `food_donation` SET `name`='$n',`contact`='$c',`pick_up_address`='$pi',`donation_school_name`='$do',`food_type`='$fo',`item_name`='$it',`quantity`='$qa',`cooked_date`='$co',`expire_date`='$ex',
`desire_donation_date`='$de',`delivary_system`='$sy' WHERE id='$id'";

	  $result=  $this->conn->query($sql);
       return $result;  
    }
	
	public function post($id){
    	
        $sql = "SELECT *  FROM food_donation WHERE id='$id'";
       $result=  $this->conn->query($sql);
       
       return $result;  
    }
	
	
	
	 public function set_manpower_post($id,$n,$c,$pi,$do,$fo,$it,$qa,$co,$ex,$de,$sy){
        
      
	  //$sql = "UPDATE food_donation SET `name`='$n',`contact`=$c,`nid`=$ni,`email`='$e',`address`='$a',`password`='$p' WHERE id='$id'";
      

$sql="UPDATE `manpower_donation` SET `name`='$n',`contact`='$c',`nid`='$pi',`birth_certificate_number`='$do',`address`='$fo',`school`='$it',`college`='$qa',`university`='$co',`category`='$ex',
`desire_working_area`='$de',`type`='$sy' WHERE id='$id'";

	  $result=  $this->conn->query($sql);
       return $result;  
    }
	
	
	
	public function manpower_post($id){
    	
        $sql = "SELECT *  FROM manpower_donation WHERE id='$id'";
       $result=  $this->conn->query($sql);
       
       return $result;  
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	 /*public function view_m($u_id){
        
      $sql = "SELECT * From measurement where U_ID= '$u_id'";
       $result=  $this->conn->query($sql);
       return $result;  
    }*/


	
	
   /* public function user_list($search,$area){
        
      $sql = "SELECT * From tailor where category like '%$search%' and Address like '%$area%'";
       $result=  $this->conn->query($sql);
       return $result;  
    }*/

       /* public function find_d($area){
        
      $sql = "SELECT * From delivery_man where zone like '%$area%'";
       $result=  $this->conn->query($sql);
       return $result;  
    }*/


	

   

 


      /* public function set_m($u_id,$s,$c,$hi,$h,$w){
        
      $sql = "INSERT INTO `measurement`(`U_ID`, `Shoulder`, `Chest`, `Hight`, `Hand`, `Waist`) VALUES ($u_id,$s,$c,$hi,$h,$w)";
       $result=  $this->conn->query($sql);
       return $result;  
    }


          public function order_request($i,$s,$c,$hi,$h,$w,$t,$d,$o,$p,$d_id,$t_id,$u_id,$st){
        


      $sql = "INSERT INTO order_t(info_order, Shoulder, Chest, Hight, Hand, Waist, Type, delivery_date, order_date, price, D_ID, T_ID, U_ID ,status) VALUES ('$i','$s','$c','$hi','$h','$w','$t','$d','$o','$p','$d_id','$t_id','$u_id','$st')";
       $result=  $this->conn->query($sql);
       return $result;  
    }

              public function order_request_no($i,$t,$d,$o,$p,$d_id,$t_id,$u_id,$st){
        
      $sql = "INSERT INTO order_t(info_order, Shoulder, Chest, Hight, Hand, Waist, Type, delivery_date, order_date, price, D_ID, T_ID, U_ID ,status) VALUES ('$i','','','','','','$t','$d','$o','$p','$d_id','$t_id','$u_id','$st')";
       $result=  $this->conn->query($sql);
       return $result;  
    }

            public function order_cur($id){
        
      $sql = "SELECT * FROM `order_t` WHERE Status  like '%Request Sent By User%' or '%Dress is Ready%' or '%Request Accepted%' and U_ID='$id'";
       $result=  $this->conn->query($sql);
       return $result;  
    }
             public function order_com($id){
        
      $sql = "SELECT * FROM `order_t` WHERE Status  like 'Completed' and U_ID='$id'";
       $result=  $this->conn->query($sql);
       return $result;  
    }
             public function order_can($id){
        
      $sql = "SELECT * FROM `order_t` WHERE Status  like 'Cancled' and U_ID='$id'";
       $result=  $this->conn->query($sql);
       return $result;  
    }*/
 


}

?>