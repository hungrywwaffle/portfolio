<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../styles/navbar.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div id="full_nav" class="navbar">
<button class="closebtn" onclick="closeNav()">☰</button>
  <a href="../views/home.php#profile_card">Profile</a>
  <a href="../views/home.php#Experiences"  onclick="showExp()">Professional experiences</a>
  <a href="../views/home.php#Experiences" onclick="showTrain()">Academic training</a>
  <a href="../views/formation.php" >CESI's formation</a>
  <a href="../views/projects.php">Projects</a>
  <a href="../views/home.php#Skills">Skills</a>
  <a href="../views/grades.php">Grades</a>
  <a href="https://github.com/hungrywwaffle/portfolio-website-WIP-">Github deposit</a>
  <a href="../assets/resume.pdf" download="LouiseLEY_CSJobApplication.pdf"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
</svg> Resume</a>
</br>

</div>

<div  id="closed_nav" class="sidebar">
    <button class="openbtn" onclick="openNav()">☰</button>  
</div>

<script type="text/javascript" src="../scripts/navbar.js"></script>
<script type="text/javascript" src="../scripts/experiences.js"></script>


</body>
</html> 