
<!-- page content -->
<html>
    <head>
        <title>Contact Form</title>
        
        <script>
            function validate() {
                var x = document.forms["contactForm"]["name"].value;
                if(x == null || x == "") {
                    alert("Your name is required");
                    return false;
                }
                var y = document.forms["contactForm"]["email"].value;
                if(y == null || y == "") {
                    alert("Your email address is required");
                    return false;
                }
            }
        
        </script>
    
    </head>
    <body>
        <div class="col-md-9">
            <div class="well contactForm">
                <div id="contact_header">
                    <h2>Contact Us</h2>
                    <h4>We Would Love to Hear From You</h4>
                    <br/>
                    <br/>
                </div>  
              <form name="contactForm" form method="post" action="<?php print APP_DOC_ROOT . '/home/contact'; ?>" onsubmit="return validate()">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="user_phone" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="comments">Comments</label>
                    <textarea class="form-control" id="comments" name="comments"></textarea>
                </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            
            </div>
        </div>
    </body>
    
</html>
<!-- end page content -->
