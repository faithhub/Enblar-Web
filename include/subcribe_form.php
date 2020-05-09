<section class="subscription-block">
  <div class="container">
    <figure class="image wow fadeIn"><img src="images/bottom-image2.png" alt="Image"> </figure>
    <div class="subscribe-box">
      <div class="inner wow fadeIn">
        <h2>Subscribe for Members</h2>
        <form method="POST" id="form">
          <div class="text-center p-2" id="output" style="color:red"></div>
          <input type="email" name="email" placeholder="Type your e-mail address">
          <input type="submit" id='subcribe' value="SUBSCRIBE NOW">
        </form>
      </div>
      <!-- end inner --> 
    </div>
    <!-- end subscribe-box --> 
  </div>
  <!-- end container --> 
</section>
<script src="dashboard/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript">
  $('#subcribe').click(function(e){
    e.preventDefault();
    $.ajax({
            url: "include/subcribe.php",
            method: "post",
            data: $('form').serialize(),
            dataType: "html",
            beforeSend: function(){          
          $("#output").fadeOut();
          $("#output").html("<span style = 'color:white'>Subscribing...</span>");
        },
        success: function(output){
          if (output == "200") {       
            alert("Thank you for subcribing to our newsletter.");
            window.location.reload();
          }else{
          $("#output").fadeIn(1000, function(){
            $("#output").html(output);
          })
        }
          }
          });
  })
</script>