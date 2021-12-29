<?php
class User
{
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


    public function user_list(){
        
       $sql = "SELECT * FROM registration";
       $result=  $this->conn->query($sql);
       return $result;  
    }
    
   /* public function create_user_info($post_data=array()){
         
       if(isset($post_data['create_user'])){
       //$id= mysqli_real_escape_string($this->conn,trim($post_data['id']));
       $name= mysqli_real_escape_string($this->conn,trim($post_data['name']));
       $contact= mysqli_real_escape_string($this->conn,trim($post_data['contact']));

       $nid= mysqli_real_escape_string($this->conn,trim($post_data['nid']));

       $email= mysqli_real_escape_string($this->conn,trim($post_data['email']));

       $address= mysqli_real_escape_string($this->conn,trim($post_data['address']));

       $pasword= mysqli_real_escape_string($this->conn,trim($post_data['password']));

       $sql="INSERT INTO registration (name, contact,nid,email,address,password) VALUES ('$name', $contact,$nid,'$email','$address','$password')";
       echo $sql."<br>";
        
       
       $result=  $this->conn->query($sql);
              

        
           if($result){
           
               $_SESSION['message']="Successfully Created user Info";
               
              header('Location: index.php');
           }
          
       //unset($post_data['create_user']);
       }
       
        
    }*/
    
    public function view_user_by_user_id($id){
       if(isset($id)){
       $user_id= mysqli_real_escape_string($this->conn,trim($id));
      
       $sql="Select * from registration where  id='$id'";
        
       $result=  $this->conn->query($sql);
     
        return $result->fetch_assoc(); 
    
       }  
    }
    
    
    public function update_user_info($post_data=array()){
       if(isset($post_data['update_user'])&& isset($post_data['id'])){
      $id=mysqli_real_escape_string($this->conn,trim($post_data['id']));   
       $name= mysqli_real_escape_string($this->conn,trim($post_data['name']));
       $contact= mysqli_real_escape_string($this->conn,trim($post_data['contact']));
       $nid= mysqli_real_escape_string($this->conn,trim($post_data['nid']));

       $email= mysqli_real_escape_string($this->conn,trim($post_data['email']));

       $address= mysqli_real_escape_string($this->conn,trim($post_data['address']));

       $password= mysqli_real_escape_string($this->conn,trim($post_data['password']));

     

       $sql="UPDATE registration  SET name='$name',contact=$contact,nid=$nid,email='$email',address='$address',password='$password' WHERE id ='$id'";
       echo $sql;
     
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Updated Student Info";
           }
       unset($post_data['update_user']);
       }   
    }
    
    public function delete_user_info_by_id($id){
        
       if(isset($id)){
       $student_id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="DELETE FROM  registration  WHERE id ='$id'";
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Deleted User Info";
            
           }
       }
         header('Location: index.php'); 
    }
    function __destruct() {
    mysqli_close($this->conn);  
    }
	
	
	
	 public function post_list(){
        
       $sql = "SELECT * FROM  food_donation";
       $result=  $this->conn->query($sql);
       return $result;  
    }
	 public function view_post_by_post_id($id){
       if(isset($id)){
       $user_id= mysqli_real_escape_string($this->conn,trim($id));
      
       $sql="Select * from food_donation where  id='$id'";
        
       $result=  $this->conn->query($sql);
     
        return $result->fetch_assoc(); 
    
       }  
    }
 public function update_post_info($post_data=array()){
       if(isset($post_data['update_post'])&& isset($post_data['id'])){
      $id=mysqli_real_escape_string($this->conn,trim($post_data['id']));   
       $name= mysqli_real_escape_string($this->conn,trim($post_data['name']));
       $contact= mysqli_real_escape_string($this->conn,trim($post_data['contact']));
       $pick_up_address= mysqli_real_escape_string($this->conn,trim($post_data['pick_up_address']));

       $donation_school_name= mysqli_real_escape_string($this->conn,trim($post_data['donation_school_name']));

       $food_type= mysqli_real_escape_string($this->conn,trim($post_data['food_type']));

       $item_name= mysqli_real_escape_string($this->conn,trim($post_data['item_name']));

     $quantity= mysqli_real_escape_string($this->conn,trim($post_data['quantity']));
       $cooked_date= mysqli_real_escape_string($this->conn,trim($post_data['cooked_date']));
       $expire_date= mysqli_real_escape_string($this->conn,trim($post_data['expire_date']));
       $desire_donation_date= mysqli_real_escape_string($this->conn,trim($post_data['desire_donation_date']));
       $delivary_system= mysqli_real_escape_string($this->conn,trim($post_data['delivary_system']));
       

       $sql="UPDATE food_donation  SET name='$name',contact=$contact,pick_up_address='$pick_up_address',donation_school_name='$donation_school_name',food_type='$food_type',item_name='$item_name',quantity=$quantity,cooked_date='$cooked_date',expire_date='$expire_date',desire_donation_date='$desire_donation_date',delivary_system='$delivary_system' WHERE id ='$id'";
       echo $sql;
     
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Updated Student Info";
           }
       unset($post_data['update_post']);
       }   
    }
	
	
	 public function delete_post_info_by_id($id){
        
       if(isset($id)){
       $student_id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="DELETE FROM  food_donation WHERE id ='$id'";
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Deleted post Info";
            
           }
       }
         header('Location: post.php'); 
    }
	
	 public function manpower_list(){
        
       $sql = "SELECT * FROM  manpower_donation";
       $result=  $this->conn->query($sql);
       return $result;  
    }
	
	
	public function delete_manpower_post_info_by_id($id){
        
       if(isset($id)){
       $student_id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="DELETE FROM  manpower_donation WHERE id ='$id'";
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Deleted post Info";
            
           }
       }
         header('Location: manpower_post.php'); 
    }
	
	 public function view_manpower_post_by_post_id($id){
       if(isset($id)){
       $user_id= mysqli_real_escape_string($this->conn,trim($id));
      
       $sql="Select * from manpower_donation where  id='$id'";
        
       $result=  $this->conn->query($sql);
     
        return $result->fetch_assoc(); 
    
       }  
    }
	
	
    
    
}

?>