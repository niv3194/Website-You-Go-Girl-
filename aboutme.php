<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Women Empowerment Website</title>

    <?php include('includes/header.php'); ?><!--includes header using php-->
	<link rel="stylesheet" href="css/styles.css" /> <!--linked to stylesheet named style.css-->
</head>
<body>
<div class="about-me"><!--div tag for out team-->
<h1>Our Team</h1><!--displays heading in largest size-->
<h2> We are a team of two girls who has a vision that nothing is unachievable by a woman! Click on our images to know more about us!!</h2><!--displays heading in second largest size-->
<span class="border"></span>
<div class="pictures"> <!--div class to display pictures-->
	<!--a href links paragraph to the corresponding images-->
	<a href="#p1"><img src='images/nivi.jpg' width='200' alt='A picture of empowerment'/></a>
 <a href="#p2"><img src='images/madhavi.jpg' width='200' alt='A picture of empowerment'/></a>
 </div>
 <!--div class for paragrph with id p1 -->
 <div class="details" id="p1">
	<span class="name">Nivedha Nagarajan</span>
	 <span class="border"></span>
	 <p><!--p tag is for paragraphs-->
		I am from India.I am pursuing my Masters at Griffith College Dublin.I am an independent,self-organized girl with lots of dreams and aspirations.I have a strong penchant towards Computer Science which made me to pursue masters in this field.I enjoy the simple things in life. Being happy is a state of mind, and I don't think people should settle for less than they deserve. I always look toward the next best thing. I like seeing other people happy. When someone else is down, it breaks my heart. I've been through more than most people my age, but hey, it's what has made me stronger. Life has thrown me challenges, and so far, I've come out on top.
		 </p>

 </div><!--close of details-->
 <!--div class for paragrph with id p2 -->
 <div class="details" id="p2">
	 <span class="name">Madhavi Boyapati</span>
	 <span class="border"></span><!--includes a border span (a line) uderneath-->
	 <p>
		 I am Madhavi Boyapati from India.I am pursuing my Honer's at Griffith College Dublin. I am a fun and easy going independent girl, like to meet new people. I love traveling to different places and  exploring the culture and religions there.
 I believe that each of us encounters our challenges to grow,
  so I may find difficult to deal with something that you may find easy.
 I made lots of mistakes but I'm proud that I learned from them which made me a better and strong person today.
</p><!--close of paragraph-->
	 </div><!--close of details-->
</div><!--close of about-me-->
<!--default div class to display message on top-->
<div class="default">
	<span class="border"></span><!--p tag displays paragraph-->
	<p> We are a group of two girls.Our greatest aspiration is nothing is unachievebale by a woman.Click on our pictures to know more about us</p>

</div><!--close of default-->
</body><!--close of body-->
<!--includes footer using php-->
<?php include('includes/footer.php');?>
