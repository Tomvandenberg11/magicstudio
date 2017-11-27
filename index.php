<!DOCTYPE html>
<html lang="en">
<head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				<title></title>
				<link rel="stylesheet" href="main.css">
				<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
				<script>

                        $(document).ready(function(){
                          $("a").on('click', function(event) {
                            if (this.hash !== "") {
                              event.preventDefault();
                              var hash = this.hash;
                              $('html, body').animate({
                                scrollTop: $(hash).offset().top
                              }, 500, function(){
                                window.location.hash = hash;
                              });
                            }
                          });
                        });

                </script>
</head>

<body>
				<div id="header-logo">					
                    <a href="index.php"><img id="logo" src="Images/HollandSF.png" alt="logo"></a>
				</div>
	
				<div id="banner1">
					<div id="banner-filter1">
                        <div id="info-content">
                            <p style="font-size: 20px; color: white; text-align: center;">
                                Welkom bij Holland Magic Studio.<br>
                                We bedenken en bouwen magische producten van hoge kwaliteit.
                                Waar klassieke magie terugkomt met de techniek van vandaag. 
                                Holland Magic Studio,    
                                kwaliteit magie uit Nederland!

                            </p>
                        </div>
					</div>
				</div>
				
				<div id="producten">
				<div class="content">
                     <h1>Producten</h1><br>
                        <div class="product">
                        <h3 style="text-align: center;">Cubes and Tubes</h3><br>
                         <div class="container">
                              <img src="Images/IMG_0640.jpg" alt="Avatar" class="image" style="width:100%">
                              <a style="text-decoration: none" href="cubestubes.html"><div style="cursor: pointer" class="middle">
                                <div class="text">Meer info</div>
                              </div></a>
                         </div>
                        </div>
                    <div class="product">
                        <h3 style="text-align: center;">Ring Escape Deluxe</h3><br>
                         <div class="container">
                              <img src="Images/20171016_175731.jpg" alt="Avatar" class="image" style="width:100%">
                              <a style="text-decoration: none" href="ringdeluxe.html"><div style="cursor: pointer" class="middle">
                                <div class="text">Meer info</div>
                              </div></a>
                        </div>
                    </div>
                    <div class="product">
                        <h3 style="text-align: center;">Rabbit Table Deluxe</h3><br>
                      <div class="container">
                          <img src="Images/FB_IMG_1507911259196.jpg" alt="Avatar" class="image" style="width:100%">
                          <a style="text-decoration: none" href="rabbittable.html"><div style="cursor: pointer" class="middle">
                            <div class="text">Meer info</div>
                          </div></a>
                     </div>
                    </div>
			    </div>
			    </div>
			    
			    <div id="contact">
			        <h1>Contact</h1>
			        <div id="contact-content">
			            <div id="contact-form">
			                <?php
                                $action= $_REQUEST['action'];
                                if ($action=="")
                                    {
                                    ?>
                                    <form  action="" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="action" value="submit">
                                    Naam:<br>
                                    <input name="name" type="text" value="" size="30"/><br>
                                    Email:<br>
                                    <input name="email" type="text" value="" size="30"/><br>
                                    Bericht:<br>
                                    <textarea name="message" rows="7" cols="30"></textarea><br>
                                    <input type="submit" value="Verzenden"/>
                                    </form>
                                    <?php
                                    } 
                                else
                                    {
                                    $name=$_REQUEST['name'];
                                    $email=$_REQUEST['email'];
                                    $message=$_REQUEST['message'];
                                    if (($name=="")||($email=="")||($message==""))
                                        {
                                        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
                                        }
                                    else{		
                                        $from="From: $name<$email>\r\nReturn-path: $email";
                                        $subject="Vraag over Holland Magic Studio";
                                        mail("21897@ma-web.nl", $subject, $message, $from);
                                        echo "<p text-align: center;>Email verzonden!</p>";
                                        }
                                    }  
                            ?>
			            </div>
			         </div>
                </div>
                
                <footer>
                    <div id="footer-content">
                        <p style="float: left;">Made by Mento ®</p><br>
                        <p id="adres" style="float: right;">Holland Magic Studio<br>
                                                IJdoornlaan 58 L2<br>
                                                1024KV<br>
                                                Amsterdam<br>
                                                Netherlands</p>
                    </div>
                </footer>
                
</body>
</html>
