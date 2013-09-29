
<html>
    
<body>

<?php

    /*
     * To change this template, choose Tools | Templates
     * and open the template in the editor.
     */
    //connect database
    include 'db_connect.php';
    //selecting data
    $sql="select id, name, age, sex, email, create_date from user_profile";
    //query the database
    $rs=mysql_query($sql) or die($sql.">>".mysql_error());
    //count how many records found
    $num=mysql_num_rows($rs);
    if($num>0){ //check if more than 0 record found
    ?>
<table align="center" border='1'>

    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Age</th>
    <th>Sex</th>
    <th>Email</th>
    <th>Crate Date</th>
    </tr>

    <?php
    //retrieve our table contents
    while($row=mysql_fetch_array($rs)){
    //extract row
    //this will make $row['id'] to
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
        </tr>
    <?php
    }
   ?>
</table>
<?php
}
else
{ //if no records found
    echo "No records found.";
}
?>
    </body
    >
<button style="width:65;height:65;background-color:lightgreen" onclick="location.href='http://localhost/profile/index.php'">Bcak to Main Page</button><br/>
</html>