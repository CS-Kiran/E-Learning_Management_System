<?php session_start();
$conn = pg_connect("host=localhost dbname=postgres user=postgres password=postgres") or die("Unable to connect to database");
$a="SELECT * FROM Instructor_register";
$e= pg_query($conn,$a) ;
if (pg_num_rows($e) > 0) {
  while ($row = pg_fetch_array($e)) {
    $_SESSION['tname'] = $row['name'];
    $_SESSION['tid'] = $row['tid'];
    }
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Instructor DashBoard</title>
<link rel="stylesheet" href="courses.css">  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
<div class="container">

<nav>
<ul>
 <li><a href="#" class="logo">
 <img src="file:///C:/xampp/htdocs/Project/Teacher/icon.jpg">
 <span class="nav-item">Dashboard</span>
 </a></li>
  
<li><a href="/Project/profile/index.php">
<i class="fas fa-user"></i>
<span class="nav-item">Profile</span>  
</a></li> 

<li><a href="#">
<i class="fas fa-wallet"></i>
<span class="nav-item">My Courses</span>
</a></li>
  
  
<li><a href="/Project/Notice/notice_teacher.php">
<i class=" fas fa-bell"></i>
<span class="nav-item">Generate Notice</span>
</a></li>
  
<li><a href="/Project/Teacher/course.html">
<i class="fas fa-tasks"></i>
<span class="nav-item">Create Course</span>  
</a></li>
  
<li><a href="/Project/QA/index.php">
<i class="fas fa-comments"></i>
<span class="nav-item">Q/A</span>
</a></li>

  <li><a href="/Project/Resource/index.php">
  <i class="fas fa-rocket"></i>
  <span class="nav-item">Add Resources</span>
  </a></li>
 
  <li><a href="/Project/Home/logout.php" class="logout">
  <i class="fas fa-sign-out-alt"></i> 
  <span class="nav-item">Logout</span>
  </a></li>

</ul>  
</nav>

  <section class="main">
    <div class="main-top">
      <div class="trending"><h1>Trending</h1></div>
      <i class="fas fa-user-cog"></i>
    </div>
    
    <div class="main-body">
      <div class="main-content">
        

          <div class="cardbox">
          <img src="file:///C:/xampp/htdocs/Project/Teacher/download.jpg">
          <div class="card-detail">
            <h2>How to create cryptocurrency using html & css</h2>
            <span class="view">
            <i class="fas fa-eye"></i>98.4k
            </span>
            
            <span class="likes">
            <i class="fab fa-gratipay"></i>780
            </span>           
             
           <span class="comments">
            <i class="fas fa-comment"></i>1.2k
            </span>
            
            <div class="user">
              <img src="file:///C:/xampp/htdocs/Project/Teacher/pic4.jpg" alt="">
              
              <div class="user_detail">
                <h4>Code Information</h4>
                <span>3 hours ago</span>
              </div>
              
            </div>       
          </div>          
        </div>        



          <div class="cardbox">
          <img src="file:///C:/xampp/htdocs/Project/Teacher/Android.jpg">
          <div class="card-detail">
            <h2>How to create Android Application using Android Studio</h2>
            <span class="view">
            <i class="fas fa-eye"></i>88.4k
            </span>
            
            <span class="likes">
            <i class="fab fa-gratipay"></i>12.8k
            </span>           
             
           <span class="comments">
            <i class="fas fa-comment"></i>7.2k
            </span>
            
            <div class="user">
              <img src="file:///C:/xampp/htdocs/Project/Teacher/fem3.jpg" alt="">
              
              <div class="user_detail">
                <h4>Salina</h4>
                <span>3 hours ago</span>
              </div>
              
            </div>           
          </div>         
        </div>        


	<div class="cardbox">
          <img src="file:///C:/xampp/htdocs/Project/Teacher/cloud_security.jpg">
          <div class="card-detail">
            <h2>Cloud Security Professional</h2>
            <span class="view">
            <i class="fas fa-eye"></i>1.2M
            </span>
            
            <span class="likes">
            <i class="fab fa-gratipay"></i>40k
            </span>           
             
           <span class="comments">
            <i class="fas fa-comment"></i>12k
            </span>
            
            <div class="user">
              <img src="file:///C:/xampp/htdocs/Project/Teacher/pic7.jpg" alt="">
              
              <div class="user_detail">
                <h4>Edward</h4>
                <span>7 months ago</span>
              </div>
              
            </div>           
          </div>         
        </div>     








	<div class="cardbox">
          <img src="file:///C:/xampp/htdocs/Project/Teacher/Data%20Analysis.jpg">
          <div class="card-detail">
            <h2>Data Analytics Using Python</h2>
            <span class="view">
            <i class="fas fa-eye"></i>7.4M
            </span>
            
            <span class="likes">
            <i class="fab fa-gratipay"></i>798k
            </span>           
             
           <span class="comments">
            <i class="fas fa-comment"></i>42k
            </span>
            
            <div class="user">
              <img src="file:///C:/xampp/htdocs/Project/Teacher/fem8.jpg" alt="">
              
              <div class="user_detail">
                <h4>Starlink</h4>
                <span>14 hours ago</span>
              </div>
              
            </div>          
          </div>       
        </div>        


	<div class="cardbox">
          <img src="file:///C:/xampp/htdocs/Project/Teacher/cyber%20security.jpg">
          <div class="card-detail">
            <h2>Introduction to Cybersecurity & Ethical Hacking</h2>
            <span class="view">
            <i class="fas fa-eye"></i>11.2M
            </span>
            
            <span class="likes">
            <i class="fab fa-gratipay"></i>403k
            </span>           
             
           <span class="comments">
            <i class="fas fa-comment"></i>121k
            </span>
            
            <div class="user">
              <img src="file:///C:/xampp/htdocs/Project/Teacher/pic6.jpg" alt="">
              
              <div class="user_detail">
                <h4>Allen</h4>
                <span>7 months ago</span>
              </div>
              
            </div>           
          </div>         
        </div>        



	<div class="cardbox">
          <img src="file:///C:/xampp/htdocs/Project/Teacher/datascience.jpg">
          <div class="card-detail">
            <h2>Advanced DataScience using Python</h2>
            <span class="view">
            <i class="fas fa-eye"></i>1.4M
            </span>
            
            <span class="likes">
            <i class="fab fa-gratipay"></i>7.8k
            </span>           
             
           <span class="comments">
            <i class="fas fa-comment"></i>4.2k
            </span>
            
            <div class="user">
              <img src="file:///C:/xampp/htdocs/Project/Teacher/fem2.jpg" alt="">
              
              <div class="user_detail">
                <h4>Starlink</h4>
                <span>14 hours ago</span>
              </div>
              
            </div>          
          </div>       
        </div>        
	






	<div class="cardbox">
          <img src="file:///C:/xampp/htdocs/Project/Teacher/AI_ML.jpg">
          <div class="card-detail">
            <h2>Artificial Intelligence and Machine Learning using Python</h2>
            <span class="view">
            <i class="fas fa-eye"></i>2.4M
            </span>
            
            <span class="likes">
            <i class="fab fa-gratipay"></i>8.7k
            </span>           
             
           <span class="comments">
            <i class="fas fa-comment"></i>6.2k
            </span>
            
            <div class="user">
              <img src="file:///C:/xampp/htdocs/Project/Teacher/pic1.jpg" alt="">
              
              <div class="user_detail">
                <h4> Code Help</h4>
                <span>2 years ago</span>
              </div>
              
            </div>          
          </div>        
        </div>        
       </div>
	
	

	
	




	
	<div class="sidebar">
              <div class="popular_creators">
            <h3>Popular Creators</h3>
            
            <div class="row">
	<div class="cr">
                	<img src="file:///C:/xampp/htdocs/Project/Teacher/fem.jpg">
                	<h6>Amelia</h6>
               	</div>
              
              	<div class="cr">
                	<img src="file:///C:/xampp/htdocs/Project/Teacher/fem2.jpg">
                	<h6>Olivia</h6>
              	</div>
              
              	<div class="cr">
                	<img src="file:///C:/xampp/htdocs/Project/Teacher/pic3.jpg">
                	<h6>Daniel</h6>
              	</div>  
               	</div>
  
             <div class="row">
              <div class="cr">
                <img src="file:///C:/xampp/htdocs/Project/Teacher/fem4.jpg">
                <h6>Emma</h6>
              </div>

	<div class="cr">
                	<img src="file:///C:/xampp/htdocs/Project/Teacher/pic6.jpg">
                	<h6>Steven</h6>
              	</div>
              	
	<div class="cr">
                	<img src="file:///C:/xampp/htdocs/Project/Teacher/fem6.jpg">
                	<h6>Ella</h6>
              	</div>                   
	</div>
	
      
          </div>    
        

	<div class="popular_searches">
          	 	<h4>Popular Searches</h4>
           		<div class="search">
             		
		<div class="his">
               		<p>Web Design</p>
               		<i class="fas fa-times"></i>
             		</div>

		<div class="his">
               		<p>Blockchain</p>
               		<i class="fas fa-times"></i>
             		</div>

		<div class="see-more">
               		<button>See All</button>
             		</div>		
	

	</div>
         	</div>
           


       </div>
       </div>
  </section>
 
  
</div>

</body>
</html>
