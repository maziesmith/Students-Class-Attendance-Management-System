<!doctype html>
<html>
<head>
    <title>Student Class Attendance Management System</title>
    
    <meta charset="UTF-8">
    <meta name="description" content="Student Class Attendance Management System">
    <meta name="keywords" content="Class, Attendance, Managment">
    <meta name="author" content="Saiful Islam Rasel">
    <meta http-equiv="refresh" content="60">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/registration.css">
</head>
<body>
    
    <div class="mainSection">
        <div class="header">
            <img src="../slideShowImage/login.png" alt="demoImage">
            <h2>STUDENT'S CLASS ATTENDANCE MANAGEMENT SYSTEM</h2>
        </div>
        
        <div class="registerForm">
            <form action="completeTeacherLogin.php" method="post">
                <table align = "center">
                    <tr>
                        <th colspan = "2">Teacher Login Form</th>
                    </tr>
                    <tr>
                        <td>UserID</td>
                        <td><input type="text" name="userId" required></td>
                    </tr>
                    <tr>
                        <td>Institute code/id </td>
                        <td><input type="text" name="instituteCode" required></td>
                    </tr>
                    <tr>
                        <td>Password </td>
                        <td><input type="text" name="password" required></td>
                    </tr>
                    <tr>
                        <th colspan = "2"><input type="submit" name="submit" value="LOG IN"></th>
                    </tr>
                </table>
            </form>
        </div>
        
    
        <div class="footer">
            <h4>&copy SIR SOFT</h4>
            <p>Maintainance by: Saiful Islam Rasel</p>
            <p>Server Time : 
                <?php 
                    date_default_timezone_set("Asia/Dhaka");
                    echo date("H:i:sa");
                ?> 
            </p>
        </div>
    </div>
    
</body>

</html>
