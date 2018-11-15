
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
  if(array_key_exists('name',$_POST) AND array_key_exists('email', $_POST) AND array_key_exists('phone', $_POST) AND array_key_exists('github', $_POST) AND array_key_exists(title, $_POST) AND array_key_exists('project', $_POST)){
    $name = $_POST['name'];
    $Email = $_POST['email'];
    $phone = $_POST['phone'];
    $title = $_POST['title'];
    $project = $_POST['project'];
    $github = $_POST['github'];
    $query="INSERT INTO `mentor`(`Name`,`Email`,`phone`,`title`,`github_handle`,`project`)VALUES('$name','$Email','$phone','$title','$github','$project')";
    mysqli_query($link,$query);
  }
  
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mentor Registration IIIT-BH WOC</title>   
        <link rel="icon" href="https://img.icons8.com/color/1600/source-code.png" type="image/x-icon" >
    <style>
    body,html{
        height: 100%;
        background-image: url("https://images.mentalfloss.com/sites/default/files/styles/mf_image_16x9/public/551889-istock-908111186.jpg?itok=BDTooAo7&resize=1100x1100");  
        height: 100%; 
        width:vw;
        background-position: center;
        background-attachment: scroll;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        position: relative;
    }

* {
  box-sizing: border-box;
}

.container {
  position: absolute;
  right: 350px;
  margin: 5px;
  width: 500px;
  padding: 10px;
  background-color: white;
}


 input[type=text],input[type=url] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus,input[type=url]:focus {
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
input[type=radio]{
    font-family: Arial, Helvetica, sans-serif;
    padding: 25px;
    margin: 15px;
}
    </style>
    </head>
    
    <body>
        <div class="bg-img">
            <form class="container"  method="post">
                <h1>Mentor Registration</h1>
                <label for="name"><b>Name</b></label>
                <input type="text" placeholder = "Enter your full name" name = "name" required><br>

                <label for="email"><b>Email Address</b></label>
                <input type ="text" placeholder = "Enter your email address" name = "email"  required><br>
                
                <label for="phone"><b>Phone number</b></label>
                <input type="text" placeholder = "Enter your phone number" name = "phone" required> 
                
                <label for="github"><b>Github handle</b></label>
                <input type="text" placeholder = "Enter your github handle" name = "github" required><br>

                <label for="title"><b>Title of the project</b></label>
                <input type="text" name="title" placeholder="Title of the project" required><br>
                
                <label for="projects"><b>links to the project you wish to be a part of WOC.(For multiple projects register again)</b></label><br>
                <input type="url" name="project" required><br>

                <label for="review_pr"><b>Will you be reviewing PRs to these projects?</b></label><br>
                <label for="yes">
                    <input id="yes" type="radio" name="review_pr">Yes
                </label><br>
                <label for="no">
                    <input id="no" type="radio" name="review_pr">No
                </label><br>
                <label for="maybe">
                    <input id="maybe" type="radio" name="review_pr">Maybe
                </label>
                             
               
                
                <p>Join IIIT-BH WOC gitter channel <a href="" target="_blank">here</a>.</p>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </body>
</html>