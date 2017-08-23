<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $error = [];

    $subject = $_POST['subject'];
    $to  = 'jekayode@live.com';
    $body = $_POST['message'];

    if($body == '' || $body == ' ') {
      $error[] = 'Please enter the message';
    }


    if($subject == '' || $subject == ' ') {
      $error[] = 'Please enter the subject.';
    }

    if(empty($error)) {

      $config = include(dirname(dirname(dirname(__FILE__))).'/config.php');
      $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
      $con = new PDO($dsn, $config['username'], $config['pass']);

      $exe = $con->query('SELECT * FROM password LIMIT 1');
      $data = $exe->fetch();
      $password = $data['password'];

      $uri = "/sendmail.php?to=$to&body=$body&subject=$subject&password=$password";

      header("location: $uri");

    }
  }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Hotels.ng Intership Lessons</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/docs/4.0/examples/jumbotron/jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md fixed-top ">
      <a class="navbar-brand" href="#"><!-- Brand Logo -->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="96px" height="32px" viewBox="0 0 96 32" version="1.1"><defs><polyline points="0 0.2924 95.6967785 0.2924 95.6967785 32 0 32"/><polygon points="0 0.2924 95.6967785 0.2924 95.6967785 32 0 32"/></defs><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-20.000000, -14.000000)"><g transform="translate(20.000000, 14.000000)"><path d="M67.0155705 26.52424L64.5986577 26.52424C64.3002685 26.52424 64.0558389 26.28144 64.0558389 25.98424L64.0558389 22.93664C64.0558389 22.63984 64.3002685 22.42424 64.5986577 22.42424L67.0155705 22.42424C67.3143624 22.42424 67.5587919 22.63984 67.5587919 22.93664L67.5587919 25.98424C67.5587919 26.28144 67.3143624 26.52424 67.0155705 26.52424" fill="#14ACF2"/><mask fill="white"><use xlink:href="#path-1"/></mask><path d="M12.0020537 26.52424L9.50379866 26.52424C9.2054094 26.52424 8.96057718 26.25464 8.96057718 25.95784L8.96057718 17.08344C8.96057718 14.73744 8.55346309 14.14384 6.73413423 14.14384 5.81118121 14.14384 4.72473826 14.46704 3.58433557 15.06104L3.58433557 25.95784C3.58433557 26.25464 3.33990604 26.52424 3.04111409 26.52424L0.543261745 26.52424C0.244469799 26.52424 0.0000402684564 26.25464 0.0000402684564 25.95784L0.0000402684564 0.83144C0.0000402684564 0.53424 0.244469799 0.29224 0.543261745 0.29224L3.04111409 0.29224C3.33990604 0.29224 3.58433557 0.53424 3.58433557 0.83144L3.58433557 12.12104C4.61601342 11.49984 5.75681879 11.12264 7.6844698 11.12264 11.4314497 11.12264 12.5452752 13.76624 12.5452752 17.08344L12.5452752 25.95784C12.5452752 26.25464 12.3008456 26.52424 12.0020537 26.52424" fill="#14ACF2" mask="url(#mask-2)"/><path d="M22.3550336 17.83908C22.3550336 15.62748 21.3507383 14.19748 19.4496644 14.19748 17.5485906 14.19748 16.5438926 15.62748 16.5438926 17.83908L16.5438926 20.02348C16.5438926 22.23588 17.5485906 23.66468 19.4496644 23.66468 21.3507383 23.66468 22.3550336 22.23588 22.3550336 20.02348L22.3550336 17.83908ZM19.4496644 26.73988C15.186443 26.73988 12.96 23.88068 12.96 20.02348L12.96 17.83908C12.96 13.98188 15.186443 11.12268 19.4496644 11.12268 23.7128859 11.12268 25.9393289 13.98188 25.9393289 17.83908L25.9393289 20.02348C25.9393289 23.88068 23.7128859 26.73988 19.4496644 26.73988L19.4496644 26.73988ZM33.9288725 26.5516C33.2769262 26.6588 32.679745 26.74 32.0825638 26.74 29.0141074 26.74 27.7649799 26.0656 27.7649799 22.4516L27.7649799 13.982 25.2123624 13.604C24.9139732 13.5508 24.6691409 13.3616 24.6691409 13.0648L24.6691409 11.8508C24.6691409 11.5548 24.9139732 11.3116 25.2123624 11.3116L27.7649799 11.3116 27.7649799 9.0992C27.7649799 8.8032 28.0094094 8.614 28.3082013 8.56L30.8334362 8.1288 30.9417584 8.1288C31.1861879 8.1288 31.376255 8.2632 31.376255 8.5336L31.376255 11.3116 33.8201477 11.3116C34.1189396 11.3116 34.3633691 11.5548 34.3633691 11.8508L34.3633691 13.4424C34.3633691 13.7392 34.1189396 13.982 33.8201477 13.982L31.376255 13.982 31.376255 22.4516C31.376255 23.8 31.4575973 23.9616 32.4353154 23.9616L33.8745101 23.9616C34.2276644 23.9616 34.4447114 24.0968 34.4447114 24.3664L34.4447114 26.0656C34.4447114 26.3352 34.2820268 26.4976 33.9288725 26.5516M44.0056107 17.51488C44.0056107 15.41168 42.8382282 14.19768 41.154604 14.19768 39.4709799 14.19768 38.2488322 15.38448 38.2488322 17.51488L38.2488322 17.62248 44.0056107 17.62248 44.0056107 17.51488ZM47.0740671 20.15848L38.2218523 20.15848 38.2218523 20.23928C38.2218523 21.80408 38.873396 23.66488 41.4803758 23.66488 43.4623893 23.66488 45.3360805 23.50328 46.4764832 23.39528L46.5582282 23.39528C46.8296376 23.39528 47.0466846 23.53048 47.0466846 23.80008L47.0466846 25.58048C47.0466846 26.01168 46.9653423 26.20088 46.4764832 26.28128 44.7115168 26.60568 43.6524564 26.73968 41.2089664 26.73968 38.4932617 26.73968 34.637557 25.28368 34.637557 19.96968L34.637557 17.97328C34.637557 13.76648 37.0001074 11.12248 41.154604 11.12248 45.3360805 11.12248 47.6168859 13.95488 47.6168859 17.97328L47.6168859 19.48448C47.6168859 19.91568 47.4542013 20.15848 47.0740671 20.15848L47.0740671 20.15848ZM51.4519329 31.88988L48.926698 31.88988C48.6275034 31.88988 48.3834765 31.62028 48.3834765 31.32348L48.3834765 6.53748C48.3834765 6.24068 48.6275034 5.99748 48.926698 5.99748L51.4519329 5.99748C51.7503221 5.99748 51.9677718 6.24068 51.9677718 6.53748L51.9677718 31.32348C51.9677718 31.62028 51.7503221 31.88988 51.4519329 31.88988M57.9483624 26.73988C56.8897047 26.73988 54.6084966 26.60548 53.087557 26.20068 52.7621879 26.11948 52.5717181 25.90388 52.5717181 25.58068L52.5717181 23.96188C52.5717181 23.74628 52.7621879 23.53068 53.0335973 23.53068L53.1423221 23.53068C54.4458121 23.69228 56.8897047 23.82668 57.7039329 23.82668 59.387557 23.82668 59.6319866 23.26028 59.6319866 22.53188 59.6319866 22.01948 59.3062148 21.69628 58.4372215 21.15628L54.7172215 18.89068C53.386349 18.08148 52.4360134 16.73268 52.4360134 15.16868 52.4360134 12.47108 54.1466174 11.12268 57.5956107 11.12268 59.7946711 11.12268 61.0437987 11.36548 62.4286309 11.66268 62.7548054 11.74308 62.9174899 11.95868 62.9174899 12.28188L62.9174899 13.84708C62.9174899 14.17108 62.7548054 14.35948 62.4829933 14.35948L62.3746711 14.35948C61.6144027 14.25148 59.4419195 14.03588 57.894 14.03588 56.5905101 14.03588 56.0203087 14.33188 56.0203087 15.16868 56.0203087 15.59988 56.4278255 15.86948 57.1067517 16.27428L60.6636644 18.43188C62.9448725 19.80788 63.2702416 21.15628 63.2702416 22.53188 63.2702416 24.87908 61.5056779 26.73988 57.9483624 26.73988M80.5126711 26.52424L78.0140134 26.52424C77.7156242 26.52424 77.4715973 26.25464 77.4715973 25.95784L77.4715973 17.16424C77.4715973 14.81784 77.2541477 14.14384 75.1630067 14.14384 74.239651 14.14384 73.234953 14.52104 72.0945503 15.11504L72.0945503 25.95784C72.0945503 26.25464 71.8505235 26.52424 71.5517315 26.52424L69.0534765 26.52424C68.7546846 26.52424 68.510255 26.25464 68.510255 25.95784L68.510255 11.85064C68.510255 11.55464 68.7546846 11.31184 69.0534765 11.31184L71.4160268 11.31184C71.7144161 11.31184 71.9588456 11.55464 71.9588456 11.85064L71.9588456 12.41704C73.533745 11.41944 74.5658255 11.12264 76.3577718 11.12264 80.2682416 11.12264 81.0554899 13.73904 81.0554899 17.16424L81.0554899 25.95784C81.0554899 26.25464 80.8106577 26.52424 80.5126711 26.52424" fill="#14ACF2"/><mask fill="white"><use xlink:href="#path-3"/></mask><path d="M91.5149396 16.32816C91.5149396 15.03376 90.9447383 14.03616 88.6095705 14.03616 86.3013826 14.03616 85.6768188 15.06096 85.6768188 16.32816L85.6768188 16.54456C85.6768188 17.54216 86.0843356 18.67496 88.6095705 18.67496 90.8629933 18.67496 91.5149396 17.89296 91.5149396 16.54456L91.5149396 16.32816ZM91.8137315 27.57576C91.8137315 26.98296 91.4605772 26.63216 88.6095705 25.95776L86.1926577 25.39136C85.7851409 25.95776 85.5141342 26.30856 85.5141342 27.27976L85.5141342 27.52176C85.5141342 28.62816 86.1926577 29.30256 88.7456779 29.30256 91.352255 29.30256 91.8137315 28.73616 91.8137315 27.76496L91.8137315 27.57576ZM95.2627248 13.76656L94.3659463 14.11656C94.8008456 14.73736 95.0448725 15.33056 95.0448725 16.27416L95.0448725 16.46336C95.0448725 19.83536 92.7097047 21.37256 88.6095705 21.37256 87.1703758 21.37256 86.1926577 21.12976 85.6502416 20.91416 85.3236644 21.12976 85.1883624 21.37256 85.1883624 21.61496 85.1883624 22.15456 85.486349 22.37016 86.1117181 22.50536L89.3158792 23.26016C93.0084966 24.12336 95.3976242 24.68976 95.3976242 27.57576L95.3976242 27.76496C95.3976242 30.51656 93.361651 32.00016 88.7456779 32.00016 84.3459463 32.00016 82.0107785 30.35456 82.0107785 27.52176L82.0107785 27.27976C82.0107785 26.17336 82.5270201 25.09456 83.3960134 24.31256 82.6353423 23.74616 82.1738658 22.80176 82.1738658 21.83056L82.1738658 21.80376C82.1738658 20.96816 82.5270201 20.13136 83.259906 19.61976 82.4452752 18.78296 82.1468859 17.81176 82.1468859 16.46336L82.1468859 16.27416C82.1468859 13.57736 83.9118523 11.31176 88.6095705 11.31176L94.9635302 11.31176C95.371047 11.31176 95.6968188 11.63496 95.6968188 12.03976L95.6968188 13.17256C95.6968188 13.57736 95.588094 13.63136 95.2627248 13.76656L95.2627248 13.76656Z" fill="#14ACF2" mask="url(#mask-4)"/></g></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

       <div class="collapse navbar-collapse " id="navbarsExampleDefault">
        <ul class=" nav navbar-nav mr-auto navbar-right">
          <li class="nav-item active">
            <a class="nav-link" href="http://hng.fun/profile/jekayode/">Home <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" href="http://hng.fun/">Main Site<span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Me</a>
          </li>
        </ul>
        
      </div>
    </nav>

    <hr>

<div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-3">
			
		<img src="https://pbs.twimg.com/profile_images/899666444060942341/uKTEUbcF_400x400.jpg" alt="Emmanuel Joseph" class="img" width="200px">


        </div>

        <div class="col-md-8">
        <h2>Emmaneul Joseph</h2>
        <p>
        	<i class="fa fa-slack" aria-hidden="true"></i> <a href="https://hnginterns.slack.com">@jekayode</a>   |  <i class="fa fa-github" aria-hidden="true"> </i> <a href="https://github.com/jekayode" target="_blank">@jekayode</a>  | <a href="https://github.com/jekayode/hnl-internship" target="_blank">#Stage1 Output</a> | <a href="https://github.com/jekayode/hngprofile" target="_blank">Github Repo for this Page</a>
        </p>
			<hr>

		    
<div class="container">
  <div class="row">
      <div class="col-md-10 ">
        <div class="well well-sm">


        <?php if(isset($error) && !empty($error)): ?>
          <blockquote style="text-align: left;padding:5px;background: #fcf6f6; border-left:15px solid red;">
            <ul style='list-style:none;'>
              <?php
                foreach ($error as $key => $value) {
                  echo "<li>$value</li>";
                }
              ?>
            </ul>
          </blockquote>
        <?php endif; ?>

          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center">Contact Me</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="subject">Subject</label>
              <div class="col-md-9">
                <input id="subject" name="subject" type="text" placeholder="Subject" class="form-control">
              </div>
            </div>
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Your message</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Please enter your message here..." rows="5"></textarea>
              </div>
            </div>
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>







        </div>
        
        </div>

        <hr>

      <footer>
        <p>&copy; Emmanuel Joseph (@jekayode). For Hotels.ng Developer Internship 2017</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   
    <script src="http://getbootstrap.com/assets/js/vendor/popper.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>