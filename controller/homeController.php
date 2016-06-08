<?php


# Include html header
include( APP_VIEW . '/header.php' );

# Include main navigation
include( APP_VIEW . '/nav.php' );

switch ( $route->getAction() ) {
        
    case 'home':
            include( APP_VIEW .'/home/homeSubNav.php' );
            include( APP_VIEW .'/home/pageView.php' );

        break;

    case 'contact':
        if(isset($_POST['submit'])) {
            
           $dbObj = new db();
            
           // Insert Post into DB
           $sql = "INSERT INTO contact_form
                 (user_name, user_email, user_phone, comments)
                 VALUES
                 (?, ?, ?, ?)";
           $dbObj->dbPrepare($sql);
           $dbObj->dbExecute([
             $_POST['name'],
             $_POST['email'], 
             $_POST['user_phone'], 
             $_POST['comments'],
           ]);
            
            
            include( APP_VIEW .'/home/homeSubNav.php' );
            include( APP_VIEW .'/home/contactSuccess.php' );
        } else {
            include( APP_VIEW .'/home/homeSubNav.php' );
            include( APP_VIEW .'/home/contactView.php' );
        }
        break;
    
    case 'form':
     if(isset($_POST['submit'])) {
         
         $dbObj = new db();
            
         // Insert Post into DB
         $sql = "INSERT INTO application_form
                 (firstname, lastname, email, phone_number, birthdate, address)
                 VALUES
                 (?, ?, ?, ?, ?, ?)";
         $dbObj->dbPrepare($sql);
         $dbObj->dbExecute([
           $_POST['firstName'],
           $_POST['lastName'],
           $_POST['email'],  
           $_POST['phone_number'], 
           $_POST['birth_date'],
           $_POST['address'],
         ]);
           
            include( APP_VIEW .'/home/homeSubNav.php' );
            include( APP_VIEW .'/home/formSuccess.php' );
        } else {
            include( APP_VIEW .'/home/homeSubNav.php' );
            include( APP_VIEW .'/home/formView.php' );
        }
        break;
    
        
    case 'table':
        $dbObj = new db(); 
        $sql = "SELECT * FROM rentals";
        $dbObj->dbPrepare($sql);
        $dbObj->dbExecute([]); 
        
        include( APP_VIEW .'/home/homeSubNav.php' );
        include( APP_VIEW .'/home/tableView.php' );
        break;

    default:
    
        $dbObj = new db(); 
        
        $sql = "SELECT * FROM rentals";
        $dbObj->dbPrepare($sql);
        $dbObj->dbExecute([]); 

        
        include( APP_VIEW .'/home/homeSubNav.php' );
        include( APP_VIEW .'/home/homeView.php' );
        break;
}


# Include html footer
include( APP_VIEW . '/footer.php' );