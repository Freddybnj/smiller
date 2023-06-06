<!DOCTYPE html>
<html>
  <head>
    <title>Simple PHP Contact Form</title>
    <link rel="stylesheet" href="x-cosmetics.css">
    <!-- (A) GOOGLE RECAPTCHA API -->
    <script src="https://www.google.com/recaptcha/api.js"></script>

    <!-- (B) AJAX SUBMISSION -->
    <script>
    function doajax () {
      // (B1) GET FORM DATA - APPEND RECAPTCHA RESPONSE
      var data = new FormData(document.getElementById("cform"));
      data.append("g-recaptcha-response", grecaptcha.getResponse());

      // (B2) AJAX FETCH
      fetch("3-process.php", { method: "POST", body: data })
      .then(res => res.text())
      .then(txt => {
        // DO SOMETHING AFTER FORM SUBMISSION
        console.log(txt);
      });
      return false;
    }
    </script>
  </head>
  <body>
    <!-- (C) CONTACT FORM -->
    <form id="cform" method="post" onsubmit="return doajax();">
      <label>Name</label>
      <input type="text" name="name" required>

      <label>Email</label>
      <input type="email" name="email" required>

      <label>Message</label>
      <textarea name="message" required></textarea>

      <!-- (D) CAPTCHA - CHANGE SITE KEY! -->
      <div class="g-recaptcha" data-sitekey="SITE KEY"></div>

      <input type="submit" value="Submit">
    </form>
  </body>
</html>