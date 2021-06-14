<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
	<link rel="stylesheet" href="des.css">\
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
   

</head>
<body>
   <div class="scroll-up-btn"></div>
   <nav class="navbar">
    <div class="max-width">
      <div class="logo">
      <a href="#">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></a></div>
      <ul class="menu">
       <li><a href="#home" class="menu-btn">Home</a></li>
       <li><a href="#about" class="menu-btn">Create</a>
       <li><a href="#services" class="menu-btn">Edit</a></li>
	   <li><a href="#contact" class="menu-btn">Contact</a></li>
	      <li><a href="dias.html" class="menu-btn">Reset Password</a></li>
		     <li><a href="logout.php" class="menu-btn">Logout</a></li>
			 <li><a href="create.php" class="menu-btn">List of Questions</a></li>
			 <li><a href="search by key words.php" class="menu-btn">Search</a></li>
      
	    

      </ul>
    </div>
   </nav>

    <!-- home section start -->
   <section class="home" id="home">
      <div class="max-width">
         <div class="home-content">
     
           <div class="text-3">Welcome to our  </div>
           <div class="text-2">Quiz Bot</div>
         
         </div>
      </div>
   </section>

    <!-- about section start -->
   <section class="about" id="about">
     <div class="max-width">
       <h2 class="title">Create</h2>
       <div class="about-content">
         <div class="column left">
           <img src="images/index.jpg" alt="" border="1" >
         </div>
         <div class="column right">
           <div class="text">Create Question paper <span class="typing-2"></span></div>
           <p>To create the question paper you should firstly choose the total score.Then you should to choose the topic index.Then bot will create quiz this random questions from database</p>
		    <p>
        <a href="search by topic.php" class="btn btn-warning">Create Question paper</a>
    </p>
         </div>
       </div>
     </div>
   </section>

    <!-- hobbies section start -->
   <section class="services" id="services">
     <div class="max-width">
       <h2 class="title">Edit</h2>
       <div class="serv-content">
         <div class="card">
           <div class="box">
             <i class="fa fa-pencil"></i>

             <div class="text"><a href="list.php">Add<a/></div>
             <p>At any time you want, you can add new question with new answer and mark. It will also add to database</p>
           </div>
         </div>
         <div class="card">
           <div class="box">
             
             <div class="text"><a href="list.php">Modify<a/></div>
             <p>At any time you want, you can add edit question(change: question, answer or mark) . It will also change in database</p>
           </div>
         </div>
         <div class="card">
           <div class="box">
            
             <div class="text"><a href="list.php">Delete<a/></div>
             <p>At any time you want, you can delete the question. But you should be careful, because it will also delete from the database</p>
           </div>
		   </div>

       </div>
     </div>
   </section>



    <!-- contact section start -->
  <section class="contact" id="contact">
    <div class="max-width">
      <h2 class="title">Contact me</h2>
      <div class="contact-content">
        <div class="column ">
          <div class="icons">
             <div class="row">
               <i class="fas fa-user"></i>
               <div class="info">
                 <div class="head">Name</div>
                 <div class="sub-title">Dias Ali</div>
			   </div>
             </div>
             <div class="row">
               <i class="fas fa-map-marker-alt"></i>
               <div class="info">
                 <div class="head">Address</div>
                 <div class="sub-title">Kyzylorda,Kazakhstan </div>
               </div>
             </div>
             <div class="row">
               <i class="fas fa-envelope"></i>
                 <div class="info">
                   <div class="head">Email</div>
                   <div class="sub-title">diasali2910@gmail.com</div>
                 </div>
               </div>
             </div>
           </div>
		 </div>
       </div>
     </section>

    <!-- footer section start -->
     <footer>
        <span>Created By <a href="https://www.instagram.com/dias_aa_">@dias_aa_</a>
    </footer>
	</body>
</html>