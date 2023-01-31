<?php
require 'pconnection.php';
$_SESSION["id"] = 1; 	// User's session
$sessionId = $_SESSION["id"];
$res=pg_query($con, "SELECT * FROM tb_user WHERE id = $sessionId");
$user =pg_fetch_assoc($res);
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Image Profile</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600&display=swap');

:root{
    --yellow:#f9ca24;
}

*{
    font-family: 'Nunito', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    text-decoration: none;
    outline: none; border:none;
    text-transform: capitalize;
    transition: all .2s linear;
}

*::selection{
    background:var(--yellow);
    color:#333;
}

.upload{
  width: 125px;
  position: relative;
  margin: auto;
}

.upload img{
  border-radius: 50%;
  border: 8px solid #DCDCDC;
}

.upload .round{
  position: absolute;
  bottom: 0;
  right: 0px;
  background: #00B4FF;
  width: 32px;
  height: 32px;
  line-height: 33px;
  text-align: center;
  border-radius: 50%;
  overflow: hidden;
}

.upload .round input[type = "file"]{
  position: absolute;
  transform: scale(2);
  opacity: 0;
}

input[type=file]::-webkit-file-upload-button{
    cursor: pointer;
}



html{
    font-size: 62.5%;
    overflow-x: hidden;
}

html::-webkit-scrollbar{
    width:1.4rem;
}

html::-webkit-scrollbar-track{
    background:#222;
}

html::-webkit-scrollbar-thumb{
    background:var(--yellow);
}

body{
    background:#111;
    overflow-x: hidden;
    padding-left: 35rem;
}

section{
    min-height: 100vh;
    padding:1rem;
}

.btn{
    padding:.7rem 3rem;
    background:#333;
    color:#fff;
    cursor: pointer;
    margin-top: 1rem;
    font-size: 2rem;
    border-radius: 5rem;
}

.btn i{
    padding:0 .5rem;
    font-size: 1.8rem;
}

.btn:hover{
    background:var(--yellow);
}

.heading{
    text-align: center;
    margin:0 6rem;
    font-size: 4rem;
    padding:1rem;
    border-bottom: .1rem solid #fff4;
    color:#fff;
}

.heading span{
    color:var(--yellow);
}

header{
    position: fixed;
    top:0; left:0;
    z-index: 1000;
    height:100%;
    width:35rem;
    background:#1a1a1a;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-flow: column;
    text-align: center;
}

header .user img{
    height:17rem;
    width:17rem;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 1rem;
    border:.7rem solid var(--yellow);
}

header .user .name{
    font-size: 3.5rem;
    color:#fff;
}

header .user .post{
    font-size: 2rem;
    color:#eee;
}

header .navbar{
    width:100%;
}

header .navbar ul{
    list-style: none;
    padding:1rem 3rem;
}


header .navbar ul li a{
    display: block;
    padding:1rem;
    margin:1.5rem 0;
    background:#333;
    color:#fff;
    font-size: 2rem;
    border-radius: 5rem;
}

header .navbar ul li a:hover{
    background:var(--yellow);
}

#menu{
    position: fixed;
    top:2rem; right:2rem;
    background:#333;
    color:#fff;
    cursor: pointer;
    font-size: 2.5rem;
    padding:1rem 1.5rem;
    z-index: 1000;
    display: none;
}

.contact .row{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}

.home .row .h3{
    flex:1 1 30rem;
    padding:4rem;
    padding-bottom: 0;
}

.home .row form{
    flex:1 1 45rem;
    padding:2rem;
    margin:2rem;
    margin-bottom: 4rem;
}

.home .row form .box{
    padding:1.5rem;
    margin:1rem 0;
    background:#3333;
    color:#fff;
    text-transform: none;
    font-size: 1.7rem;
    width:100%;
}

.home .row form .box::placeholder{
    text-transform: capitalize;
}

.home .row .content .info h3{
    display: flex;
    align-items: center;
    font-size: 2rem;
    color:#eee;
    padding:1rem 0;
    font-weight: normal;
}

.home .row .h3{
    padding-right: 1rem;
    color:var(--yellow);
}


.mycourse .row{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    padding:1rem 0;
}

.mycourse .row .info{
    flex:1 1 48rem;
    padding:2rem 1rem;
    padding-left: 6rem;
}

.mycourse .row .info h3{
    font-size: 2rem;
    color:var(--yellow);
    padding:1rem 0;
    font-weight: normal;
}		

.mycourse .row .info h3 span{
    color:#eee;
    padding:0 .5rem;
}

.mycourse .row .counter{
    flex:1 1 48rem;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.mycourse .row .counter .box{
    width:20rem;
    background:#222;
    text-align: center;
    padding: 2rem;
    margin:2rem;
}

.mycourse .row .counter .box span{
    font-size: 4rem;
    color:var(--yellow);
}

.mycourse .row .counter .box h3{
    font-size: 2rem;
    color:#fff;
}


.feedback .row{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}

.feedback .row .h3{
    flex:1 1 30rem;
    padding:4rem;
    padding-bottom: 0;
}

.feedback .row form{
    flex:1 1 45rem;
    padding:2rem;
    margin:2rem;
    margin-bottom: 4rem;
}

.feedback .row form .box{
    padding:1.5rem;
    margin:1rem 0;
    background:#3333;
    color:#fff;
    text-transform: none;
    font-size: 1.7rem;
    width:100%;
}

.feedback .row form .box::placeholder{
    text-transform: capitalize;
}

.feedback .row form .message{
    height: 15rem;
    resize: none;
}

.feedback .row .content .info h3{
    display: flex;
    align-items: center;
    font-size: 2rem;
    color:#eee;
    padding:1rem 0;
    font-weight: normal;
}

.feedback .row .h3{
    padding-right: 1rem;
    color:var(--yellow);
}

.top{
    position: fixed;
    bottom:7.5rem; right: 2rem;
    z-index: 100;
    display: none;
}



/* media queries  */

@media (max-width:1200px){

    html{
        font-size: 55%;
    }

    .home{
        padding:1rem 4rem;
    }

}

@media (max-width:991px){

   header{
       left:-120%;
   }

   #menu{
       display: block;
   }

   header.toggle{
    left:0%;
   }

   body{
       padding:0;
   }

}

@media (max-width:768px){

    html{
        font-size: 50%;
    }
 
 }

@media (max-width:400px){

    header{
        width: 100vw;
    }

    .heading{
        margin:0 3rem;
    }

    .mycourse .row .counter .box{
        width: 100%;
    }
 
    .feedback .box-container .box{
        width:100%;
    }

    .portfolio .box-container .box{
        width:100%;
    }

    .contact .row form{
        margin:3rem 0;
    }

 }

</style>



  </head>
  <body>


  <header>


 <form class="form" id = "form" action="" enctype="multipart/form-data" method="post"> 
      <div class="upload">
        <?php
        $id = $user["id"];
        $name = $user["name"];
        $image = $user["image"];
        ?> 

        <img src="img/<?php echo $image; ?>" width=170 height=170 title="<?php echo $image; ?>">
        <div class="round">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <input type="hidden" name="name" value="<?php echo $name; ?>"> 
          <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png">
          <i class = "fa fa-camera" style = "color: #fff;"></i>
        </div>
      </div>
    
</form>
      <?php
      if(isset($_FILES["image"]["name"])){
      $id = $_POST["id"];
      $name = $_POST["name"];

      $imageName = $_FILES["image"]["name"];
      $imageSize = $_FILES["image"]["size"];
      $tmpName = $_FILES["image"]["tmp_name"];

      // Image validation
      $validImageExtension = ['jpg', 'jpeg', 'png'];
      $imageExtension = explode('.', $imageName);
      $imageExtension = strtolower(end($imageExtension));
      if (!in_array($imageExtension, $validImageExtension)){
        echo
        "
        <script>
          alert('Invalid Image Extension');
          document.location.href = '../profile';
        </script>
        ";
      }
      elseif ($imageSize > 1200000){
        echo
        "
        <script>
          alert('Image Size Is Too Large');
          document.location.href = '../profile';
        </script>
        ";
      }
      else{
        $newImageName = $name . " - " . date("Y.m.d") . " - " . date("h.i.sa"); // Generate new image name
        $newImageName .= '.' . $imageExtension;
        $query = "UPDATE tb_user SET image = '$newImageName' WHERE id = $id";
        pg_query($con, $query);
        move_uploaded_file($tmpName, 'img/' . $newImageName);
        echo
        "
        <script>
        document.location.href = 'C:/xampp/htdocs/Project/profile';
        </script>
        ";
      }
    }
    ?>


    <script type="text/javascript">
      document.getElementById("image").onchange = function(){
          document.getElementById("form").submit();
      };
    </script>

    
   


    <nav class="navbar">
        <ul>
            <li><a href="#home">Profile</a></li>
            <li><a href="#mycourse">My Course</a></li>
            <li><a href="#feedback">Feedback</a></li>
            <li><a href="#logout">logout</a></li>
        </ul>
    </nav>

</header>



<div id="menu" class="fas fa-bars"></div>

<!-- home section starts  -->

<section class="home" id="home">

<h1 class="heading">Edit  <span>Profile</span>  </h1>

<div class="container">
    
        <div class="row">

        <form class="form" id="form" action="profile_data.php" enctype="multipart/form-data" method="post">
         
         <h1>UserName:</h1><input type="text" placeholder="Edit username" name="nm" class="box">
         <h1>Email:</h1><input type="email" placeholder="Edit email" name="eml" class="box">
         
         <h1>Education:</h1><input type="text" placeholder="Education" name="edu" class="box">
         <h1>Profession:</h1><input type="text" placeholder="Profession" name="prf" class="box">
         
         <input type="submit" name="upload" value="Edit" class="btn">

    
          
         </form>

            </div>
            
            
          </div>
          </section>


            <!-- mycourse section starts  -->

<section class="mycourse" id="mycourse">

<h1 class="heading">My <span>Course</span>  </h1>

<div class="row">

    <div class="info">
        <h3> <span> 1.) </span> Python </h3>
        <h3> <span> 2) </span> React </h3>
        <h3> <span> 3.) </span> Node Js </h3>
        <h3> <span> 4.) </span> Javascript </h3>
        <h3> <span> 5.) </span> SQL </h3>
        <a href="/Project/Teacher/teach.php"><button class="btn"> Go to Course <i class="fas fa-download"></i> </button></a>
    </div>

    <div class="counter">

        <div class="box">
            <span>72%</span>
            <h3>Progress in Python</h3>
        </div>

        <div class="box">
            <span>45%</span>
            <h3>Progress in React</h3>
        </div>

        <div class="box">
            <span>27%</span>
            <h3>Progress in Node JS</h3>
        </div>

        <div class="box">
            <span>64%</span>
            <h3>Progress in Javascript</h3>
        </div>

      <div class="box">
            <span>70%</span>
            <h3>Progress in SQL</h3>
        </div>

    </div>

</div>

</section>


<!-- contact section starts  -->

<section class="feedback" id="feedback">

<h1 class="heading">Your <span>Feedback</span>  </h1>

<div class="row">

    
    <form  action="insert_feedback.php">
        
        <div class="info"><h1>Username:</h1></div><input type="text" placeholder="name" name="nm" class="box">
        <div class="info"><h1>Email:</h1></div><input type="email" placeholder="email" name="eml" class="box">
        <div class="info"><h1>Coursename:</h1></div><input type="text" placeholder="course name" name="csnm" class="box">
        <div class="info"><h1>Feedback:</h1></div><textarea placeholder="message" name="feed" id="" cols="30" rows="10"  class="box message" ></textarea>
        <button type="submit" class="btn"> send <i class="fas fa-paper-plane"></i> </button>
  </div>
    </form>

</div>

</section>

<!-- contact section ends -->

  </body>
</html>
