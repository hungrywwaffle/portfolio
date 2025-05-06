<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titan One">
        <link rel="stylesheet" href="../styles/main.css">
        <title>Home Page</title>
    </head>
    
    <body>

    <?php include '../components/navbar.php'?>

        <div id="main">
        <header id="home_header">
            <h3 style="color: red; font-weight:normal">Disclaimer : this website is still a work in progress and is updated regularly. See <a href="https://github.com/hungrywwaffle/portfolio-website-WIP-"><i>github deposit</i></a> for more infos.</h3>

            <h1>Computer Science </br> Internship</h1>
            </br>
            <h2>September 15th 2025 - January 30th 2026 (17 to 20 weeks)</h2>
            </br>
            <h2><a href="../assets/resume.pdf">See resume</a></h2>

            </br>
        </header>
        <div class="section"> 
            <div id="profile_card">
                <div id="Info" class="profile_section">
                    <div id="profile_pic">
                        <img src="../assets/oip.jpg">
                        <div id="profile_name">
                            <span id="name">LEY </br> Louise</span>
                            <span>21 years old</span>
                        </div>
                    </div>
                    <span>4th year French student</span>
                    <span class="sub_title">Contacts</span>
                    <span>-------------</span>
                    <span>louiseley.pro@gmail.com | <a href="https://www.linkedin.com/in/louise-ley-26221b282">Linkedin</a> | <a href="https://github.com/hungrywwaffle">Github</a></span>
                </div>
                <div id="About" class="profile_section">
                    <span class="title">About me</span>
                    </br>
                    <p>I'm a computer science student who lives in Strasbourg looking for an international internship in Europe. I'm passionated by computer sciences, especially development of all kinds (software, game, web...). I'm a quick learner and have a great team spirit and I'm willing to work at any post fitting my skills and my training, as I'm still unsure of what I want to make a career of. My goal is to discover the way other countries do things in this domain and their work philosophy. But also, to use this new experience to make up my mind about what job I want after my graduation. </p>
                </div>
            </div>
        </div>

        <?php include '../components/experiences.php'?>

        <?php include '../components/skills.php'?>
        
        <div class="section" id="Others">
            <div class="other_section" id="LanguagesProjects">
                    <span class="title">Languages</span>

                    <div class="list_languages">
                        <div class="list_rows" id="lang"> 
                            <span class="list_rows"> French</span>
                            <span class="list_rows">English</span>
                        </div>
                        <div class="list_rows" id="level"> 
                            <span class="list_rows">Native language</span>
                            <span class="list_rows">Fluent</span>
                        </div>
                    </div>
                    <a href="projects.php"><i>Projects</i></a>
            </div>
            <div class="other_section" id="Hobbies">
                <span class="title">Hobbies</span>
                <ul>
                    <li>Skiing</li>
                    <li>Drawing</li>
                    <li>Circus arts</li>
                    <li>European Comic books</li>
                </ul>
            </div>
            
        </div>
        
        </div>
        
    </body>
</html>