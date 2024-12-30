<?php 
$connection = mysqli_connect("localhost", "root", "", "ahesanur");
if(isset($_POST['add_user'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $gender = $_POST['gender'];



    $insert_query = "INSERT INTO `users`(`name`, `email`, `password`, `gender`) VALUES ('$name', '$email', '$password', '$gender')";
    $result = mysqli_query($connection, $insert_query);
    
    if($result){
        echo "User Added Successfully";
    }else{
        echo "User Not Added";
    }
}

$sellect_query = "SELECT * FROM `users`";
$sellectQueryResult = mysqli_query($connection, $sellect_query);
$users = mysqli_fetch_all($sellectQueryResult, MYSQLI_ASSOC);




?>

<?php if(!isset($_GET['eid']) && !isset($_GET['did'])){ ?>
<form action="" method="post" >
    <fieldset> 
    <input type="text" name="name" placeholder="Your Name" required> <br><br>
    <input type="email" name="email" placeholder="Your Email" required><br><br>
    <input type="password" name="password" placeholder="Enter Your Password" required><br><br>
    <!-- Gender  -->
    Gender: 
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female" required> Female
     <br><br>
    <input type="submit" name="add_user" value="Add User">
    </fieldset>

</form>
<table border="1" bordercolor="grey" cellspacing="0" cellpadding="10">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Action</th>
    </tr>

    <?php foreach($users as $user): ?>
    <tr>
        <td><?= $user['name']; ?></td>
        <td><?= $user['email']; ?></td>
        <td><?= $user['gender']; ?></td>
        <td>
            <a href="./l24-curd_oprator.php?eid=<?= $user['id']; ?>">Edit</a>
            <a href="./l24-curd_oprator.php?did=<?= $user['id']; ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<?php } ?>
<?php if(isset($_GET['eid'])){ ?>
    <?php 
        $id = $_GET['eid'];
        $sellect_query = "SELECT * FROM `users` WHERE id = $id";
        $sellectQueryResult = mysqli_query($connection, $sellect_query);
        $user = mysqli_fetch_assoc($sellectQueryResult);    




        if(isset($_POST['update_user'])){
            $id = $_GET['eid'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $password = $_POST['password'];
        
            if(password_verify($password, $user['password'])){
                $update_query = "UPDATE `users` SET `name`='$name', `email`='$email', `gender`='$gender' WHERE `id`='$id'";
                $result = mysqli_query($connection, $update_query);
                if($result){
                   echo "User Updated Successfully";
                    echo "<a href='./l24-curd_oprator.php'>Go Back</a>";
                }else{
                    echo "User Not Updated";
                }
            }else{
                echo "Password Not Match";
            }
        }
    ?>
<form action="" method="post" >
    <fieldset> 
        <input type="text" name="name" value="<?= $user['name']; ?>"    placeholder="Your Name" required> <br><br>
        <input type="email" name="email" value="<?= $user['email']; ?>"     placeholder="Your Email" required><br><br>
        <input type="password" name="password" placeholder="Enter Your Password"    required><br><br>
        <!-- Gender  -->
        Gender :
        <input type="radio" name="gender" value="Male" <?= $user['gender'] == "Male" ? "checked":null  ?> /> Male
        <input type="radio" name="gender" value="Female" <?= $user['gender'] == "Female" ? "checked":null  ?> /> Female
        <br><br>
     
        <input type="submit" name="update_user" value="Update User">

    </fieldset>
</form>
<?php } ?>
<?php if(isset($_GET['did'])){ ?>
    <?php 
        $id = $_GET['did'];
        $delete_query = "DELETE FROM `users` WHERE `id`='$id'";
        $result = mysqli_query($connection, $delete_query);
        if($result){
            echo "User Deleted Successfully";
            echo "<a href='./l24-curd_oprator.php'>Go Back</a>";
        }else{
            echo "User Not Deleted";
        }
    ?>
<?php } ?>