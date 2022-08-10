<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];

  $errEmpty = false;
  $errEmail = false;

  if (empty($name) || empty($email) || empty($gender)) {
    echo "<span class='error_msg'>Fill in all fields!</span>";
    $errEmpty = true;
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<span class='error_msg'>Write a valid e-mail address!</span>";
    $errEmail = true;
  } else {
    echo "<span class='success_msg'>Thank you for filling out the form!</span>";
  }
} else {
  echo "There was an error!";
}

?>

<script>
  $("#mail-name, #mail-email").removeClass("input-error")

  var errorEmpty = "<?php echo $errEmpty ?>";
  var errorEmail = "<?php echo $errEmail ?>";

  if (errorEmpty == true) {
    $("#mail-name, #mail-email").addClass("input_error");
  }
  if (errorEmail == true) {
    $("#mail-email").addClass("input_error");
  }
  if (errorEmpty == false && errorEmail == false) {
    $("#mail-name, #mail-email").val("");
  }
</script>