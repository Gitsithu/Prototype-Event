<?php include 'header.php'?>
<section style="margin-top:30px;margin-bottom:-45px;">
    <div class="container-fluid">
<div class="row">
    <div class="col-lg-6">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2779.8275660663912!2d96.12750332582384!3d16.808773095504865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ebe7d3182db7%3A0xe6b9c2be650c5b17!2sDigital%20Tree!5e0!3m2!1sen!2smm!4v1571380541458!5m2!1sen!2smm" width="100%" height="700px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
    
    <div class="col-lg-6 text-center top">
<p><b class="contact"><hr>Contact Us</b></p>
<div class="card contactcard">
    <div class="container">
    <form class="needs-validation" novalidate>
  <div class="form-row">
    <div class="col-md-6">
      <label for="validationCustom01">First name</label>
      <input type="text" class="form-control fname" id="validationCustom01"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationCustom02">Last name</label>
      <input type="text" class="form-control lname" id="validationCustom02"  required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

    <div class="col-md-6">
      <label for="validationCustom02">Phone</label>
      <input type="text" class="form-control phone" id="validationCustom03" required>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    <div class="col-md-6">
      <label for="validationCustomUsername">Email</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text email" id="inputGroupPrepend">@</span>
        </div>
        <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>
    
    </div>
  </div>
  <div class="form-group">
  <label for="validationCustomUsername">Message</label>
    <textarea class="form-control msg" id="validationCustom04" required></textarea>   
    <div class="valid-feedback">
        Looks good!
     </div>
   </div>
   <div class="form-group">
   <button class="btn btn-primary" id="bbt" type="submit">Submit form</button>
  <br> 
  </div>
   
  </div>
  <!-- container end -->
</form>
</div>
<br>
<hr>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</div>
    </div>
</div>
<!-- row end -->
    </div>
    <!-- container fluid end -->
</section>
<?php include 'footer.php'?>