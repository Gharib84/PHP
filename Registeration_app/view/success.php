<?php include 'header.php'; ?>



<div class="container">
    <div class="row">
        <div class="col-md-12">
                        
                            <div class="jumbotron text-center hoverable p-4">

                          
                            <div class="row">

                           
                            <div class="col-md-4 offset-md-1 mx-3 my-3">

                               
                                <div class="view overlay">
                                <img src="https://mdbootstrap.com/img/Photos/Others/laptop-sm.jpg" class="img-fluid" alt="Sample image for first version of blog listing">
                                <a>
                                    <div class="mask rgba-white-slight"></div>
                                </a>
                                </div>

                            </div>
                            

                            
                            <div class="col-md-7 text-md-left ml-3 mt-3">

                                
                                <a href="#!" class="green-text">
                                <h6 class="h6 pb-1"><i class="fas fa-desktop pr-1"></i> The following registration information has been successfull submitted</h6>
                                </a>

                                <h4 class="h4 mb-4">This is title of the registeration form created by me</h4>

                                <p class="font-weight-normal">
                                    <span>Email: <?php print htmlspecialchars($email);?></span><br>
                                    <span>First Name: <?php print htmlspecialchars($firstName);?></span><br>
                                    <span>Last Name: <?php print htmlspecialchars($lastName);?></span><br>
                                </p>
                                <p class="font-weight-normal">by <a><strong> <?php print $lastName;?></strong></a>, <?php 
                                          $mydate=getdate(date("U"));
                                         print  "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";                          

                                ;?></p>

                                <a  href=".?action=sign_up"class="btn btn-success">Registeration Form</a>

                            </div>
                           

                            </div>
                        

                            </div>
                            
        </div>
    </div>
</div>




<?php include 'footer.php'; ?>