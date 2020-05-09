<?php include "header.php" ?>
<nav class="navbar">
  <div class="container">
    <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="Image"></a> </div>
    <!-- end logo -->
    <div class="hamburger-menu"><b>MENU</b>
      <div class="hamburger" id="hamburger-menu"> <span></span> <span></span> <span></span> </div>
    </div>
    <!-- end hamburger-menu -->
  </div>
  <!-- end container -->
</nav>
<!-- end navbar -->
<header class="page-header">
  <div class="container">
    <div class="inner">
      <small>Customers see, hear and feel the power of energy.</small>
      <h1>CONTACT US</h1>
    </div>
    <!-- end inner -->
    <ul class="social-media">
      <li><a href="#">BEHANCE</a></li>
      <li><a href="#">DRIBBBLE</a></li>
      <li><a href="#">SLACKS</a></li>
    </ul>
    <!-- end social-media -->
  </div>
  <!-- end containe -->
</header>
<!-- end page-header -->
<section class="content-block solutions">
  <div class="container">
    <div class="row" style="background-color:#eee; margin-top:-70px">
      <div class="col-lg-6 col-md wow fadeIn">
        <!-- <h3>Contact Us</h3> -->
        <form class="resume-form" method="POST" style="margin:0; width:100%; margin-top:12px">
          <p class="text-center" style="color:#490eea">Reach out to us for any enquiry</p>
          <div class="text-center" id="output"></div>
          <div class="form-group wow fadeIn">
            <label>Full Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Type your name">
          </div>
          <div class="form-group wow fadeIn">
            <label>Your Email</label>
            <input type="email" id="email" class="form-control" name="email" placeholder="Your Email">
          </div>
          <div class="form-group wow fadeIn">
            <label>Your Message</label>
            <textarea name="message" id="message" class="form-control" placeholder="Message" rows="4" style="border:0;"></textarea>
          </div>
          <div class="form-group">
            <button id="send" class="btn btn-primary btn-lg btn-block">Submit</botton>
          </div>
        </form>
      </div>
      <div class="col-lg-6 col-md wow fadeIn" style="margin-left: 0;">
        <div class="mapouter p-2">
          <div class="gmap_canvas"><iframe style="margin-left: 0;" width="530" height="530" id="gmap_canvas" src="https://maps.google.com/maps?q=Opposite%20mania%20gas%20station%2C%20Eleyele-%20Ologuneru%20Rd%2C%20Ibadan%20%2F%20Nigeria&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
          <style>
            .mapouter {
              position: relative;
              text-align: left;
              width="600"height="530"
            }

            .gmap_canvas {
              overflow: hidden;
              background: none !important;
              width="600"height="530"
            }
          </style>
        </div>
      </div>
    </div>
    <div class="row justify-content-center text-center">
      <div class="col-lg-3 col-md-4 wow fadeIn" style="margin-top: 50px">
        <div class="icon-content-box">
          <figure><i class="fa fa-location fa-4x" style="color:#490eea"></i> </figure>
          <h5>LOCATION</h5>
          <p>Opposite mania gas station, Eleyele- Ologuneru Rd, Ibadan / Nigeria</p>
        </div>
        <!-- end icon-content-box -->
      </div>
      <!-- end col-3 -->
      <div class="col-lg-3 col-md-4 wow fadeIn" style="margin-top: 50px">
        <div class="icon-content-box">
          <figure> <i class="far fa-envelope-open-text fa-3x" style="color:#490eea"></i> </figure>
          <h5>EMAIL</h5>
          <p>support@enblar.com</p>
        </div>
        <!-- end icon-content-box -->
      </div>
      <!-- end col-3 -->
      <div class="col-lg-3 col-md-4 wow fadeIn" style="margin-top: 50px">
        <div class="icon-content-box">
          <figure> <i class="fa fa-phone fa-3x" style="color:#490eea"></i> </figure>
          <h5>PHONE</h5>
          <p>+234 801 234 567<br> +234 901 234 567 </p>
        </div>
        <!-- end icon-content-box -->
      </div>
    </div>
    <!-- end row -->
  </div>
  <!-- end container -->
</section>
<!-- end content-block -->
<script src="dashboard/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript">
  $('#send').click(function(e) {
    e.preventDefault();
    var formData = {
      'name': $('input[name=name]').val(),
      'email': $('input[name=email]').val(),
      'message': $('textarea[name=message]').val()
    };
    $.ajax({
      url: "include/contact.php",
      method: "POST",
      data: formData,
      beforeSend: function() {
        $("#output").fadeOut();
        $("#output").html("<span style = 'color:green'>Processing...</span>");
      },
      success: function(output) {
        if (output == "200") {
          alert("Message successfully Sent");
          //$("#form")[0].reset;
          window.location.reload();
        } else {
          $("#output").fadeIn(1000, function() {
            $("#output").html("<span style = 'color:red'>" + output + "</span>");
          })
        }
      }
    });
  })
</script>
<?php
include 'include/subcribe_form.php' ?>
<?php include 'footer.php' ?>