<?php

include 'header.php';

include_once '../controller/UserController.php';

?>
<?php

      $user = new UserController();

      if (isset($_POST['submitLogin'])) {
          $usernameLogin = $_POST['usernameLogin'];
          $passwordLogin = $_POST['passwordLogin'];

          if ($user->login($usernameLogin, $passwordLogin)){

              header("Location: /tourist/webtourist/view/");
          }
          else{
              echo 'not login';

          }


      }
    if(isset($_POST['register'])) {
      $username = $_POST['usernameRegister'];
      $password = $_POST['passwordRegister'];

      try{
        $user->register($username,$password);
        header("Location: /tourist/webtourist/view/");
      }
      catch (PDOException $e){
        echo "E: ".$e->getMessage();
      }

    }
?>

  <div class="logmod ">
  <div class="logmod__wrapper">
    <span class="logmod__close">Close</span>
    <div class="logmod__container">
      <ul class="logmod__tabs">
        <li data-tabtar="lgm-2"><a href="#">Login</a></li>
        <li data-tabtar="lgm-1"><a href="#">Sign Up</a></li>
      </ul>
      <div class="logmod__tab-wrapper">
      <div class="logmod__tab lgm-1">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your personal details <strong>to create an acount</strong></span>
        </div>
        <div class="logmod__form">
          <form accept-charset="utf-8" action="" class="simform" method="post" autocomplete="off">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">UserName*</label>
                <input class="string optional" maxlength="255" id="user-email" name="usernameRegister" placeholder="User Name" type="text" size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input string optional">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" maxlength="255" id="user-pw" name="passwordRegister" placeholder="PasswordRegister" type="password" size="50" />
              </div>
              <div class="input string optional">
                <label class="string optional" for="user-pw-repeat">Repeat password *</label>
                <input class="string optional" maxlength="255" id="user-pw-repeat" name="passwordRegisterRepeat" placeholder="Repeat password" type="password" size="50" />
              </div>
            </div>
            <div class="simform__actions">
              <button class="sumbit" name="register" type="sumbit" >Create Account</button>
              <span class="simform__actions-sidetext">By creating an account you agree to our <a class="special" href="#" target="_blank" role="link">Terms & Privacy</a></span>
            </div>
          </form>
        </div>
        <div class="logmod__alter">
          <div class="logmod__alter-container">
            <a href="#" class="connect facebook">
              <div class="connect__icon">
                <i class="fa fa-facebook"></i>
              </div>
              <div class="connect__context">
                <span>Create an account with <strong>Facebook</strong></span>
              </div>
            </a>

            <a href="#" class="connect googleplus">
              <div class="connect__icon">
                <i class="fa fa-google-plus"></i>
              </div>
              <div class="connect__context">
                <span>Create an account with <strong>Google+</strong></span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="logmod__tab lgm-2">
        <div class="logmod__heading">
          <span class="logmod__heading-subtitle">Enter your email and password <strong>to sign in</strong></span>
        </div>
        <div class="logmod__form">
          <form accept-charset="utf-8" action="" class="simform" method="POST" autocomplete="off">
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-name">UserName*</label>
                <input class="string optional" name="usernameLogin" maxlength="255" id="user-email" placeholder="User Name" type="text" size="50" />
              </div>
            </div>
            <div class="sminputs">
              <div class="input full">
                <label class="string optional" for="user-pw">Password *</label>
                <input class="string optional" name="passwordLogin" maxlength="255" id="user-pw" placeholder="Password" type="password" size="50" />
                						<span class="hide-password">Show</span>
              </div>
            </div>
            <div class="simform__actions">
              <button class="sumbit" name="submitLogin" value="submitLogin" type="sumbit">Log In</button>
              <span class="simform__actions-sidetext"><a class="special" role="link" href="#">Forgot your password?<br>Click here</a></span>
            </div>
          </form>
        </div>
        <div class="logmod__alter">
          <div class="logmod__alter-container">
            <a href="#" class="connect facebook">
              <div class="connect__icon">
                <i class="fa fa-facebook"></i>
              </div>
              <div class="connect__context">
                <span>Sign in with <strong>Facebook</strong></span>
              </div>
            </a>
            <a href="#" class="connect googleplus">
              <div class="connect__icon">
                <i class="fa fa-google-plus"></i>
              </div>
              <div class="connect__context">
                <span>Sign in with <strong>Google+</strong></span>
              </div>
            </a>
          </div>
        </div>
          </div>
      </div>
    </div>
  </div>
</div>


<?php include 'footer.php'; ?>
