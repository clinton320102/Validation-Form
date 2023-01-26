<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <title>Validation form by Clinton</title>

  <script>
    $(document).ready(function() {
      $("#form").submit(function(e) {
        e.preventDefault();

        var name = $("#mail-name").val();
        var email = $("#mail-email").val();
        var gender = $("#mail-gender").val();
        var submit = $("#mail-submit").val();

        $("#form-message").load("mail.php", {
          name: name,
          email: email,
          gender: gender,
          submit: submit
        });
      });
    });
  </script>
</head>

<body>
  <div class="container">
    <form id="form">
      <div class="form_header">
        <h3>Give us information</h3>
      </div>
      <input id="mail-name" type="text" placeholder="Full Name">
      <input id="mail-email" type="text" placeholder="Email">
      <select id="mail-gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
      <input id="mail-submit" type="submit" value="Send e-mail">

      <div id="form-message" class="form_message"></div>
    </form>
  </div>

</body>

</html>
