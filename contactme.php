<?php include('nav.php'); ?>
<div class="container contact-form" >
  <div style="margin-bottom:-10%">
  <center><img src=img/mess.png style="width:200px"></center>
</div>
    <form action="conn.php" method="POST">
        <div style="margin-top:15%">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" class="form-control" id="name" placeholder="Enter name"style="height:40px" name="name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" id="email" placeholder="Enter email"style="height:40px" name="email" required>
                </div>
              </div>
              <div style="margin-top:2%"></div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" id="subject" placeholder="Enter subject"style="height:40px" name="subject">
              </div>
              <div style="margin-top:2%"></div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" id="message" placeholder="Enter message"style="height:40px" name="message" required>
              </div>
              <div class="row">
              <div style="margin-top:2%"></div>
              <div class="text-center">
                <input type="submit" class="btn btn-primary col-lg-2" value="submit" class="btn btn-default" name="submit">
              </div>
              </form>

            
</div>
<div style="margin-top:5%">
<?php include('footer.php'); ?>
</div>
<style>

    body{
        background:-webkit-linear-gradient(left,lightblue,lightgreen);    
    }

</style>



