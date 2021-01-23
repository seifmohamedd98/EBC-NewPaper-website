<?php
session_start();
$_SESSION["Category"]="Politics";

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Politics | EBC</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	
	
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<!--Bootstrap
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>-->
  <link rel="stylesheet" type="text/css" href="ShowMoreCSS.css"/> <!--Show more CSS-->

	
  
  
    <meta charset="UTF-8"> <!-- 3ashan a3raf akteb 3araby -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   <!-- 3ashan a3raf ash8lo 3ala ay device // Bootstrap -->
<!--
<link rel="stylesheet" type="text/css" href="Headerandfooter_CSS.css" />
	<link rel="stylesheet" type="text/css" href="WorldNews_CSS.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- 3ashan icons el social media-->

	
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
	<!--<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>-->

	<!--<link rel="stylesheet" href="jquery-ui.min.css">
	<script src="external/jquery/jquery.js"></script>
	<script src="jquery-ui.min.js"></script>-->	


		
<style>

	
	


.column {
  float: left;
  width: 50%;
  padding: 50px;
}

 h1{ background:#F00;
color:#FFF
padding:10px;
margin:10px;
width:400px;
 }
 #white{
   background-color:black;
 color: white;
 padding:10px;
margin:10px;
width:400px;
 }

.latest
 { 
   background-color:black;
 color: white;
 padding:10px;
margin:10px;
width:400px;
 }


.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

.text {
  color: black;
  font-size: 40px;
  padding: 10px 12px;
  width: 100%;
  text-align: center; // text bta3 el slideshow
}

.text2 {
  color: black;
  font-size: 20px;
  padding: 10px 12px;
  width: 100%;
  text-align: center;}

.text3 {
  color: black;
  font-size: 14px;
  padding: 10px 12px;
  width: 100%;
  text-align: center;
}
.text4 {
  color: black;
  font-size: 20px;
  padding: 10px 12px;
  width: 100%;
  text-align: left;
}

.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease; // el beythrk m3 el soora
}

.active {
  background-color: #717171;
}


}
 </style>
 
     <section>
   <?php include "header.php";?>
   <h2 class="jumbotron"><b>Politics News</b></h2>
 </section>
</head>

<body>
<section>
<div class="slideshow-container">

<div class="mySlides ">
  <img src="images/beirut.jpg" width="800" height="600">
  <div class="text">IViolent protests erupt on streets of Beirut </div>
</div>

<div class="mySlides ">
  <img src="images/saudi.jpg" width="800" height="600">
  <div class="text">Saudi death sentence wipes MBS's fingerprints in Khashoggi killing</div>
</div>

<div class="mySlides ">
  <img src="images/uncle2.jpeg" width="800" height="600">
  <div class="text">Schumer seizes on new reporting in calls for trial witnesses</div>
</div>

</div>
<br>


  
  

  <div id="page">
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); //by3'yr kol 2 seconds
}
</script>
<br>

</div>
<h2 class="jumbotron"><b>Egyptian News</b></h2>


  <div class="column">
  <div class="text2">The launch of the second session of the International Transport Technology Conference, in the presence of President El-Sisi</div>
    <img src="images/sisi.jpg" style="width:100%"  >
	 <div class="text3"> The second session of the International Transport Technology Exhibition and Conference in the Middle East and Africa will begin tomorrowSunday, in conjunction with the launch of the 23rd session of Cairo ICT Conference, in the presence of President Abdel Fattah El-Sisi.   The activities of the second session of TransMEA 2019 will start under the patronage of Major General Kamel the Minister, the Egyptian Minister of Transport, at the Egypt Center for International Exhibitions in New Cairo, amidst a high turnout from smart transport companies and local and international governmental institutions to ensure the presence in the event that represents a qualitative shift for the transport industry in the region.</div>
  </div>
  <div class="column">
  <div class="text2">Bilateral talks between President Sisi and Angela Merkel begin in Berlin </div>
    <img src="images/sisi2.jpg " width="600" height="400">
<div class="text3" >President Abdel Fattah El-Sisi granted the President of the Republic, the Order of Science and Arts of the First Class to the Secretary-General of the Muslim World League, President of the Association of Islamic Universities Sheikh Dr. Muhammad bin Abdul Karim Al-Issa, and was received on his behalf by the Under-Secretary of the Islamic World Association Dr. Muhammad bin Saeed Al-Majdouie.According to the Saudi news agency, "SPA", during the celebration of the Prophet’s Birthday, President Abdel Fattah El-Sisi was awarded the Medal of Science and Arts from the first class to several personalities from Egypt and the Islamic world, given their contributions to enriching Islamic thought with their knowledge and effort, and in appreciation of their dedication to renewing Religious speech and action.</div>
 </div>
 
  <div class="column">
  <div class="text2">President El-Sisi awards the Medal of Science and Arts to the Secretary General of the Muslim World League</div>
    <img src="images/name.jpg" width="600" height="400" >
 <div class="text3">Attempts by the United Nations Security Council to approve further aid deliveries from Turkey and Iraq to Syrian civilians were blocked by Russia and China on Friday. Erdogan said he is sending a delegation to Moscow on Monday to discuss the situation and try to bring a halt to the attacks on Idlib, Anadolu reported.  </div>
 </div>
  <div class="column">
  <div class="text2">Egypt:<br> 
  Italy agree to intensify efforts to solve Libyan crisis </div>
    <img src="images/egy.jpg " width="600" height="400">
 <div class="text3">CAIRO – 30 December 2019: Foreign Minister Sameh Shoukry on Monday made a phone call with his Italian counterpart, Luigi Di Maio, where they discussed the developments in Libya and agreed to intensify efforts to restore stability and security in the war-torn country, according to an official statement. 

Shoukry and Di Maio voiced rejection of foreign military intervention in Libya, which would obstruct the path of a comprehensive political settlement, Egyptian foreign ministry spokesman Ahmed Hafez said in a statement. </div>
  </div>
  
  <hr width="100%">
 
	</div>

 <h3 style="color:red;" class="jumbotron"><b> BREAKING NEWS</b> </h3>
 
<table class="table" border=1>
	<tr>
		<td rowspan="2"> <img src="images\korea.jpeg" id="img" width="400" height="300" > </td>
		<td> <div class="text2" id="GEM"> <b>North Korean leader calls for ‘military countermeasures </b></div> </td>
	</tr>
	<tr>
	<td><div class="content hideContent">SEOUL, South Korea — North Korean leader Kim Jong Un has called for active “diplomatic and military countermeasures” to preserve the country’s security in a lengthy speech at a key political conference possibly meant to legitimize major changes to his nuclear diplomacy with the United States.
Kim spoke for seven hours during the ruling Workers’ Party meeting that continued for the third day on Monday. He issued national goals for rebuilding the North’s economy and preparing active and “offensive political, diplomatic and military countermeasures for firmly preserving the sovereignty and security of the country,” according to state media on Tuesday.
The Korean Central News Agency said the plenary meeting of the party’s Central Committee will extend to the fourth day on Tuesday, a day before Kim is expected to use his annual New Year’s address to announce major changes to his economic and security policies.
Story Continued Below

Some experts believe Kim could use the speech to declare he is suspending his nuclear negotiations with Washington, which have stalemated over disagreements in exchanging sanctions relief and disarmament, and he could possibly revive confrontation by lifting a self-imposed moratorium on nuclear and long-range missile tests.
		</div>
    <div class="show-more">
        <a href="#">Show more</a>
    </div>
	</td> </tr>
	
	
	<tr>
		<td rowspan="2"> 
			<img src="images\uncle.jpeg" id="img" width="400" height="300" >
		</td>
		<td> <div class="text2"><b>Sanders releases letters from 3 doctors attesting to good health</b></div> </td>
	</tr>
	
	<tr> 	
		<td> 
			<div class="content hideContent">
			Bernie Sanders on Monday released letters from three physicians detailing the health of the 78-year-old Vermont senator and Democratic presidential candidate, and attesting to his fitness to ascend to the Oval Office.
Although the state of Sanders’ physical well-being has come under greater scrutiny since he suffered a heart attack in October, the senator’s primary-care physician concluded in a note dated Saturday that he is “in good health currently.”Brian Monahan, the attending physician of the U.S. Congress, whose office has treated Sanders for 29 years, also wrote that the senator has been “engaging vigorously in the rigors of your campaign, travel, and other scheduled activities without any limitation.”
Philip Ades, director of cardiac rehabilitation at the University of Vermont Medical Center, wrote that Sanders is “more than fit enough to pursue vigorous activities and an occupation that requires stamina and an ability to handle a great deal of stress.”


			</div>
			<div class="show-more">
				<a href="#">Show more</a>
			</div> 
		</td> 
	</tr>
	
		<tr>
		<td rowspan="2"> 
			<img src="images\obama.jpeg" id="img" width="400" height="300" >
		</td>
		<td> <div class="text2"><b>Trump, Obama tie for Americans' most-admired man</b></div> </td>
	</tr>
	
	<tr> 	
		<td> 
			<div class="content hideContent">
				President Donald Trump and former President Barack Obama have tied for the title of Americans’ most admired man, according to Gallup’s annual survey — marking the first time the current commander in chief has achieved the distinction and the 12th consecutive first-place showing for his immediate predecessor.
Eighteen percent of U.S. adults nominated Trump when asked which man “living today in any part of the world” they admired most, while another 18 percent identified the most recent Democratic president.The results of the poll, conducted Dec. 2-15, were split sharply along party lines, with 45 percent of Republicans selecting Trump for the honor and 41 percent of Democrats opting for Obama.
Story Continued Below .Trump captured the support of 2 percent of Democrats and 10 percent of independents, while Obama garnered 3 percent support from GOP respondents and 12 percent from independents.
Last year, 13 percent of Americans chose Trump as the most admired man, and 14 percent picked him in 2017.
</div>
			<div class="show-more">
				<a href="#">Show more</a>
			</div> 
		</td> 
	</tr>
	
	</table>		


  <hr>

    <?php
       include("EchoTable.php");
    ?>
    <script type="text/javascript" src="ShowMoreJQuery.js"></script>

  <hr>
					
		
	<h1 class="jumbotron"><b>Comments:-</b></h1>
	<?php include "WriteComment.php"; ?>
						
		  <!-------------------------------------------------------Footer---------------------------------------------------------------->
          <?php include "footer.php";?>	
</div>			
</section>
</body>
</html>