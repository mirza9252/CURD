<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Create an User Profile</title>
        <button style="width:65;height:65;background-color:lightgreen" onclick="location.href='http://localhost/profile/index.php'">Back To Main Page</button><br/>
    </head>
    <body>
        <?php

        if(isset($_POST['save']))
        {
        //include database configuration
        include 'db_connect.php';
        extract($_REQUEST);
        //sql insert statement
        $query=mysql_query("insert into user_profile SET id='$id', name='$name', age='$age', sex='$sex', email='$email', create_date='$create_date'") or die(mysql_error());
        //insert query to the database
        if($query)
            {
            //if successful query
            echo "New record was saved.";

            }

        }
        

?>
        <!-- Inmormation for the profile -->
        <form action='#' method='post' border='0'>
        <table align="center">
        <tr>
        <td>Id</td>
        <td><input type='number' name='id' /></td>
        </tr>
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
        <td><input type='test' name='sex' /></td>
        </tr>
        <tr>
        <td>Email</td>
        <td><input type='text' name='email' /></td>
        </tr>
        <tr>
        <td>Date</td>
        <td><input type='date' name='create_date' /></td>
        </tr>
        <td>
        <input type='submit' value='Save' name="save" />
        </td>
        </tr>
        </table>
        </form>

    </body>
</html>
