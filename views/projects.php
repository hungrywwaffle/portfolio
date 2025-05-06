<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titan One">
        <link rel="stylesheet" href="../styles/main.css">
        <title>Projects</title>
    </head>
    
    <body>
    <?php include '../components/navbar.php'?>
        
        <div id="main">
            <header>
                <h1>Projects (WIP)</h1>
                </br>
            </header>
            <p style="padding: 50px;">
                Here you will find every project (personnal or academic) I have been working on during my cursus.
            </p>
            <div id="projects_grid">
            
            <?php include '../index.php'?>

            <?php
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
                
            $stmt = $conn->prepare("SELECT * FROM project");
            $stmt->execute();
            $result = mysqli_stmt_get_result($stmt);
            $stmt->close();
            
            $projects = array();
            while ($row = mysqli_fetch_object($result)):
                array_push($projects, $row);
            endwhile;
            foreach ($projects as $project) {
                ?>
                <div class="thumbnail">
                    <a href="<?php echo $project->LinkProject; ?>"><span class="project_link" title="view more"></span></a>
                    <img src="<?php echo $project->image; ?>" alt="">

                    <span class="sub_title" style="position: absolute; top: 8px; left: 16px; background-color: rgba(255, 255, 255, 0.7);"><?php echo $project->StatusProject; ?></span>
                    <span class="sub_title" style="position: absolute; top: 8px; right: 16px; background-color: rgba(255, 255, 255, 0.7);"><?php echo $project->Deadline; ?></span>

                    <div class="caption">
                        <span class="sub_title"><?php echo $project->NameProject; ?></span>
                        <p><?php echo $project->DescriptionProject; ?></p>
                    </div>
                </div>
                <?php  
                    }
                ?>

            </div>
        </div>
    </body>
</html>