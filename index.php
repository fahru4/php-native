<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
 <div class="cont">
  <div class="demo">
    <div class="login">
      <div class="login__check"></div>
      <div class="login__form">
	  <form method="post" action="logincheck.php">
        <div class="login__row">
          
          <input type="text" class="login__input name" placeholder="Username" name="username" autofocus required="required" />
        </div>
        <div class="login__row">
          
          <input type="password" class="login__input pass" placeholder="Password" name="password" required="required" />
        </div>
        <input type="submit" name="simpan" value="Login" class="login__submit"/>
        <!--<button type="button" class="login__submit">Sign in</button>-->
      </form>
      </div>
    </div>
  </div>
 </div>
<!--  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
-->
</body>
</html>
