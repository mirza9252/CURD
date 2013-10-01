<?php
if (isset($_POST['save'])) {
    //include database configuration
    include 'db_connect.php';
//    extract($_REQUEST);
//    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $email = $_POST['email'];
    $password = md5($_POST ['password']);
    //$password = md5(strip_tags($_POST['password']));

    //sql insert statement
    $sql = "insert into user_profile SET name='$name', age='$age', sex='$sex', email='$email', password='$password'";
    $query = mysql_query($sql) or die(mysql_error());
    //insert query to the database
    if ($query) {
        //if successful query
        echo "New record was saved.";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        <title>Create an User Profile</title> 

        <style type="text/css">
            .s{
                color: red;
            }
        </style>
    </head>
    <body>        
        <a href="index.php">Back to Main page</a>
        <br />

        <!-- Information for the profile -->
        <form action='#' method='post'>
            <table>
<!--                <tr>
                    <td>Id</td>
                    <td><input type='number' name='id' /></td>
                </tr>-->
                <tr>
                    <td>Name</td>
                    <td><input type='text' name='name' /></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type='text' name='age' /></td>
                </tr>
                <tr>
                    <td>Sex</td>
                    <td><input type='text' name='sex' /></td>
                </tr>
               
                 <tr>
                    <td>Email</td>
                    <td><input type='text' name='email' /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type='text' name='password' /></td>
                </tr>
<!--                <tr>
                    <td>Create Date</td>
                    <td><input type='date' name='create_date' /></td>
                </tr>-->
                <tr>
                    <td>
                        <input type='submit' value='Save' name="save" />
                    </td>
               </tr>
               
            </table>
        </form>
        <!--<button " onclick="location.href = 'http://localhost/profile/index.php'">Back To Main Page</button><br/>-->
   </body>
</html>
