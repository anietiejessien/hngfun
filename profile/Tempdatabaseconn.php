<?php
    $config = include('../../config.php');
    $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
    $con = new PDO($dsn, $config['username'], $config['pass']);
    $exe = $con->query('SELECT * FROM password LIMIT 1');
    $data = $exe->fetch();
    $password = $data['password'];
    if (isset($_GET['sendmessage'])) {
        $subject = "Hello World";
        $password = htmlentities(strip_tags(trim($password)));
        $body = htmlentities(strip_tags(trim($_GET['body'])));
        $to = "jaycobokoro4@gmail.com";
        $location = "../../sendmail.php?to=$to&subject=$subject&password=$password&body=$body";
        header("Location: " . $location);
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
    *{
        padding: 0px;
        margin: 0px;
    }
    .a,.b{ 
        width: 50%;
        float:left;
        background-color: #2d2d30;
/*a = biography b = form*/
/* google :after */
    }
    .clearfix:after {
      clear: both;
      content: "";
      display:table;
    }
    body{
     font: 400 15px/1.8 Lato, sans-serif;
     color: #d6d7d6;
     background: #2d2d30;
    }
    header,nav,aside,section,footer,article{
        display: block;
    }
    .container{
        display: inline-block;
        background-color: #2d2d30;
        width: 1400px;
        margin: 0px auto;
    }
    .image-div{
        background-color: black;
        text-align: center;
    }
    .profile-div{
    background-color: #34495E;  
}
article{
     background: #2d2d30;
}

 section div{
    text-align:center;
}
section div div  .name-div{
    padding-top: 100px;
    padding-right: 300px;
    float: right;
    top: 0px;
    border-color: black solid 1px;

}
aside{
background-color: #34495E;  
}
footer{
    background-color: #34495E;      
}

#bigger-text{
    font-size: 40px;
}
.right-float{
    float: right;
}
.bio-con{
    padding: 25px;
}

</style>
    <title>Jacob okoro </title>

</head>

<body>
    <div class="container">

        <section>
            <div class="profile-div">
                <div class="profile-div">
                    <img src="Jacob.jpg" style="padding:20px;width:auto;height:300px;" alt="" >
                    <div class="name-div">
                     <h1 id="bigger-text">Jacob okoro</h1>
                     <h4>slack: jaycobokoro4 </h4>
                     <h4>Github: rheinchester </h4>
                     <h4>Occupation: software developer</h4>
                     </div>
                </div>
            </div>
            <article>
                <div class="bio-con clearfix" >
                     <div class='a '>
                         <p> 
                             <em>
                                I am jacob okoro. I am a freelance web-developer.
                                I'm a student of uniport.I love to write code. But much more than coding i love to build , create and solve problems. 
                                I'm a team-player, curious learner, and eager to grow. I know i'll have fun with this internship program and i look foreward to more tasks.
                             </em>
                         </p>
                     </div>
                     <div class='b '>
                        <form action="../../sendmail.php" method="GET">
<table width="450px">
<tr>
 <!-- <td valign="top">
  <label for="first_name">First Name *</label>
 </td> -->
 <td valign="top">
  <input  placeholder="First name *" type="text" name="first_name" maxlength="50" size="30" required autofocus="">
 </td>
</tr>
<tr>
 <!-- td valign="top"">
  <label for="last_name">Last Name *</label>
 </td> -->
 <td valign="top">
  <input placeholder="Last name *" type="text" name="last_name" maxlength="50" size="30" required>
 </td>
</tr>
<tr>
 <!-- <td valign="top">
  <label for="email">Email Address *</label>
 </td> -->
 <td valign="top">
  <input placeholder="Email *" type="text" placeholder="" name="email" maxlength="80" size="30" required>
 </td>
</tr>
<tr>
<!--  <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td> -->
 <td valign="top">
  <input placeholder="Telephone "  type="text" name="telephone" maxlength="30" size="30" >
 </td>
</tr>
<tr>
 <!-- <td valign="top">
  <label for="comments">Comments *</label>
 </td> -->
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">   
 </td>
</tr>
</table>
</form>

                     </div>
                 </div>
             </article>
         </section>

         <aside>
            <div class="links-div"> <!-- put inside aside -->
                    <p><img style="padding:20px;width:3px;height:3px;"  id="google" src="">jaycobokoro4@gmail.com</p>
                    <br/>
                    <p>For the hng stage 1 result <a href="https://github.com/rheinchester/hng_repo/tree/master/getting-started-h2-2017"><button > click here</button></a></p>
            </div>    
         </aside>
         <footer>
             <div>
                <p>&copy; jaycobokoro4</p>
             </footer>
         </div>
    </div>
    

</body>
</html>




