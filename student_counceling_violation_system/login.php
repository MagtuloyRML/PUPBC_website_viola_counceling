<!DOCTYPE html>
<html>
<head>
	<title>PUP Binan Campus Website</title>
	<link rel="stylesheet"  href="#">
	<link href="css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!---icon--->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="id=edge">
</head>

<body>
    <!---pipili ng class kung admin ba ang papasok o student--->
	<div class="wrapper">
        <div id="selection" class="class_group">
            <div class="greeting">
                <p>Welcome to PUPBC Violation and Counseling System</p>
            </div>
            <div class="class_button">
                <button id="stud_btn" type="button" class="button">Student</button>
            </div>
            <div class="class_button">
                <button id="admin_btn" type="button" class="button">Administrator</button>
            </div>
        </div>
        <!---student ang papasok--->
        <div id="login_student" class="login student">
            <button class="bttn back"><i class="fa fa-close"></i></button>
            <form action="stud_login_function.php" method="POST">
                <div class="input-container">
                    <input class="input-field" type="text" placeholder="Username" name="usrnm">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input-container">
                    <input class="input-field" type="password" placeholder="Password" name="password">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="action_button">
                    <button type="submit" class="btn">Log in</button>
                </div>
                <div class="action_button">
                    <button id="reg_stud_btn" class="btn">Register</button>
                </div>
                
            </form>
        </div>
        <!---admin ang papasok--->
        <div id="login_admin" class="login admin">
            <button id="closebtn" class="bttn back1"><i class="fa fa-close"></i></button>
            <form action="admin_login_function.php" method = "POST">
                <div class="input-container">
                    <input class="input-field" type="text" placeholder="Admin Username" name="usrnm">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input-container">
                    <input class="input-field" type="password" placeholder="Password" name="password">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="action_button">
                    <button type="submit" class="btn">Log in</button>
                </div>
                <div class="action_button">
                    <button id="reg_admin_btn" class="btn">Register</button>
                </div>
                
            </form>
        </div>

    </div>
    <!---pagkaclick ng reg sa student--->
    <div id="reg_student" class="reg student">
        <button class="bttn regback"><i class="fa fa-close"></i></button>
            <form action="stud_signup_function.php" method = "POST">
                <p>Fill up the following to create an Account</p>
                <div class="reg_content">
                    <!---Text field for student registration
                    dagdagan mo nyo nalang ng info na need sa system--->
                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="text" placeholder="Username" name="usrnm" value=>
                    </div>
                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="password" placeholder="Password" name="password">
                    </div>
                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="text" placeholder="Password" name="re-enter_password">
                    </div>
                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="text" placeholder="Password" name="usrnm">
                    </div>
                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <p>Gender: </p>
                        <input class="gender" type="radio" id="#" name="gender" value="#">
                        <label for="#">Male</label>
                        <input class="gender" type="radio" id="#" name="gender" value="#">
                        <label for="#">Female</label>
                    </div>
                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="date" placeholder="Password" name="usrnm">
                    </div>
                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="text" placeholder="Password" name="usrnm">
                    </div>
                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="text" placeholder="Password" name="usrnm">
                    </div>
                </div>
                <div class="sign_up">
                    <button type="submit" class="btn">Sign up</button>
                </div>
                
            </form>
    </div>
    
    <!---pagkaclick ng reg sa admin--->
    <div id="reg_admin" class="reg admin">
        <button id="closebtn_reg_admin" class="closebtn_reg_admin"><i class="fa fa-close"></i></button>
            <form action="#">
                <p>Fill up the following to create an Account</p>
                <div class="reg_content">
                    <!---Text field for student registration
                    dagdagan mo nyo nalang ng info na need sa system--->
                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="text" placeholder="Admin Username" name="usrnm">
                    </div>
                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="password" placeholder="Password" name="usrnm">
                    </div>
                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="text" placeholder="Password" name="usrnm">
                    </div>
                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="text" placeholder="Password" name="usrnm">
                    </div>
                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <p>Gender: </p>
                        <input class="gender" type="radio" id="#" name="#" value="#">
                        <label for="#">Male</label>
                        <input class="gender" type="radio" id="#" name="#" value="#">
                        <label for="#">Female</label>
                    </div>
                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="date" placeholder="Password" name="usrnm">
                    </div>
                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="text" placeholder="Password" name="usrnm">
                    </div>
                    <div class="input-container">
                        <i class="fa fa-user icon"></i>
                        <input class="input-field" type="text" placeholder="Password" name="usrnm">
                    </div>
                </div>
                <button type="submit" class="btn">Sign up</button>
            </form>
    </div>
    




    <script src="js/login.js"></script>
</body>
</html>