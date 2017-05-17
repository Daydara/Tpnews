<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    
    $(function(){
    	  $.ajax({
     url : "verif.php",
     success : function(verif){
       if(verif==false){
         window.location.href="loginnn.php";
       }
       else{
         alert(verif);
       }
     }
   })
  }

    
    </script>
</head>

<body>
  
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">S'inscrire</a></li>
        <li class="tab"><a href="#login">Se connecter</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Inscrivez vous ici !</h1>
          
          <form action="signup.php" method="post">
          
          <div class="field-wrap">
              <label>
                Pseudo<span class="req">*</span>
              </label>
              <input type="text" name="pseudo" id="pseudo" required/>
          </div>

          <div class="field-wrap">
            <label>
              Adresse Mail<span class="req">*</span>
            </label>
            <input type="email" name="mail" id="mail" required/>
          </div>
          
          <div class="field-wrap">
            <label>
              Mot de passe<span class="req">*</span>
            </label>
            <input type="password" name="password" id="password" required/>
          </div>
          
          <button type="submit" name="submit" class="button button-block"/>Connecte toi</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Bienvenue !</h1>
          
          <form action="loginnn.php" method="post">
          
            <div class="field-wrap">
            <label>
              Pseudo<span class="req">*</span>
            </label>
            <input type="text" required/>
          </div>
          
          <div class="field-wrap">
            <label>
              Mot de passe<span class="req">*</span>
            </label>
            <input type="password" required/>
          </div>
          
          <!--<p class="forgot"><a href="#">Mot de passe oublié?</a></p>-->
          
          <button class="button button-block"/>Connecte toi</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
	</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/index.js"></script>

</body>
</html>

