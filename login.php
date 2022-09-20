<?php


//connect to other code page
require("connection.php");


// buttone for post
if(isset($_POST['submit']))
{
//date post to db
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$number = trim($_POST['number']);
$gender = $_POST['gender'];
$city = $_POST['city'];
$quali = implode(',',$_POST['quali']);
$id = trim($_POST['id']);


//post date to teble
$query = "insert into $teble(name,email,Number,gender,city,quali,id)
values('$name','$email','$number','$gender','$city','$quali','$id')";

//date chack
$result = mysqli_query($con,$query); 

if($result)
{
    echo "Data Insert Successfully";
}
else
{
   echo "Not Insert Successfully";	
}


}

    ?>
    


<html>


<head>
<meta charset="utf-8">
<title>login from</title>
<!--bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head> 



<body>
    <div class="row">
        <div class="col mt-5 ms-5 border">
        <h1> sign up</h1>
        <form method="post">
            
            
            <!--input box-->


            <!--name input-->
            <label class="col col-form-label">name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control border-dark" placeholder="Entar your name" name="name">
            </div><br><br>
            

            <!--email input-->
            <label  class="col-sm-3 col-form-label">email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control  border-dark" placeholder="Entar your email" name="email">
            </div><br><br>


            <!--numbar input-->
            <label  class="col-sm-3 col-form-label">numbar</label>
            <div class="col-sm-10">
                <input type="numbar" class="form-control  border-dark" placeholder="Entar your numbar" name="number">
            </div><br><br>


            <!--id input-->
            <label for="id" class="col-sm-2 col-form-label">id</label>
            <div class="col-sm-10">
            <input type="numbar" class="form-control border-dark" placeholder="Entar your Id" name="id">
           </div><br><br>
            

            <!--radio-->
            <input type="radio" name="gender" value="Male"/>Male
            <input type="radio" name="gender" value="Female"/>Female
            <input type="radio" name="gender" value="other"/>other<br><br>
            

            <!--select-->
            <select name="city">
            <option value="Karachi">Karachi</option>
            <option value="Peshawar">Peshawar</option>
            <option value="Islamabad">Islamabad</option>
            </select><br><br>
            

            <!--checkbox-->
            <input type="checkbox" name="quali[]" value="Matric"/>Matric
            <input type="checkbox" name="quali[]" value="Intermediate"/>Intermediate
            <input type="checkbox" name="quali[]" value="Graduation"/>Graduation<br><br>
            

            <!--button-->
            <input type="submit" value="Insert Data" name="submit" class="btn btn-dark"/>
            <button class="btn btn-light border-dark" ><a href="index.php">show data</a></button>
            
            
            </form>
</div>
</body>  
</html>