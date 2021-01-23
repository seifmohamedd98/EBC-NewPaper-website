<!DOCTYPE HTML>

<html>
    <head>
        <title>Header</title>
        <meta charset="UTF-8"> <!-- 3ashan a3raf akteb 3araby -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">   <!-- 3ashan a3raf ash8lo 3ala ay device // Bootstrap -->

        <!-- links of bootstrap 3 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
        <style>
        /*-------------------------------------------------------Header CSS----------------------------------------------------------------*/
        #headerid
        {
            background: #0AA1D9;
            background-image:url("EarthMap_header.png");
            background-repeat:repeat;
            background-size: 50% 120px;
        }
        #logo
        {
            height: 60px;
            margin: 1.5px 20px 0px;
        }
       
        .signdiv
        {
            background-color: #0E7FAF;
            text-align  : center;
            color: white;
            padding: 5px 5px 5px 5px;
            text-decoration: none;
            border: none;
            font-size: 15px;
            border-radius: 12px;
        }
        .signdiv:hover
        {
            opacity: 0.6;
        }

        #signinbutton
        {
        float:right;
        margin-right:50px;
        margin-top:10px;
        }

        #signupbutton
        {
        float:right;
        margin-right:50px;
        margin-top:10px;
        }
        #welcomespnid
        {
            margin-top:8px;
            font-size:15px;
        }
        /*-------------------------------------------------------Navigate Menu CSS-----------------------------------------------------------*/
        .navbar 
        {
            margin-bottom: 0;
            border-radius: 0;
        }
        #myNavbar a
        {
            font-size:25px;   
        }
        #searchid
        {
            padding:1px 8px;
            margin: 7px 5px;
        }
        </style>

        <script>
            function getResult() 
            {
                debugger;
                if($("#term").val() != '')
                {
            jQuery.ajax(
            {
                url: "backend-search.php",
                data:'term='+$("#term").val(),
                type: "POST",
                success:function(data2)
                {
                    $("#result").html(data2);
                    $("#result").show();
                }
            });
                }
                else{
                    $("#result").hide();
                }
            }
        </script>
        
    </head>
    
    <body>		


        <!-------------------------------------------------------Header--------------------------------------------------------------------------->
            <div class ="well well-sm" id="headerid">

                <a href="Home.php"><img src="LogoPage.png" alt="Logo png" id="logo"/></a>                
                
                <?php
                if(!empty($_SESSION['ID']))
                {
                ?>      
        
                    <span class='btn btn-info' id='welcomespnid'>Welcome <?php echo $_SESSION['username']?></span>
                    <!-- All Types Access When Sign in--> 
                    <a href='signout.php' class="signdiv" id="signinbutton"><span class="glyphicon glyphicon-log-in"></span><input type='button' value='SignOut' target='_blank' class='signdiv'/></a>
                    <a href='edit.php' class="signdiv" id="signinbutton"><input type='button' value='Edit Account' target='_blank' class='signdiv'/></a>

                    <!-- Admin Access-->
                    <?php
                        if($_SESSION['access'] == "admin") 
                        {
                    ?>
                        <a href='CreateAccount.php' class="signdiv" id="signinbutton"><input type='button' value='Create Account' target='_blank' class='signdiv'/></a>
                        <a href='DeleteAccount.php' class="signdiv" id="signinbutton"><input type='button' value='Delete Account' target='_blank' class='signdiv'/></a>

                    <?php
                        }
                    ?>

                    <!-- Editor Access-->   
                    <?php
                        if($_SESSION['access'] == "editor")
                        {
                    ?>
                        <a href='EchoEditArticles.php' class="signdiv" id="signinbutton"><span class="glyphicon glyphicon-log-in"></span><input type='button' value='Edit Articles' target='_blank' class='signdiv'/></a>
                        <a href='ArticleCreation.php' class="signdiv" id="signinbutton"><span class="glyphicon glyphicon-log-in"></span><input type='button' value='Add Article' target='_blank' class='signdiv'/></a>
					    <a href='IndexNews.php' class="signdiv" id="signinbutton"><span class="glyphicon glyphicon-log-in"></span><input type='button' value='News' target='_blank' class='signdiv'/></a>
                        <a href='EditorMessages.php' class="signdiv" id="signinbutton"><span class="glyphicon glyphicon-log-in"></span><input type='button' value='Messages' target='_blank' class='signdiv'/></a>
                    <?php
                        }
                    ?>

                    <!-- Reader Access-->   
                    <?php
                        if($_SESSION['access'] == "reader")
                        {
                    ?>
                            <a href='Delete.php' class="signdiv" id="signinbutton" onClick="return confirm('Are you sure you want to delete this Account ?')"><input type='button' value='Delete Account' target='_blank' class='signdiv' /></a>
                            <a href='ReaderMessageSent.php' class="signdiv" id="signinbutton"><span class="glyphicon glyphicon-log-in"></span><input type='button' value='Send Messages' target='_blank' class='signdiv'/></a>
                            <a href='ReaderMessageReview.php' class="signdiv" id="signinbutton"><span class="glyphicon glyphicon-log-in"></span><input type='button' value='Review Messages' target='_blank' class='signdiv'/></a>
                    <?php
                        }
                    ?>

                    <!-- Quality Control Access--> 
                    <?php
                    if($_SESSION['access'] == "quality")
                    {
                    ?>
                        <a href='DeleteNews.php' class="signdiv" id="signinbutton"><span class="glyphicon glyphicon-log-in"></span><input type='button' value='Delete News' target='_blank' class='signdiv'/></a>
                        <a href='DeleteComments.php' class="signdiv" id="signinbutton"><span class="glyphicon glyphicon-log-in"></span><input type='button' value='Delete Comments' target='_blank' class='signdiv'/></a>
                        <a href='AddQ&A.php' class="signdiv" id="signinbutton"><span class="glyphicon glyphicon-log-in"></span><input type='button' value='Add Q&A' target='_blank' class='signdiv'/></a>

                    <?php
                    }
                    ?>
                    
                <?php
                }
                ?>

                <!-- Signin & Signup -->
                <?php
                if(empty($_SESSION['ID']))
                {
                ?>
                <a href="signin.php" class="signdiv" id="signinbutton"><span class="glyphicon glyphicon-user"></span><input type="button" value="Sign in" target="_blank" class="signdiv" /></a>
                <a href="signup.php" class="signdiv" id="signupbutton"><span class="glyphicon glyphicon-user"></span><input type="button" value="Sign Up" target="_blank" class="signdiv" /></a>
                <?php
                }
                ?>  

            </div>
        <!-------------------------------------------------------Navigate Menu---------------------------------------------------------------->
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">

                    <div class="navbar-header ">    
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>  
                        </button>
                    </div>
                        
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav" name="catg">
                            <li><a href='Home.php'>Home</a></li>
                            <li><a href='technology.php'>Technology</a></li>
                            <li><a href='politics.php'>Politics</a></li>
                            <li><a href='Sports.php'>Sports</a></li>
                            <li><a href='health.php'>Health</a></li>
                            <li><a href='economy.php'>Economy</a></li>
                            <li><a href='culture.php'>Culture</a></li>
                            <li><a href='weather.php'>Weather</a></li>
                            <li><a href='World News.php' >World News</a></li>
                            <li><a href='#' class="dropdown" data-toggle="dropdown">More<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href='Help.php'>Help</a></li>
                                </ul>
                            </li>
                        </ul>
                        
                        <!-- <input type="search" placeholder="Search" id="searchid" onkeyup="getResult()" class="nav navbar-nav navbar-right"/> -->
                        <div class="nav navbar-nav navbar-right" id="searchid">
                        <input type="search" placeholder="Search..." class="form-control" id="term" name="term" onkeyup="getResult()" />
                        </div>
                        <div id="result"></div> 
                        
                    </div>
                    
                </div> 
            </nav>
                
    </body>
</html>
