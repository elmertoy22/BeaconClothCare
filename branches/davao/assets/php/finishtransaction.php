<?php
session_start();
    include('function/connection/connect.php');

    extract($_POST);
    //// add to cart

    $received_by = $_SESSION['username'];


    if(isset($_POST['branch_received_date']) &&
       isset($_POST['date_received']) && 
       isset($_POST['type_customer']) && 
       isset($_POST['name_customer']) && 
       isset($_POST['contact_customer']) && 
       isset($_POST['address_customer']) && 
       isset($_POST['total_kilo']) && 
       isset($_POST['total_pcs'])&& 
       isset($_POST['amount'])&&   
       isset($_POST['pickordeliver'])&&  
       isset($_POST['pickup_date'])&& 
       isset($_POST['pickup_time'])&& 
       isset($_POST['date_release'])&& 
       isset($_POST['remark'])&& 
       isset($_POST['receipt'])&& 
       isset($_POST['notes'])  
      )
    
    {
        
        $query = " INSERT INTO `allsales`
        (
            `branch_received_date`,
            `date_received`,
            `type_customer`,
            `name_customer`,
            `contact_customer`,
            `address_customer`, 
            `total_kilo`,
            `total_pcs`,
            `amount`,
            `pickordeliver`,
            `pickup_date`,
            `pickup_time`,
            `date_release`,
            `remark`,
            `received_by`,
            `receipt`,
            `notes`
        ) VALUES ( 
            '$branch_received_date', 
            '$date_received',  
            '$type_customer',  
            '$name_customer',  
            '$contact_customer',  
            '$address_customer', 
            '$total_kilo',  
            '$total_pcs', 
            '$amount', 
            '$pickordeliver', 
            '$pickup_date',  
            '$pickup_time',  
            '$date_release',  
            '$remark',  
            '$received_by',  
            '$receipt',  
            '$notes'
            ) 
            ";
        
        if(mysqli_query($connect,$query)){
            echo "pasok na pasok";
        }
        else{
            echo "supottt failed";
        }

    }   


    if(isset($_POST['nexttransaction'])){

        $querydel = "TRUNCATE TABLE addtocart ";
        if(mysqli_query($connect,$querydel)){
             echo '<script>console.log("next transaction complete!" ); </script>';
        }
        else{
        }
    }
?>