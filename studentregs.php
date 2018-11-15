<?php
  $link=mysqli_connect('localhost:3306','root','','woc');
  if(mysqli_connect_error()){
    die("There was an error");
  }
  // $query="SELECT * FROM `mentor`";
  // $i=0;
  // if($result = mysqli_query($link,$query)){
  //   while($row[]=mysqli_fetch_array($result)){
  //   $i=$i+1;
  //   }
  // }
  // print_r($row[0][1]);
  if(array_key_exists('name',$_POST) AND array_key_exists('phone', $_POST) AND array_key_exists('github', $_POST) AND array_key_exists('college', $_POST)){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $college = $_POST['college'];
    $github = $_POST['github'];
    $query="INSERT INTO `student`(`Name`,`phone`,`github_handle`,`college`)VALUES('$name','$phone','$github','$college')";
    mysqli_query($link,$query);
  }
  
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Registration IIIT-BH WOC</title>   
    <style>
    body,html{
        height: 100%;
    }

* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}
.bg-img
 {  
  background-image: url("https://images.mentalfloss.com/sites/default/files/styles/mf_image_16x9/public/551889-istock-908111186.jpg?itok=BDTooAo7&resize=1100x1100");  
  height: 100%; 
  width:100%;
  background-position: center;
  background-attachment: scroll;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  position: relative;
}
.container {
  position: absolute;
  margin-left: 35%;
  margin-top: 10%;
  width: 500px;
  padding: 16px;
  background-color: white;
}


 input[type=text] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}
h1{
    text-align: center;
    color: crimson;
    font-family: Arial, Helvetica, sans-serif;
    padding: 0;
    /* margin:0; */
}
b{
    color: mediumvioletred;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 20px;
}
p{
    font-family: Arial, Helvetica, sans-serif;
}


.btn {
  background-color: #4CAF50;
  color: white;
  padding: 13px 20px;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
  font-size: 20px;
    
}

.btn:hover {
  opacity: 1;
}    
    </style>
    </head>
    
    <body>
        <div class="bg-img">
            <form class = "container" method="post">
                <h1>Student Registration</h1>
                <label for="name"><b>Name</b></label>
                <input type="text" placeholder = "Enter your full name" name = "name" required><br><br>

                <label for="phone"><b>Phone number</b></label>
                <input type="text" placeholder = "Enter your phone number" name = "phone" required><br>
                
                <label for="github"><b>Github handle</b></label>
                <input type="text" placeholder = "Enter your github handle" name = "github" required><br><br>
                
                <label for="clg"><b>College name</b></label>
                <input type ="text" placeholder = "Enter your college name" name = "college"  required><br><br>

                <p>Join IIIT-BH WOC gitter channel <a href="" target="_blank">here</a>.</p>
                <button type="submit" class="btn">Register</button>
            </form>
        </div>
    </body>
</html>