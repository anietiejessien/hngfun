<?php
      if (isset($_GET['send']))  {
          //Email information here
      $to = "beccadaniels1824@gmail.com";
      $subject = $_GET['subject'];
      $body = $_GET['message'];    
     $config = [
           'dbname' => 'hng',
           'pass' => '@hng.intern1',
           'username' => 'intern',
           'host' => 'localhost'
       ];
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);
      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];
            header("location: http://hng.fun/sendmail.php?password=$password&subject=$subject&body=$body&to=$to");
        }
?>
<!DOCTYPE html>
	<head>
	    <title>Folashade</title>
	    <meta charset="utf-8">
	    <link rel="stylesheet" href="beccadaniels/stylesheet.css">
	</head>
	<body>
	<div id=container>
	    <div >
	    	<h1>Folashade Daniel</h1>
	    </div>

		<div class=images>
		    <img src="beccadaniels/shade3" alt="A picture of Folashade">
		</div>

		<div class=images>
			<p><img src="beccadaniels/slack-chat.png" alt="Slack's icon" class=icon>@beccadaniels</p>
			<p><img src="beccadaniels/gitHub.png" alt="Github's icon" class=icon><a href="github.com/beccadaniel/HNG">stage 1 Repository</a></p>

		</div>

		<div id="wrapper">
		<div class="images left">
			<h2>About Me</h2>
			<p class="details">My name is Folashade DANIEL, a 400 level student of the Department of Computer Science and Engineering, Obafemi Awolowo University. I am aspiring to become a Software Developer / Machine Learning Engineer in the nearest future. I love reading, playing games, tech and I'm also a very good teammate.</p>
		</div>
		<div class="right">
			<h2>Send a mail</h2>
			<form action="beccadaniels.php" method="GET">
				First name <br> <input type="text" name="firstname"> <br>
				Phone number <br> <input type="text" name="phone"> <br>
				Subject <br><input type="text" name="subject"> <br>
				E-mail To	<br> <input type="email" name="email"> <br>
				Message <br> <textarea name="message" rows="5" cols="30" maxlength="100"></textarea> <br>

				<input type="submit" value="send">
			</form>
		</div>
		</div>
	</div>
	</body>
</html>
