<?php require_once ('library/Contact.php'); ?>
<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Contact Form</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/core.css">
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

  <form method="post" id="formContact" class="large-8 large-centered columns custom">
    <fieldset>
      <legend>Contact Form</legend>
      <div class="large-6 columns">
        <label for="first_name">First name: *</label>
        <input
          type="text"
          name="first_name"
          id="first_name"
          placeholder="Your first name" />

      </div>
      <div class="large-6 columns">
        <label for="first_name">Last name: *</label>
        <input
          type="text"
          name="last_name"
          id="last_name"
          placeholder="Your Last name" />

      </div>

       </div>
      <div class="large-6 columns">
        <label for="email">Email address: *</label>
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Your email address" />

      </div>

      <div class="large-6 columns">
        <label for="type">Enquiry type: *</label>
        <select>
          name="type"
          id="type"
            <option value="">Select one</option>
              <?php if (!empty(Contact::$types)) { ?>
                  <?php foreach (Contact::$types as $id => $type) { ?>
                     <option value="<?php echo $id; ?>"><?php echo $type; ?></option>                 
                  <?php } ?>
               <?php } ?>   
        </select>
       </div>

      
      <div class="large-12 columns"></div>
        <label for="enquiry">Enquiry: *</label>
        <textarea name="enquiry" id="enquiry" placeholder="Your message"></textarea>
      
      <div class="large-12 columns">
        <button class="button small" ><i class="icon-envelope" ></i> Sent message</button>
      </div>    
    </fieldset>
  </form>  
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
