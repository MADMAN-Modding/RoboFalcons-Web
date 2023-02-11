<head>
<title>Login</title>

</head>
<body>
<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user == "admin"
&& $pass == "admin")
{
        include("schedule.html");
}
else
{
        if(isset($_POST))
        {?>
    
                <form method="POST" action="schedule.html">
                Use' <input type="text" name="user"></input><br/>
            'Pass <input type="password" name="pass"></input><br/>
                <input type="submit" name="submit" value="Go"></input>
                </form>
        <?}
    }
    ?>
</body>
