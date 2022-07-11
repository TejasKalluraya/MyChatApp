<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MyChatApp | Tejas Kalluraya</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="wrapper">
            <section class="form signup">
                <header>MyChatApp</header>
                <form action="#">
                    <div class="error-txt">Error message!</div>
                    <div class="name-details">
                        <div class="field input">
                            <label>First Name</label>
                            <input type="text" name="fname" placeholder="First Name">
                        </div>
                        <div class="field input">
                            <label>Last Name</label>
                            <input type="text" name="lname" placeholder="Last Name">
                        </div>
                        <div class="field input">
                            <label>Email Address</label>
                            <input type="email" placeholder="Email Address">
                        </div>
                        <div class="field input">
                            <label>Password</label>
                            <input type="password" placeholder="Password" name="password" required>
                            <i class="fas fa-eye" style="font-size:15px;justify-content: center;align-self: center;"></i>
                        </div>
                        
                        <div class="field image">
                            <label>Select Image</label>
                            <input type="file" name="image">
                        </div>
                        <div class="field button">
                            <input type="submit" name="submit" value="Continue to Chat">
                        </div>
                    </form>
                        <div class="link"><a href="#">Already Registered?</a></div></br>
            </section>
        </div>
        <script src="javascript/pass-show-hide.js"></script>
    </body>
</html>