<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <!-- <link rel="stylesheet" src="style.css">
    <title>FARMERS HELP CENTER</title>
    <style>
        div{
            font-family: cursive, sans-serif;
      background-color: #2ecc71;
      color: white;
      padding: 10px;
      border-radius: 4px;
      box-shadow: 2px 2px 20px 23px #7fecad;
        }
        .content {
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
     }
     .list-items{
         margin-right: 20px;
     }
    </style>
</head>
<body>

    

    <div class="content" style="text-align: center;">
        <li class="list-items"><a href="index.html">Home</a></li>
        <li class="list-items"><a href="ContactUs.html">Contact Us</a></li>
        <li class="list-items"><a href="AboutUs.html">About Us</a></li>
        <li class="list-items"><a href="buyerseller.html">BUYER AND SELLER</a></li>
        <li class="list-items"><a href="diseases.html">Diseases</a></li>
    </div>
    <div>
        <center>  <img width="500px";height='500px' src="buyer and seller.jpg" alt="farmer logo" ></center>
    </div>


    <div style="text-align: center;background-color: orange;padding: 20px;box-shadow: 2px 2px 20px 23px #f0cb81;">
        
        <li>This is a buyer and seller page where farmer can enter the crop and required details so that the buyer can see the informatiom and contact them and buy the crop that he want, so that both buyer and seller will be benificial without mediator. </li>
        <li>Farmers & Buyers is an online platform connecting buyers directly to farmers from different parts of India. New farmers are registering their crops in Farmers & Buyers almost every minute. This is increasing the number of available choices of both farmers and their crops for buyers using Farmers & Buyers.</li>
        <h1>SELLER FORM</h1>
  
    
   
   
   
    <form  action="insertseller.php" method="post" >

        Enter your name : <input type="text"name="name" ><br><br>
    
        Enter contact no : <input type="int"  name="contact" ><br><br>

        Enter  crop name : <input type="text"name="cropname" ><br><br>

        Quantity of Crop : <input type="int"  name="quantity" ><br><br>
        
        Min selling Price : <input type="text"  name="sellingPrice" value=""><br><br>

        Address &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp; :<input type="text"  name="address" ><br><br>
    
        <input type="submit" class ="button" value="Submit">
    </form>
    </div>

    <div style="text-align: center;">
        <h1>BUYER FORM</h1>
        <form action="insertbuyer.php" method="post" >
            Enter your name : <input name="name" ><br><br>
            
            Enter contact no : <input   name="contact" ><br><br>
        
            Enter  crop name : <input name="cropname" ><br><br>
        
            Quantity of Crop : <input   name="quantity" ><br><br>
                
            Min buying Price : <input  name="buyingPrice" value=""><br><br>
        
            Address &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp;    &nbsp; : <input type="text"  name="address" ><br><br>
            
        <input type="submit" class= "button" value="Submit">
        </form>
    </div>
</body>
</html> -->


<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data
    $name = $_POST["name"];
    $contact = $_POST["Contact"];
    $crop_name = $_POST["crop name"];
    $quantity = $_POST["Quantity"];
    $Buying_price = $_POST["Buying Price"];
    $address = $_POST["Address"];

    // Validate form data (optional)
    // ...

    // Save form data to database (example using MySQLi)
    $conn = mysqli_connect("localhost", "username", "password", "database_name");
    $sql = "INSERT INTO seller_data (name, contact, crop_name, quantity, Buying_price, address) VALUES ('$name', '$contact', '$crop_name', '$quantity', '$selling_price', '$address')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    // Redirect user to success page or show success message
    header("Location: success.php");
    exit();
}
?>
