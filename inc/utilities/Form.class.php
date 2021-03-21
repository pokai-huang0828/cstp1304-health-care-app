<?php 

class Form
{
    public static function signInForm() { ?>

        <img class="img-fluid" src="assets/logo.png" alt="">
        <p>
        <div class="text-center" style="font-size: large;">
            <text>"Never let your emotions overpower your intelligence." – Drake</text>
        </div>
       
        <form>
        
            <div class="form-group my-2">
                <label for="email"></label>
                <input type="email" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
                <div class="form-group my-2">
                    <label for="password"></label>
                    <input type="password" class="form-control" placeholder="Your password">
                </div>
                <br>
                <a type="button" class="btn btn-danger w-100 btn-lg my-2" href="mainPage.php">Sign in</a>
                <a type="button" class="btn btn-danger w-100 btn-lg my-2" href="userSignUp.php">New User</a>
            </div>
        </form>

    <?php }

    public static function signUpForm() {?>
        <p>
        <div class="text-center" style="font-size:large">
            <text>Create a new account</text>
        </div>
        <p>
        <form>  
            <?php Form::basicInfo()?>
            <hr>
            <a href="mainPage.php"><button type="button" class="btn btn-danger w-100 btn-lg my-2">Sign Up</button></a>
            <a href="LoginPage.php"><button type="button" class="btn btn-danger w-100 btn-lg my-2">Already have an account?</button></a>
        </form>
    <?php }

    public static function basicInfo() { ?>

        <div class="form-group my-2">
            <label><b>First Name:</b></label>
            <input type="text" class="form-control" placeholder="Ella">
        </div>
        <div class="form-group my-2">
            <label><b>Last Name:</b></label>
            <input type="text" class="form-control" placeholder="Greene">
        </div>
        <div class="form-group my-2">
            <label><b>Email address:</b></label>
            <input type="email" class="form-control" placeholder="username@example.com">
        </div>
        <div class="form-group my-2">
            <label><b>Password:</b></label>
            <input type="password" class="form-control" placeholder="********">
        </div>
        <div class="form-group my-2">
            <label><b>Confirm Password:</b></label>
            <input type="password" class="form-control" placeholder="********">
        </div>

    <?php }

    public static function userInfoDisplay() { ?>
        <div class="form-group my-2">
            <label><b>First Name: </b></label>
            <input type="text" class="form-control" placeholder="Ella" disabled>     
        </div>
        <div class="form-group my-2">
            <label><b>Last Name:  </b></label>
            <input type="text" class="form-control" placeholder="Greene" disabled>          
        </div>
        <div class="form-group my-2">
            <label><b>Email address:  </b></label>
            <input type="text" class="form-control" placeholder="ellaqq@gmail.com" disabled>            
        </div>
        <div class="form-group my-2">
            <label><b>Password:  </b></label>
            <input type="password" class="form-control" placeholder="********" disabled>
        </div>
        <p>
        
    <?php }
}

?>