<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Delete</title>
    </head>
<body>
<?php

    if(isset($_REQUEST['id']))
{
    include('db_connect.php');
    if(isset($_REQUEST['delete']))
{
    extract($_REQUEST);
    //update the record if the form was submitted
    $query=mysql_query("delete user_profile set id='$id', name='$name', age='$age', sex='$s where id='$id'") or die(mysql_error());
    if($query)
    {
        //this will be displayed when the query was successful
        echo "<div>Record was edited.</div>";
    }
}
$id=$_REQUEST['id'];
//this query will select the user data which is to be used to fill up the form
$query=mysql_query("select * from user_profile where id='$id'") or die(mysql_error());
$num=mysql_num_rows($query);
//validation, if a record exist or not
//there's an information to be edited
if($num>0)
{
    $row=mysql_fetch_assoc($query);
    extract($row);
    ?>
    <!--we have our html form here where new user information will be entered-->
    <form action='' method='post' border='0'>
    <table align="center">
        <tr>
        <td>id</td>
        <td><input type='text' name='id' value='<?php echo $id;  ?>' /></td>
        </tr>
        <tr>
        <td>Name</td>
        <td><input type='text' name='name' value='<?php echo $name;  ?>' /></td>
        </tr>
        <tr>
        <td>Age</td>
        <td><input type='text' name='age' value='<?php echo $age;  ?>' /></td>
        </tr>
        <tr>
        <td>Sex</td>
        <td><input type='text' name='sex' value='<?php echo $sex;  ?>' /></td>
        </tr>
        <tr>
        <td>email</td>
        <td><input type='text' name='email' value='<?php echo $email;  ?>' /></td>
        </tr>
        <tr>
        <td>Create Date</td>
        <td><input type='text' name='create_date'  value='<?php echo $create_date;  ?>' /></td>
        <tr>
        <td></td>
        <td>
        <!-- so that we could identify what record is to be updated -->
        <input type='hidden' name='id' value='<?php echo $id ?>' />
        <!-- we will set the action to edit -->
        <input type='submit' value='delete' name="edit" />
        </td>
        </tr>
    </table>
    </form>
    <?php
}
else
    {
        echo "<div>User with this id is not found.</div>";
    }
}
else
    {
        echo "<div> You are not authorized to view this page";
    }
    
?>
<!--
<script type='text/javascript'>
function delete_user( id ){
//this script helps us to
var answer = confirm('Are you sure?');
if ( answer )
{ 
//if user clicked ok
//redirect to url with action as delete and id to the record to be deleted
window.location = 'index.php?action=delete&id=' + id;
}
}
</script>
-->

    </body>
</html>
