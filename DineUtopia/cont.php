
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>DINE UTOPIA</title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="styleCont.css">
       
         <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">


        
        <!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

         <link rel="stylesheet" type="text/css" href="styleAbt.css">
        <script src="scriptToggleSidebarMenu.js" type="text/javascript"></script>
        

    </head>
    <body>
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar"></nav>
        <div id="content" class="container-fluid">
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-info" style="background-color: transparent">
                <i class="fas fa-align-left fa-3x"></i>
            </button>
        <span style="font-family: 'Cinzel', serif;
font-size: 1.5em;
    color:#bbd4cd;
    text-shadow:1px 2px 10px black;">

        </span>
        </div>
    </nav>
          <div class=" section banner container-fluid" style="background: url('https://images.unsplash.com/photo-1522165078649-823cf4dbaf46?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=756f069c98c96a701453b1e27630e961&auto=format&fit=crop&w=750&q=80') no-repeat center center; background-size: cover;">
          </div>  
          <div class="container-fluid section menu-top" >
                <header style="text-align: center">
                    <h1 style="padding-top:20px">Contact Us</h1>
                    
        </header>
        <br>
        
        <div class="container contact-form">
            <div class="contact-image">
                <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
            </div>
            <form id="contact-form" name="contact-form" method="post" action="mail.php">
                <h3 >Drop Us a Message</h3>
                
               <div class="row">
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60333.44504616914!2d72.87187011637147!3d19.07075722827673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c88d0446cd13%3A0x8a7b82d9ffc466fd!2sBarbeque+Nation+-+Mumbai+-+Kurla!5e0!3m2!1sen!2sin!4v1539926065230"  width="470" height="370" frameborder="0" style="border:0;padding-right:100px;border-radius:5px;" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-6">
                       <div class="form-group">
                            <input type="text" id="name" name="txtName" class="form-control" placeholder="Your Name *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="txtEmail" class="form-control" placeholder="Your Email *" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="text" id="subject" name="txtSubject" class="form-control" placeholder="Subject *" value="" required/>
                        </div>
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                    </div>
                </div>
            </form>
</div>


</div>
</div>
</div>
<div id="signupModalTemplate">
        </div>
        <div id="loginModalTemplate">
        </div>
         <script> $("#signupModalTemplate").load("modal1.php #signupModal");
        </script>
        <script> $("#loginModalTemplate").load("modal1.php #loginModal");    
        </script>
        <script>
            $("#sidebar").load("SideBar.php");
        </script>
</body>
</html>