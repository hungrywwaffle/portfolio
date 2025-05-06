<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titan One">
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/formation.css">
        <title>Formation Section</title>
    </head>

    <body>
        <div class="top-content">
        <h2>Lorem ipsum</h2>
        <p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum </p>
        </div>
        
        <div class="blocs">

        <?php include '../index.php'?>

        <?php
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
                
            $stmt = $conn->prepare("SELECT DISTINCT NthYear FROM bloc");
            $stmt->execute();
            $result = mysqli_stmt_get_result($stmt);
            $stmt->close();
            
            $years = array();
            while ($row = mysqli_fetch_object($result)):
                array_push($years, $row);
            endwhile;
            foreach ($years as $year) {
                ?>
                    </br>
                    <span class="title"><?php echo $year->NthYear; ?></span>
                    <div class="horizontal-accordian-one">
                        <ul class="accordian-container">
                            <?php 
                            $stmt = $conn->prepare("SELECT project.NameProject, project.IDBloc, project.LinkProject, bloc.NameBloc, bloc.NthYear, bloc.DescriptionBloc, bloc.Duration, bloc.StatusBloc FROM project RIGHT JOIN bloc ON project.IDBloc=bloc.IDBloc WHERE NthYear=?;");
                            $stmt->bind_param("s", $y);
                            $y = $year->NthYear;
                            $stmt->execute();
                            $result = mysqli_stmt_get_result($stmt);
                            $stmt->close();

                            $count = 0;
                            $blocs = array();
                            $colors=array("color-one", "color-two", "color-three", "color-four", "color-five", "color-six, color-one", "color-two", "color-three", "color-four", "color-five");
                            while ($row = mysqli_fetch_object($result)):
                                array_push($blocs, $row);
                            endwhile;
                            foreach ($blocs as $bloc) {
                                ?>
                        
                                <li class="accordian-item <?php echo $count == 0 ? 'active' : ''; ?>">
                                <div class="accordian-head <?php echo $colors[$count]; ?>"><span><?php echo $bloc->NameBloc; ?></span></div>
                                <div class="accordian-data" style="position: relative; height:100%">

                                    <div class="content-head">
                                        <span style="position: absolute; left: 10px;"><?php echo $bloc->Duration; ?></span>
                                        <a href="<?php echo $bloc->LinkProject; ?>" ><span style="position: absolute; right: 10px;"><?php echo $bloc->NameProject; ?></span></a>
                                    </div>

                                    <div class="bottom-content" style="position:absolute; height:80%; top:100px">
                                        <p >
                                            <?php echo $bloc->DescriptionBloc; ?>
                                        </p>
                                        <div style="position:absolute; bottom:0px">
                                        <hr>
                                            <?php 
                                                $stmt = $conn->prepare("SELECT DISTINCT notion.NameNotion, notion.TypeNotion FROM notion INNER JOIN nobl ON notion.IDNotion=nobl.IDNotion INNER JOIN bloc ON nobl.IDBloc=bloc.IDBloc WHERE NameBloc=?;");
                                                $stmt->bind_param("s", $y);
                                                $y = $bloc->NameBloc;
                                                $stmt->execute();
                                                $result = mysqli_stmt_get_result($stmt);
                                                $stmt->close();

                                                $notions = array();
                                                while ($row = mysqli_fetch_object($result)):
                                                    array_push($notions, $row);
                                            ?>
                                                    <span class="<?php echo $row->TypeNotion; ?>"><?php echo $row->NameNotion; ?> | </span>
                                            <?php 
                                                endwhile;
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                </li>
                        
                                <?php
                                $count++;

                            }
                            /*$stmt->close();*/
                            ?>
                        </ul>

                    </div>
                
                    <input type="hidden" id="years" value="<?php echo htmlentities(json_encode($years)); ?>">

                <?php  
            }
        ?>
        </div>

        <script type="text/javascript" src="../scripts/formation_accordion.js"></script>

  </body>
</html>