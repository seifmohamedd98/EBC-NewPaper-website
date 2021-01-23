<!DOCTYPE HTML>

<html>

<head>
    <title>Home | EBC</title>

    <meta charset="UTF-8"> <!-- 3ashan a3raf akteb 3araby -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   <!-- 3ashan a3raf ash8lo 3ala ay device -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- 3ashan icons el social media-->


    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- links of bootstrap 3 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    
    
    <style>
      body
      {
      background-color: #f1f1f1;
      }
      .slider 
      {
        position: relative;
        text-align: center;
        color: white;
        width:80%;
        margin-left:170px;
        margin-bottom:50px;
        margin-top:110px;
      }
      .welcomediv
      {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-family:Arial Black;
        font-size:90px;
        color:white;
        background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
        border: 3px solid #f1f1f1;
        z-index: 1;
      }
      .welcome_p
      {
        position: absolute;
        top: 90%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-family:Arial Black;
        font-size:30px;
        color:#19F8A7;
        z-index: 1;
      }
      .mySlides
      {
          display:none;
          height:600px;
          filter: blur(5px);
          width:100%;
      }
      /* Content */
      .content
      {
        background-color: white;
        padding: 10px;
      }
      .impalert
      {
        color:red;
        text-align:center;
        font-family:fantasy;
        animation: blink 1s linear infinite;
      }
      @keyframes blink
      {
        0%{opacity: 0;}
        50%{opacity: .5;}
        100%{opacity: 1;}
      }
    </style>
</head>

<body>
  <?php
  session_start();
  ?>
  <!-------------------------------------------------------Start of Header---------------------------------------------------------------->
  <?php include "header.php";?>
  <!-------------------------------------------------------End of Header------------------------------------------------------------------>

  <!-------------------------------------------------------Start of SlideShow---------------------------------------------------------------->
        <div class="slideshow">
            <div class="slider">
                <div class="welcomediv">Welcome TO EBC News</div>
                <p class="welcome_p">Egyptian Broadcasting Corporations</p>
                <img class="mySlides" src="images/Sports 2.jpg">
                <img class="mySlides" src="images/World News 3.jpg">
                <img class="mySlides" src="images/Pyramid-wall-at-GEM-grand-Egyptian-Museum.jpg">
            </div>
        </div>
        <script>
        var myIndex = 0;
        carousel();
        function carousel()
         {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length)
            {
                myIndex = 1
            }
            x[myIndex-1].style.display = "block";
            setTimeout(carousel, 2000);

        }
        </script>
  <!-------------------------------------------------------End of SlideShow---------------------------------------------------------------->

  <!-------------------------------------------------------Start of Content---------------------------------------------------------------->
    <hr>
    <div class="container" style="margin-top:30px">

    <h1 class="impalert">Important News !!</h1>

    <div class="row">

        <div class="col-sm-4">
            <div class="content">
                <img src="images/egy.jpg" alt="egy.jpg" style="width:100%; height:181px;">
                <a href="politics.php" target="_blank" style="text-decoration:none"><h2>Politics News</h2></a>
                <a href="politics.php" target="_blank" style="text-decoration:none"><p>Italy agree to intensify efforts to solve Libyan crisis......</p></a>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="content">
                <img src="images/culture8.jpg" alt="culture8.jpg" style="width:100%; height:180px;">
                <a href="culture.php" target="_blank" style="text-decoration:none"><h2>Culture News</h2></a>
                <a href="culture.php" target="_blank" style="text-decoration:none"><p>The Museum of Egyptian Antiquities, known commonly as the Egyptian Museum or Museum of Cairo......</p></a>
            </div>
        </div>

        <div class="col-sm-4">
            <div class="content">
                <img src="images/world8.jpg" alt="world8.jpg" style="width:100%; height:180px;">
                <a href="world News.php" target="_blank" style="text-decoration:none"><h2>World News</h2></a>
                <a href="world News.php" target="_blank" style="text-decoration:none"><p>Australian trade minister can not imagine free......</p></a>
            </div>
        </div>

    </div>
        <hr>
    <div class="video">
        <h1 style="text-align:center; color:#35A797;">This is Egypt</h1>
        <video height="515" width="891"  src="images/ThisisEgypt.mp4" controls="controls" autoplay="true" muted="" style="margin-left:125px"></video>
    </div>
      </div>
  <!-------------------------------------------------------End of Content----------------------------------------------------------------->

  <!-------------------------------------------------------Start of Footer---------------------------------------------------------------->
  <?php include "footer.php";?>
  <!-------------------------------------------------------End of Footer------------------------------------------------------------------>
</body>

</html>