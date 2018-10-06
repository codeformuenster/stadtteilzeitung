
<?php
    query_posts(  array( 'category_name' => 'cat' ) );
    while ( have_posts() ) : the_post();
?><?php 
    the_permalink();
    the_title(); ?>
    <?php
    //$the_post_thumbnail();
    // $image_url = the_post_thumbnail_url();
    $post_description = the_excerpt();
    endwhile;
?>


<?php
// data for page 2 news
$news_section1 = "";
$news_section2 = "";

query_posts(array('category_name'=>'news'));
$news_count = 0;
while(have_posts() && $news_count<9) : the_post(); ?>

<?php
// news info
$news_title = the_title();
$news_content = the_excerpt();
$news_author = ""; //get news author

if($news_count<5) {
    $news_section1 .= <<<ADDNEWS

    <div class="small-news">
        <div class="small-news-header">
            $news_title
        </div>
        <div class="small-news-text">
            $news_content
        </div>
        <div class="news-author">
            -$news_author
        </div>
    </div> 
    
ADDNEWS;
}else{
    $news_section2 .= <<<ADDNEWS

    <div class="small-news">
        <div class="small-news-header">
            $news_title
        </div>
        <div class="small-news-text">
            $news_content
        </div>
        <div class="news-author">
            -$news_author
        </div>
    </div> 
    
ADDNEWS;
}

endwhile;
?>


<?php 
// event column 1
$page2_c1 = '';
$page2_c2 = '';
$event_counter = 0;

query_posts(array('category_name'=>'events'));
while( have_posts() && $event_counter < 26 ) : the_post(); ?>

<?php
$event_title = the_title(); // this is the date
$event_content = the_excerpt();
$event_author = ""; // get the event author

if($event_counter < 14) {
    $page2_c1 .= <<<PAGE

    <div class="event-data">
        <div class="event-title">
            $event_title
        </div>
        $event_content
        <div class="news-author">
            -$event_author
        </div>
    </div>

PAGE;
}else {
    $page2_c2 .= <<<PAGE

    <div class="event-data">
        <div class="event-title">
            $event_title
        </div>
        $event_content
        <div class="news-author">
            -$event_author
        </div>
    </div>

PAGE;
}
endwhile;

?>

<?php

$page2 = <<<PAGE

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 2</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    
<div class="head">
    <div class="main-header">
    </div>

    <div class="sub-header">
        {{{ADD CURRENT DATE HERE}}
    </div>
</div>

<div class="body-wrapper">

    <div class="body-wrapper-header">
        Events
    </div>

    <div class="sub-wrapper">
        <div class="column-2p">
            
            <!--ITERATE THROUGH news tag and add the combined content here-->
            $news_section1

            <!-- <div class="small-news">
                    <div class="small-news-header">
                        Another one Cries
                    </div>
                    <div class="small-news-text">
                        In this world of contrieved abstractness, there is all but one divident.
                        And this is the second coming of lorem ipsum's doom
                    </div>
                </div> -->
        </div> 
        <div class="column-2p">
            
            <!--ADD EVENTS HERE-->
            $event_column_2

            <!-- <div class="event-data">
                Sunday: Get ready for the next AI revolution
                <div class="event-author">
                    -Digge
                </div>
            </div> -->
        </div>
        <div class="column-2p">
                $event_column_3
                
        </div>
        <div class="column-2p">
             $news_section2
        </div>
    </div>
</div>

<div class="bottom">
    <div class="footer">
        A Property of Stadtteilzeitung
    </div>
</div>

</body>

</html>


PAGE;

?>

<?php
	echo "<script> alert('$page2'); </script>";
?>
