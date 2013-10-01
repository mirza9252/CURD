<?php include('db_connect.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
  
<body>
      <h1>Delete User Profile </h1>

    <?php
    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];

        if (isset($_REQUEST['edit'])) {
            //extract($_REQUEST);
//update the record if the form was submitted
            $name = $_POST['name'];
            $age = $_POST['age'];
            $sex = $_POST['sex'];
            $email = $_POST['email']; 
            $query = mysql_query("delete user_profile where id= $id") or die(mysql_error());
            if ($query) {
//this will be displayed when the query was successful
                echo "<div>Record is Deleted.</div>";
            }
        }

//this query will select the user data which is to be used to fill up the form
        $query = mysql_query("select * from user_profile where id='$id'") or die(mysql_error());
        $num = mysql_num_rows($query);
//just a little validation, if a record was found, the form will be shown
//it means that there's an information to be edited
        if ($num > 0) {
            $row = mysql_fetch_assoc($query);
            extract($row);
            ?>
            <!--we have our html form here where new user information will be entered-->

            <form action='' method='post' >

                <table>

                    
                    <tr>
                        <td>Name</td>
                        <td><input type='text' name='name' value='<?php echo $name; ?>' /></td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td><input type='text' name='age'  value='<?php echo $age; ?>' /></td>
                    </tr>
                    <tr>
                        <td>Sex</td>
                        <td><input type='text' name='sex'  value='<?php echo $sex; ?>' /></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type='text' name='email'  value='<?php echo $email; ?>' /></td>
                    </tr>
                 <tr>
                        <td>
                            <!-- so that we could identify what record is to be updated -->
                            <input type='hidden' name='id' value='<?php echo $id ?>' />
                            <!-- we will set the action to edit -->
                            <input type='submit' value='Delete' name="delete" />
                        </td>
                 </tr>
                </table>
            </form>
            <?php
        } else {

            echo "<div>User with this id is not found.</div>";
        }
    } else {
        echo "<div> You are not authorized to view this page";
    }
    echo "<a href='index.php'>Back To List</a>";
    ?>
</body>
</html>
