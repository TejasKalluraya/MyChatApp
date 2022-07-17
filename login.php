<?php include_once "header.php"; ?>
    <body>
        <div class="wrapper">
            <section class="form login">
                <header>MyChatApp</header>
                <form action="#">
                    <div class="error-text"></div>

                            <div class="field">
                                <label>Email Address </label>
                                <input type="email" name="email" placeholder="Email Address">
                            </div>

                            <div class="field">
                                <label>Password</label>
                                <input type="password" name ="password" placeholder="Password">
                            </div>

                            <div class="button">
                                <input type="submit" value="Continue to Chat">
                            </div>

                            <a href="#"><div class="link">Not Registered yet?</div></a></br>

                        </div>
                </form>
            
            </section>    
        </div>
        <script src="javascript/pass-show-hide.js"></script>
        <script src="javascript/login.js"></script>
        
    </body>
</html>