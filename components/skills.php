<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../styles/skills.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="section" id="Skills"><!-- display vertical-->
    <div class="carroussel">

        <div class="indicator">
            <div class="previous-post" onclick="showPrevious();"> 
                <div style="display: contents; cursor: pointer; font-size:50px">
                        <b><</b>
                </div>
            </div>
        </div>
        <div class="indicator">
            <span class="title">Skills</span>
        </div>
        <div class="indicator">
            <div class="next-post" onclick="showNext();" style="margin-left: 100px;">
                <div style="display: contents; cursor: pointer; font-size:50px">
                        <b>></b>
                </div>
            </div>
        </div>
    </div>

    <div class="carroussel">

        <div class="div_svg">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#5e548e" class="bi bi-star" viewBox="0 0 16 16">
                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
                </svg>
            </div>
            <span class="title_svg" id="previous-post-title"></span>
        </div>

        <div class="div_svg" id="main_svg">
            
        <?php include '../index.php'?>

            <?php

                $result = mysqli_query($conn, "SELECT IDNotion, NameNotion FROM notion WHERE Skill=true");
            
                $count = 0;
                $posts = array();
                while ($row = mysqli_fetch_object($result)):
                    array_push($posts, $row);
                    ?>

                    <div class="post <?php echo $count == 0 ? 'active' : ''; ?>">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="200" fill="#5e548e" class="bi bi-star" viewBox="0 0 16 16">
                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
                                </svg>
                            </div>
                            <p style="font-size:30px;"><?php echo $row->NameNotion; ?></p>
                        </div>
            
                    <?php
                    $count++;
                endwhile;
            ?>
        </div>


        <div class="div_svg">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="#5e548e" class="bi bi-star" viewBox="0 0 16 16">
                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.56.56 0 0 0-.163-.505L1.71 6.745l4.052-.576a.53.53 0 0 0 .393-.288L8 2.223l1.847 3.658a.53.53 0 0 0 .393.288l4.052.575-2.906 2.77a.56.56 0 0 0-.163.506l.694 3.957-3.686-1.894a.5.5 0 0 0-.461 0z"/>
                </svg>
            </div>
            <span class="title_svg" id="next-post-title"></span>
        </div>

        

        <input type="hidden" id="posts" value="<?php echo htmlentities(json_encode($posts)); ?>">
        <input type="hidden" id="posts_count" value="<?php echo htmlentities(json_encode($count)); ?>">

    </div>

<script type="text/javascript" src="../scripts/skills.js"></script>

</div>

</body>
</html> 