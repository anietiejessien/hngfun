<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];
    $subject = $_POST['subject'];
    $to  = 'messrseddie@gmail.com';
    $body = $_POST['body'];
    if($body == '' || $body == ' ') {
      $error[] = "Don't be shy. Write me a message";
    }
    if($subject == '' || $subject == ' ') {
      $error[] = 'A subject would be awesome.';
    }
    if(empty($error)) {
      $config = include __DIR__ . "/../config.php";
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);
      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];
      $url = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";
      header("location: $url");
    }
  }
 ?>

 <!-- after php summon -->

<!DOCTYPE> 
<html>  
<head>
     <meta charset ="Utf-8">
<title>HNG INTERNSHIP 2017</title>

<style type ="text/css">
<<<<<<< HEAD

=======
>>>>>>> 4ac23af177372fe5641bb52e28bc5fe61cb14c7b
.image{
    margin: auto;
    height: 350px;
    width:  350px;
    border: 2px solid #F0F0F0 ;
    border-radius: 10px;
}
	
<<<<<<< HEAD

=======
>>>>>>> 4ac23af177372fe5641bb52e28bc5fe61cb14c7b
p{  
	font-family: Georgia, 'Times New Roman', Times, serif;
	font-size: 25px;
	font-style: italic;
	font-weight: bold;
    
}
body{
	text-align:center;
	background:saddlebrown;
	color: #fff
}
h1{    
	color:black;
	background-color: lightyellow;
    font-weight: bold;
}
h2{ font-style: bold;
    font-size: 30px;
	font-family:cursive;
	font-weight: 28px;
	
}
<<<<<<< HEAD

h3{ color:black;
	background-color: lightyellow;
    font-family: comic  'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif

}

.tag{ margin-top: 200px;
	text-align: "center";
}

=======
h3{ color:black;
	background-color: lightyellow;
    font-family: comic  'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
}
.tag{ margin-top: 200px;
	text-align: "center";
}
>>>>>>> 4ac23af177372fe5641bb52e28bc5fe61cb14c7b
</style>

</head>

<body>

<h1> MY PROFILE </h1>


<div>
<img class="image" src="http://res.cloudinary.com/dmb742rw9/image/upload/v1504886055/DSC00602_ozfm5b.jpg" alt= "messrseddie"> <br>


</div>
<div>

<p>

<h2><b>Edidiong Samuel</b></h2>

<p>

<h3>Slack Id:Messrseddie | Github Username:Messrsedddie</h3>

</div>
<p>
My name is Edidiong Samuel alias Eddie Baba. I'm an intern on the<a href= "http://www.hotels.ng">Hotels.ng</a>platform.As a tech geek,this internship program would afford me opportunity to experience first hand  the little details that make the technological world thick.<b>"HELLO MY WORLD!"</b>
</p>

<!-- Begin contact form --> 

	<div id="form">

      <h2 class="tag">Contact Me</h2>
<<<<<<< HEAD
    <form action="../../sendmail.php" method="get">
=======
    <form action="#" method="POST">
>>>>>>> 4ac23af177372fe5641bb52e28bc5fe61cb14c7b
          <fieldset>
              <input placeholder="Your Full Name" type="text" tabindex="1" required="" autofocus="">
          </fieldset>
          <fieldset>
           <input placeholder="Your Phone Number" type="tel"  required="">
          </fieldset>
        
          <fieldset>
            <input type="email" id="to" name="to" placeholder="Your Email Address Here">
          </fieldset>

          <fieldset>
            <input type="text" id="subject" name="subject" placeholder="Your Subject Here">
         </fieldset>

          <fieldset>
           <textarea placeholder="Type your Message Here...." tabindex="5" id="body" name="body" required=""></textarea>
          </fieldset>  

<<<<<<< HEAD
          <input type="hidden" name="password" value="<?= $password; ?>" />          
        
=======
                  
>>>>>>> 4ac23af177372fe5641bb52e28bc5fe61cb14c7b
          <fieldset>
            <button type="submit" value="Submit">Submit </button>
          </fieldset>
        </form>
 	</div>    
 	   	
</div>
</div>
</body>
</html>
<<<<<<< HEAD


=======
>>>>>>> 4ac23af177372fe5641bb52e28bc5fe61cb14c7b
     
           

        
            
          
 

                   
                      
            
           
       
     
        
  
