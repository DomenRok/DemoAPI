<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Register </title>
    <link rel="stylesheet" href="<?= CSS_URL . "intro.css" ?>">
    <link rel="stylesheet" href="<?= CSS_URL . "intro-util.css" ?>">
</head>

<body>


    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90">
                <form class="login100-form validate-form flex-sb flex-w">
                    <span class="login100-form-title p-b-51">
                        Register
                    </span>


                    <form action="">
                        <div class="wrap-input100 validate-input m-b-16" data-validate="Username is required">
                            <input class="input100" type="text" name="username" placeholder="new username">
                            <span class="focus-input100"></span>
                        </div>


                        <div class="wrap-input100 validate-input m-b-16" data-validate="Password is required">
                            <input class="input100" type="password" name="pass" placeholder="new username">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="flex-sb-m w-full p-t-3 p-b-24">
                            <div class="contact100-form-checkbox">
                                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">

                            </div>

                            <div>
                            <a href="<?= BASE_URL . "login"  ?>" class="txt1">
							    Already have an account?
                                </a>
                            </div>
                        </div>

                        <div class="container-login100-form-btn m-t-17">
                            <button class="login100-form-btn">
                                Register
                            </button>
                        </div>
                    </form>


                </form>
            </div>
        </div>
    </div>
</body>

</html>