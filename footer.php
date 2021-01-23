<html>

<head>
    <title>Footer</title>
    <meta charset="UTF-8"> <!-- 3ashan a3raf akteb 3araby -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   <!-- 3ashan a3raf ash8lo 3ala ay device // Bootstrap -->
    <!-- <link rel="stylesheet" type="text/css" href="Headerandfooter_CSS.css" /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- 3ashan icons el social media-->   


    <!-- links of bootstrap 3 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <style>
    footer 
    {
      /*
      position:fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      text-align: center;
      */
      background-color: #404445;
      color: white;
      padding: 10px;
    }
    .fa
    {
      padding: 10px;
      font-size: 25px;
      width: 50px;
      margin:0px 3px;
      text-align: center;
      border-radius: 50%;
    }
    .fa:hover
    {
      opacity: 0.9;
    }
    .fa-facebook
    {
      background: #3B5998;
      color: white;
    }
    .fa-twitter
    {
      background: #55ACEE;
      color: white;
    }
    .fa-instagram
    {
      background: #125688;
      color: white;
    }
    .fa-youtube
    {
      background: #bb0000;
      color: white;
    }
    .copyrights
    {
      text-align:center;
      margin-top:10px;
    }
    #myBtn 
    {
      display: none;
      position: fixed;
      bottom: 10px;
      right: 15px;
      font-size: 20px;
      border: none;
      outline: none;
      background-color: #00afd1;
      color: white;
      cursor: pointer;
      padding: 10px;
      border-radius: 45px;
    }

    #myBtn:hover
    {
      background-color: #00afd152;
    }
  </style>
</head>

<body>
  <!-------------------------------------------------------Start of Footer---------------------------------------------------------------->
  <footer class="container-fluid text-center">
      <div class="footer-section contact">
        <span style="font-size:40px" ><b>Contact us</b></span>
        <br>
        <i class="fa fa-phone" style="font-size:20px; width: 30px;"></i>123-456-789
        <i class="fa fa-envelope" style="font-size:20px; width: 30px;"></i>info@ebc.com
        <br>
        <i class="fa fa-home" style="font-size:20px; width: 30px;" ></i>Misr International University,Cairo ismalia road
      </div>

        <div class="footer-section links">
          <h2>Follow us on Social Media</h2>
          <a href="https://www.facebook.com" class="fa fa-facebook"></a>
          <a href="https://www.twitter.com" class="fa fa-twitter" style="text-decoration:none"></a>
          <a href="https://www.instagram.com" class="fa fa-instagram"></a>
          <a href="https://www.youtube.com" class="fa fa-youtube"></a>
        </div>

        <div class="copyrights">
          Copyrights 2019 &copy; egyptianbroadcastingcorporation.com | All rights reserved
        </div>
  </footer>
  <!-------------------------------------------------------End of Footer---------------------------------------------------------------->

  <button onclick="topFunction()" id="myBtn" title="Go to top" class="fa fa-angle-up" style="font-size:30px;"></button>
  <script>
    var mybutton = document.getElementById("myBtn");
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
</body>

</html>