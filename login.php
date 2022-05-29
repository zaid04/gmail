
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link rel="stylesheet" href="form.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>

<div class="center">
  <h1>Welcome back</h1>
  <form method="post" action="login1.php">
    <div class="inputbox">
      <input type="text"  name="e" required="required">
      <span>email</span>
    </div>
    <div class="inputbox">
      <input type="password" name="p"  required="required">
      <span>Password</span>
    </div>
    <div class="inputbox">
      <input type="submit" name="login" value="submit">
    </div>
  </form>
</div>
</body>
</html>