


<div class="modal fade" id="loginModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="background-color:#E1DAD5">
<div class="modal-header">
          <h4 class="modal-title" style="padding-left:180px">LOGIN</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>        
        <div class="modal-body">
  <form action="login.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" autocomplete="off" required style="border-radius:10px;">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="login_pwd" placeholder="Enter password" name="login_pswd" required minlength="5" style="border-radius:10px;">
    </div>
    <div class="form-group">
      <label for="cus_type">Login as:</label>
      <label class="radio-inline">
      <input type="radio" name="cus_type" value="customer" id="cust_login" required>Customer
    </label>
    <label class="radio-inline">
      <input type="radio" name="cus_type" value="manager" id="man_login">Manager
    </label>
    </div>
       <button type="submit" class="btn btn-primary">Login</button><span> &nbsp; &nbsp;</span>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      <span style="float: right"> &nbsp; &nbsp;Don't have an Account? <a href="#" data-toggle="modal" data-target="#signupModal" data-dismiss="modal" style="text-decoration: underline; color:blue" >Register Here</a></span>
  </form>
            </div>
</div>
        </div>
        </div>

<div class="modal fade" id="signupModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="background-color:#E1DAD5">
<div class="modal-header" style="height:80px;">
         
          <pre><h4 class="modal-title" style="padding-left:160px"><span class="fa fa-user-plus fa-lg" aria-hidden="true"  ></span> REGISTER</h4></pre>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>        
        <div class="modal-body">
  <form action="register_page.php" method="post">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required style="border-radius:10px;">
    </div>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" required style="border-radius:10px;">
    </div>
    <div class="form-group">
        <label for="con_num">Contact Number:</label>
        <input type="text" class="form-control" id="con_num" placeholder="Enter Contact Number" name="con_num"  required pattern="(7|8|9)\d{9}" title="Enter Valid Contact Number" style="border-radius:10px;">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input title="Password must contain at least 5 characters" type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" minlength="5" required onkeyup='check();' style="border-radius:10px;">
    </div>
    <div class="form-group">
      <label for="cnfpwd">Confirm Password:</label>
      <input type="password" class="form-control" id="cnfpwd" placeholder="Please Re-Enter password" name="cnfpswd" minlength="5" required onkeyup='check();' style="border-radius:10px;">
    </div>
    <div class="form-group">
        <label for="code">Name:</label>
        <input type="text" class="form-control" id="code" placeholder="Enter Manager Code" name="code" style="border-radius:10px;">
    </div>
     <div id='message'></div>
       <button type="submit" class="btn btn-primary" id="submit-button">SignUp</button><span> &nbsp; &nbsp;</span>
       <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      <span style="float: right"> &nbsp; &nbsp;Already have an Account? <a href="#" data-toggle="modal" data-target="#loginModal" data-dismiss="modal" style="text-decoration: underline; color:blue">Login Here</a></span>
  </form>
            </div>
    </div>
</div>
        </div>
        
  <div class="modal fade" id="resModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="background-color:#E1DAD5">
<div class="modal-header">
          <h4 class="modal-title" style="padding-left:160px">Reservation</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>        
        <div class="modal-body">
<form role="form" action="reserve.php" method = "post">
            <div class="form-group">
             
                      <label for="r_date"><span class="glyphicon glyphicon-calendar"></span>Pick a date</label>
                    <input type='date' class="form-control" name="r_date" required />
               
                </div>

            <div class="form-group">
              <label for="r_time"><span class="glyphicon glyphicon-time"></span>Timing</label>
              <input type="time" class="form-control" name="r_time" required />
            </div>
            <div class="form-group">
              <label for="no_people"><span class="glyphicon glyphicon-user"></span>Number of people</label>
              <input type="number" class="form-control" name="no_people" min="0" required />
            </div>
                        <div class="button">
                          <button type="submit"   class="btn btn-success btn-block proceed"><span class="glyphicon glyphicon-off"></span> Proceed</button>
                      </div>
          </form>
            </div>
</div>
        </div>
        </div> 