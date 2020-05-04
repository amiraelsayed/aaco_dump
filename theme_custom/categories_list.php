<link rel=stylesheet type="text/css" href="theme_custom/assets/categories_slider/slick/slick.css">
<link rel=stylesheet type="text/css" href="theme_custom/assets/categories_slider/slick/slick-theme.css">
<link rel=stylesheet type="text/css" href="theme_custom/assets/categories_slider/slick/style.css">
<script type="text/javascript" src="theme_custom/assets/categories_slider/jquery-3.3.3.min.js"></script>

<div class="row-fluid" id="desktopCategories">            		          
    <?php 
    $lang = ""; //current_language();
    $catg = "";

    if ($lang=='ar'){
        $catg = "التصنيفات";
    }else if ($lang=='fr'){
        $catg = "Catégories";
    }else{
        $catg = "Categories";
    } 
    ?>
    <h1 style="text-align: center;"><?php echo $catg ; ?></h1>
</div>

<div class="rt-container" style="margin-bottom: 3rem;">
    <div class="col-rt-12">
        <section class="regular slider slick_slider">

            <?php 

            // db connection to get data
            global $DB;
            $query = "SELECT id, name, description from mdldk_course_categories where id<>1 and visible = 1;";
            $courselist = $DB->get_records_sql($query);

            // loop on data to draw it
            foreach ($courselist as $course) {

                // prepare the data that will be rendered
                $img =(string)$course->description; 
                $img = substr($img,strpos($img,"src="));
                $img = str_replace("src=".'"',"",$img);
                $img = str_replace("@@PLUGINFILE@@/","",$img);
                $img = substr($img,0,(strpos($img,'"')-strlen($img) ));
                $context = CONTEXT_COURSECAT::instance($course->id);
                $fullpath = "";
                if (empty ($course->description)) {
                    $fullpath = "http://elearning.aaco.org/theme/lambda/Images/Test.jpeg";
                } else {
                    $fullpath = "http://elearning.aaco.org/pluginfile.php/". $context ->id . "/coursecat/description/" . $img; 
                }

                $url = "http://localhost:8080/aaco_upgrade/moodle/course/index.php?categoryid=" . $course->id;

                // render the data
                echo '<div class="dynamic_li">';
                echo '<div class="thumbnail">';
                echo '<a href="'.$url.'">';
                echo '<img src="'.$fullpath.'" style="width:100% !important;" height="155" role="presentation">';
                echo '</a>';
                echo '<div class="caption" style="width:100%!important;">';
                echo '<a href="/course/index.php?categoryid=2">';
                echo ' <p class="cut-text">'.$course->name.'</p>';
                echo '</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>

        </section>
    </div>
</div>


<script type="text/javascript" src="theme_custom/assets/categories_slider/slick/slick.js"></script>
<script type="text/javascript" src="theme_custom/assets/categories_slider/slick/script.js"></script>

