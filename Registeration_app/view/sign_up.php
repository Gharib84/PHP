<?php require_once("./view/header.php");  ?>

<header>
  
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <div class="container">
      <a class="navbar-brand" href="#">
        <strong>Register Form</strong>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
        aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
        </ul>
        <form class="form-inline">
          <div class="md-form mt-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          </div>
        </form>
      </div>
    </div>
  </nav>
  
  <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
   
    <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
     
      <div class="container mt-5">
        
        <div class="row">
          
         
          <div class="col-md-6 white-text text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft show"  data-wow-delay="0.3s">
          <div class="show">
            <h1 class="h1-responsive font-weight-bold mt-sm-5">Make First Sign Up With Us!  </h1>
            <hr class="hr-light">
            <h6 class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi
              fuga nesciunt
              dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea dolor molestiae
              iste.</h6>
            </div>
          </div>
          <div class="col-md-6">
                     
                    
                    
                    <div class="me">
                     <form  action="." method="post"class="text-center  mt-5 p-5 myform">



                                     
                                      
                                      <input type="text" id="defaultRegisterFormFirstName" 
                                      class="form-control" name="first_name" placeholder="First name"
                                      value="<?php print htmlspecialchars($firstName);?>">
                                      <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">

                                      <?php print $fields->getField('first_name')->getHTML(); ?>

                                      </small>

                                      
                                      <input type="text" id="defaultRegisterFormLastName" name="last_name" 
                                      class="form-control" placeholder="Last name"
                                      value="<?php print htmlspecialchars($lastName); ?>">
                                      <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                      <?php print $fields->getField('last_name')->getHTML(); ?>
                                </small>


                             
                              <input type="email" name="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail"
                              value="<?php print htmlspecialchars($email);?>">
                              <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                              <?php print $fields->getField('email')->getHTML(); ?>
                                </small>


                             
                              <input type="password" id="defaultRegisterFormPassword" class="form-control" 
                              value="<?php print htmlspecialchars($password);?>" name="password" 
                              placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">

                              <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                              <?php print $fields->getField('password')->getHTML(); ?>

                              </small>

                               
                                <input type="password" id="defaultRegisterPhonePassword" 
                                value="<?php print htmlspecialchars($verify)?>" name="verify"
                                class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                                <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                                <?php print $fields->getField('verify')->getHTML(); ?>
                                </small>
                                       
                                       <input class="btn btn-info my-4 btn-block" type="submit" name="action" value="register">
                                        <input class="btn btn-info my-4 btn-block" type="submit" name="action" value="reset">                                                  
                                                  <hr>

                                  
                                    <p>By clicking
                                        <em>Sign up</em> you agree to our
                                        <a href="" target="_blank">terms of service</a>

      </form>
      </div>
          
          </div>
          

          </div>
        </div>
        
      </div>
    </div>
  </div>
  
</header>

     






<?php require_once("./view/footer.php");?>