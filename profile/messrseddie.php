<?php
//Connect to database
  $config = include('../../config.php');
  $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
  $con = new PDO($dsn, $config['username'], $config['pass']);
  $exe = $con->query('SELECT * FROM password LIMIT 1');
  $data = $exe->fetch();
  $password = $data['password'];
?>

 <!-- after php summon -->


<!DOCTYPE html> 
     <html>
<head>
     <meta charset ="Utf-8">
<title>HNG INTERNSHIP 2017</title>

<style type ="text/css">

.image{
    margin: auto;
    height: 350px;
    width:  350px;
    border: 2px solid #F0F0F0 ;
    border-radius: 10px;
}
	

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

h3{ color:black;
	background-color: lightyellow;
    font-family: comic  'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif

}

.tag{ margin-top: 200px;
	text-align: "center";
}

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

     <div class="form_container">
            <form action="Messrsedddie.php" method="POST">

        
            <h2 class="tag">Contact Me</h2>
            Name<br>
            <input type="text" name="name" size="30" placeholder="Your name goes here" ><br><br>

            Email<br>
            <input type="email" name="email" size="30" placeholder="example@gmail.com" ><br><br>

            Subject<br>
            <input type="text" name="subject" size="30" placeholder="Your Subject"><br><br>

            <input type="hidden"  id="password" name="password" value="<?php echo $password; ?>">

            Message<br>
            <textarea rows="10" cols="30" name="body" placeholder="Write your message here..."></textarea><br><br>

            <button type="submit" name="submit">Send</button>    

    </form>
</div>                 
                    

    </body>

</html>  
            
           
       
     
        
  
