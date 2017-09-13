<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mayowa Fagbayi Profile</title>
    <link rel="stylesheet" href="https://drive.google.com/uc?export=download&id=0B2Zqj5XRWQXDYWROTWxoZEtqZzA">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="notification" class="clearfix">
        <p></p>
    </div>
    <div class="container">
        <div class="" id="profile">
            <div class="heading">
                <p>Intern Profile</p>
            </div>
            <div>
                <img src="https://i.imgur.com/4n7o1u8.jpg" alt="profile picture">
            </div>
            <div class="card-footer">
                <a href="git@github.com:Major2big/hng-stage1-task.git"><span class="fa fa-external-link"><span id="stage1"> First stage task</span></span></a>
                <p id="slack-username"><span class="fa fa-slack"> Slack: </span> @major2big</p> 
            </div>
        </div>
        <!--<div class="flex-"> -->
            <div id="bio">
                <div class="heading">
                    <p>About me</p>
                </div>
                <p id="bio-text">
                    My name is Mayowa Micheal Fagbayi, a graduate of Pure and Applied Physics in Ladoke Akintola University of Technology.
                    <br>
                    <br>
                    I develop passion for programming early this year and have been written code in .Net language <b>C-SHARP</b>. But recently, i pick interest in <b>HTML</b> because is composary to complete the tasks of the intern.
                    <br>
                    <br>
                    Joining the hng intern has given me the oppurtunity to work with expect in written code which i konw am going to learn much from them.
                </p>
            </div>
             <!-- </div> -->  
            
         <div id="myModal"  class="modal">
        <div class="modal-content">
             <div class="modal-header">
                <span class="close">&times;</span>
                <h2>Contact Me</h2>
             </div>
             <div class="modal-body">
                
                <form action="contact.php" method="POST">
                    <br>
                    <div class="form-group">
                        <label for="subject" style="float: left;">Subject: </label>
                        <input type="text" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="body" style="float: left;">Body: </label><br>
                        <textarea name="body" id="body" placeholder="Your Message here..."  rows="4" style="height:100px" required=""></textarea>
                    </div>
                    <br>

                    <input type="submit" name="submit" value="Send Message" id="submit">
                </form>
             </div>
        </div>
    </div>

    <div id="footer">
        
        <a href="https://hnginterns.slack.com/team/major2big" target="_blank"><span class="fa fa-slack icons"></span></a>
        <a href="https://github.com/major2big/" target="_blank"><span class="fa fa-github icons"></span></a>
        <a href="mailto:mayowafagbayi@gmail.com" target="_blank"><span class="fa fa-envelope icons"></span></a>        
    </div>

    <script type="text/javascript">
            // Get the modal
            var modal = document.getElementById('myModal');

            var btn = document.getElementById("myContact");

            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on the button, open the modal 
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

        </script>
        </div>
</body>
</html>
