<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>repost world</title>
      <style>
       body
       {
          background: url(fon.jpg) no-repeat;
	      background-size: cover;
	   }
	  .log {
	      margin-top:-80px;
	      margin-left:33%;
	      width:350px;
		  height: 190px;
	      background: url(re.png)no-repeat;
		  background-size: 400px;
	    } 
		.log:hover{
		  margin-left:33%;
	      width:360px;
		  height: 190px;
	      background: url(re2.png)no-repeat;
		  background-size: 400px;
		}
	  .div2 {
	     margin: 20px;
	     width: 630px;
         height: 550px;
	     box-shadow: 0px 0px 6px;
	     font-size: 2em;
	    }
		form{
		float:left;
    width:250px;
    margin:75px;
    padding:15px 20px;
    background:#BDB76B;
    background-color:#696969;
    border-radius: 10px;
    box-shadow:0 0 5px rgba(0, 0, 0, 0.4);
}
form:hover{
		float:left;
    width:250px;
    margin:75px;
    padding:15px 20px;
    background:#BDB76B;
    background-color:#708090;
    border-radius: 10px;
    box-shadow:0 0 5px rgba(0, 0, 0, 0.4);
}
label{
    display:block;
    margin-top:1em;
    margin-bottom:0.5em;
}
label:first-child{
    margin-top:0;
}
input[type="text"],
input[type="password"]{
    width:100%;
    border:1px solid #ccc;
    padding:4px 5px;
    background:white;
    border-radius: 5px;
    box-shadow:inset 0 1px 2px rgba(0, 0, 0, 0.2);
    box-sizing:border-box;
}
input[type="text"]:focus,
input[type="password"]:focus{
    box-shadow:0 0 5px rgba(50, 200, 255, 0.5);
    outline:none;
}
input[type="submit"]{
    display:block;
    margin-top:1em;
    padding:5px 15px;  
    font-weight:bold;
    color:#333;
    background:white;
    border:none;
    border-radius: 12px;
    background-image: linear-gradient(top, #fff, #ddd);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    text-shadow:0 1px 1px white;
}
      </style>
   </head>
<body>
   <div class = "log">
   </div>  
<?php
   include_once('database.php');
   $database = new DataBase();
   $form = '<form action="index.php" method="POST" >
   <p><span>Логин:</span>
   <span style="float: right"><input type="text" size="20" name="login" /></span></p>
   <p><span>Пароль:</span>
   <span style="float: right"> <input type="password" name="password" /></span></p>
   <input type="submit" name="submit_form" value="отправить" />
   </form>
  </body>
</html>';
if (isset($_POST['submit_form'])) {
if ($database -> sign_up($_POST['login'], $_POST['password']) == false) {
echo "<h2 style='text-align:center'>Неправильный ввод!</h2>".$form;
die();
}
} else {
echo $form;
die();
}
?>
<h1 style="text-align: center; color: #BDB76B">Добро пожаловать на наш сайт!</h1>
</body>
</html>