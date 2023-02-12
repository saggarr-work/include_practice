
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    name: <input type="text" name="name"> <span class="error"> <?php echo $name_error; ?> </span> <br><br>
    email: <input type="email" name="email"> <span class="error"> <?php echo $email_error; ?> </span> <br><br>
    password: <input type="password" name="password" id="password"> <span class="error"> <?php echo $pass_error; ?> </span> <br><br><br>
    <input type="submit" name="submit" id="submit">
</form>