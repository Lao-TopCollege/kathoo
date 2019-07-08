<?php
require 'header.php';

checkLogIn();

$id = $_SESSION['user_id'];


$sql = "SELECT * FROM users WHERE id = $id";

$rs = $con->query($sql);

$row = $rs->fetch_array();
echo password_hash('admin', PASSWORD_DEFAULT);
?>

<form action="profile_update.php" id="profile_update" method="post">
    <div class="alert" id="alert"></div>
    <div>
        <label for="">Email</label>
        <input type="email" disabled name="email" id="email" value="<?php echo $row['email']; ?>">
    </div>

    <div>
        <label for="">Name</label>
        <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>">
    </div>

    <div>
        <label for="">New Password</label>
        <input type="password" name="new_password" id="new_password">
    </div>

    <div>
        <label for="">Confirm Password</label>
        <input type="password" name="confirm_password" id="confirm_password">
    </div>

    <div>
        <label for="">Old Password</label>
        <input type="password" name="old_password" id="old_password">
    </div>

    <div>
        <input onclick="checkPassword()" type="button" value="Update">
    </div>
</form>

<script>
    function checkPassword() {
        $("#alert").html("");
        var new_password = $("#new_password").val();
        var confirm_password = $("#confirm_password").val();
        var old_password = $("#old_password").val();

        if (new_password != "") {
            if (new_password != confirm_password) {
                $("#alert").append("Password doesn't match</br>");
            } else {
                if (old_password == "") {
                    $("#alert").append("Please enter old password");
                } else {
                    $("#profile_update").submit();
                }
            }
        } else {
            $("#profile_update").submit();
        }
    }
</script>

<?php require 'footer.php'; ?>