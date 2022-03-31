<!DOCTYPE html>
<html>
<head>
  <title>Form Validation</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <form id="contact" action="action.php" method="post">
      <h3>Form Validation In PHP</h3>
      <h4>Using Jquery</h4>
      <fieldset>
      <input type="text" class="form-control shadow-none" name="name" id="name" placeholder="Enter Your Name">
      </fieldset>
      <fieldset>
      <input type="text" class="form-control shadow-none" name="email" id="email" placeholder="Enter Your Email">
      </fieldset>
      <fieldset>
      <input type="text" class="form-control shadow-none" name="contact" id="contact" placeholder="Enter Your Phone">
      </fieldset>
      <fieldset>
      <input type="password" class="form-control shadow-none" name="password" id="password" placeholder="Enter Password">
      </fieldset> 
      <fieldset>
      <input type="password" class="form-control shadow-none" name="confirmpassword" id="confirmpassword" placeholder="Re-Enter Password">
      </fieldset>
      <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
      </fieldset>
    </form>
  </div>
</body>
<script>
  $(document).ready(function() {
    $('#contact').validate({
      rules: {
        name: {
          required: true
        },
        email: {
          required: true,
          email: true
        },
        contact: {
          required: true,
          rangelength: [10, 12],
          number: true
        },
        password: {
          required: true,
          minlength: 8
        },
        confirmpassword: {
          required: true,
          equalTo: "#password"
        }
      },
      messages: {
        name: 'Please enter Name.',
        email: {
          required: 'Please enter Email Address.',
          email: 'Please enter a valid Email Address.',
        },
        contact: {
          required: 'Please enter Contact.',
          rangelength: 'Contact should be 10 digit number.'
        },
        password: {
          required: 'Please enter Password.',
          minlength: 'Password must be at least 8 characters long.',
        },
        confirmpassword: {
          required: 'Please enter Confirm Password.',
          equalTo: 'Confirm Password do not match with Password.',
        }
      },
      submitHandler: function(form) {
        form.submit();
      }
    });
  });
</script>

</html>