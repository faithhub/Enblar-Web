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
    <div class="inner"> <small>Customers see, hear and feel the power of energy.</small>
      <h1>CAREERS</h1>
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
<section class="content-block">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <ul class="job-positions">
          <li class="wow fadeIn"><span>Position</span><span>Code</span><span>Location</span><span> </span></li>
          <li class="wow fadeIn"><span>UI-UX Designer & Front-End Dev</span><span>WEBDSN001</span><span>Kiev - Ukraine</span><span><a href="#">APPLY</a> </span></li>
          <li class="wow fadeIn"><span>Social Media Manager</span><span>WEBDSN001</span><span>Odessa - Ukraine</span><span><a href="#">APPLY</a> </span></li>
          <li class="wow fadeIn"><span>SEO Specialist</span><span>WEBDSN001</span><span>Lviv - Ukraine</span><span><a href="#">APPLY</a> </span></li>
          <li class="wow fadeIn"><span>Web Product Manager</span><span>WEBDSN001</span><span>Kharkiv - Ukraine</span><span><a href="#">APPLY</a> </span></li>
          <li class="wow fadeIn"><span>Back-End Developer - JAVA</span><span>WEBDSN001</span><span>Kiev - Ukraine</span><span><a href="#">APPLY</a> </span></li>
        </ul>
      </div>
      <!-- end col-12 -->
      <div class="col-12 wow fadeIn">
        <figure class="image"> <img src="images/office01.jpg" alt="Image"> </figure>
      </div>
      <!-- end col-12 -->
      <div class="col-12">
        <form class="resume-form">
          <div class="title-block text-center wow fadeIn"> <img src="images/title-icon.png" alt="Image">
            <h6>LET'S WORK TOGETHER</h6>
            <h2>We allways hire talented and <br>
              new people</h2>
          </div>
          <!-- end title-block -->
          <div class="form-group wow fadeIn">
            <label>Your Name</label>
            <input type="text" placeholder="Type your name">
          </div>
          <!-- end form-group -->
          <div class="form-group wow fadeIn">
            <label>Your E-mail</label>
            <input type="text" placeholder="Type your e-mail">
          </div>
          <!-- end form-group -->
          <div class="form-group wow fadeIn">
            <label>Your Resume</label>
            <div class="file"><i class="far fa-file-pdf"></i>
              <input type="file" id="FileAttachment">
              <input type="text" id="fileuploadurl" readonly placeholder="Maximum file size is 1GB">
              <span class="button">SELECT FILE</span></div>
            <!-- end file -->
          </div>
          <!-- end form-group -->
          <div class="form-group wow fadeIn">
            <label>Your Message</label>
            <textarea placeholder="Type your message"></textarea>
          </div>
          <!-- end form-group -->
          <div class="form-group wow fadeIn">
            <input type="submit" value="APPLY NOW">
          </div>
          <!-- end form-group -->
        </form>
      </div>
      <!-- end col-12 -- > 
    </div>
    <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end content-block -->

<?php include 'include/subcribe_form.php' ?>
<?php include 'footer.php' ?>