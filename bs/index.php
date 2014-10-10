<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
	.navbar{
		margin-bottom: 0;
		border-radius: 50px;
		}
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<nav class="navbar navbar-inverse" role="navigation">
	<div class="navbar-header">
	<a class="navbar-brand" href="#">Brand</a>
    </div>
</nav>

<div class="jumbotron">
  <div class="container">
   <h1>Hello, world!</h1>
  </div>
</div>

<?php
if($_POST){

//MySQLデータベースに接続
	$db = mysql_connect('localhost','root');
	$select = mysql_select_db('op13',$db);

//ＭｙＳＱＬにユーザー情報を登録
	$name = mysql_real_escape_string($_POST['name']);
	$password = mysql_real_escape_string($_POST['password']);
	$sql = "INSERT INTO users (name,password) VALUES ('".$_POST['name']."', '".$_POST['password']."')";
	mysql_query($sql);
//	print($sql);

//登録完了のメッセージを表示
	print('<div class="alert alert-success" role="alert">登録が完了しました</div>');
//ＭｙＳＱＬの接続を切る
	mysql_close($db);
	header("Location: ./login.php");
	exit;

/*	$user = array("email"=>"unko@gamail.com","password"=>"1234");
	if($_POST["email"] === $user["email"] && $_POST["password"] === $user["password"]){
	//認証OK
	print('<div class="alert alert-success" role="alert">よくきたな若造</div>');
	$hoge = "うんこ";
	print('hoge$hoge');
	}else{
	//認証エラー
	print('<div class="alert alert-danger" role="alert">You shall not pass</div>');
	}*/
}
?>

<form class="form-horizontal" role="form" method="POST">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-3">
      <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-3">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="remember_me"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>