<?php require 'header.php'; ?>

<form action="register_process.php" id="register_form" method="post">
    <div>
        <label for="">Name</label>
        <input type="text" name="name" id="" placeholder="Enter your name" required>
    </div>

    <div>
        <label for="">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" onkeyup="checkEmail()" required>
        <span id="alert" class="alert"></span>
    </div>

    <div>
        <label for="">Password</label>
        <input type="password" name="password" id="password" placeholder="Enter your password" required>
    </div>

    <div>
        <label for="">Confirm your password</label>
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm your password" onkeyup="checkPassword()" required>
    </div>

    <div id="submit_btn">
        <button onclick="checkEmail()" type="submit">Register</button>
    </div>

</form>

<script>
    $("#submit_btn").hide();

    function checkPassword() {

        var password = $("#password").val();
        var confirm_password = $("#confirm_password").val();

        if (password == confirm_password) {
            $("#submit_btn").show(100);
            checkEmail();
        } else {
            $("#submit_btn").hide();
        }
    }

    function checkEmail() {
        $("#alert").html("");
        var email = $("#email").val();
        $.ajax({
            type: 'POST',
            url: 'register_check_email.php',
            data: 'email=' + email,
            success: function(response) {
                if (response == "1") {
                    $("#alert").append("Email is registered").attr('style="background-color:#ffbbbb;"');
                    $("#submit_btn").hide();
                } else {
                    $("#submit_btn").show(100);
                }
            }
        });
    }
</script>

<?php require 'footer.php'; ?>