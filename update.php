<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        </head>
    <body>
        <p >Update User Profile</p>
    
        <?php

//connecting database
include 'db_connect.php';
//selecting records
$query=mysql_query("select id, name, age, sex, email, create_date from user_profile");
//count how many records found
$num=mysql_num_rows($query);
if($num>0){ //check if more than 0 record found
?>
<table align="center" border='1'>
<tr>
<th>Id</th>
<th>Name</th>
<th>Age</th>
<th>Sex</th>
<th>email</th>
<th>Create Date</th>
<th>Action</th>

</tr>
<?php
//retrieve our table contents

while($row=mysql_fetch_array($query)){
//extract row
//this will make $row['id'] to
//just $firstname only
extract($row);
//creating new table row per record
?>
<tr>
<td><?php echo $id; ?></td>
<td><?php echo $name; ?></td>
<td><?php echo $age; ?></td>
<td><?php echo $sex; ?></td>
<td><?php echo $email; ?></td>
<td><?php echo $create_date; ?></td>
<!-- edit link here-->
<td>
<a href="edit.php?id=<?php echo $id; ?>">Edit</a>
</td>
</tr>
<?php
}
?>
</table>
<?php
}
else{ //if no records found
echo "No records found.";
}
?>

    </body>
    <button style="width:65;height:65;background-color:lightgreen" onclick="location.href='http://localhost/profile/index.php'">Bcak to Main Page</button><br/>
</html>
