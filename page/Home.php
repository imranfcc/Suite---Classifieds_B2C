<!DOCTYPE html>
<html lang="en">
<head>
	<?php if(is_file("page/inc/HTML_HEAD.php")){ include("page/inc/HTML_HEAD.php"); } ?>
</head>
<body>
<?php if(is_file("include/Pages/bodyHeader.cms.php")){ include("include/Pages/bodyHeader.cms.php"); } ?>
<!-- Start : Your Page Source -->
  <?php
  $slides[]=array("img"=>"https://via.placeholder.com/1920x561.png");
  $slides[]=array("img"=>"https://via.placeholder.com/1920x561.png", "title"=>"Title");
  $slides[]=array("img"=>"https://via.placeholder.com/1920x561.png", "title"=>"Title", "txt"=>"type your text");
  \template\carousel(array("slides"=>$slides));
?>
  
  <div class='container my-3'>
    <div class='row'>
      <div class='col-6 col-md-3 '>
<?php
  \template\widget('card_item', array("img"=>"https://via.placeholder.com/300x300.png?text=IMage","title"=>"tttKeyboard Dell","FooterText"=>"Rs 500","rightTag"=>"Disctount 20%"));
?>
        </div>
            <div class='col-6 col-md-3 '>
<?php
 
  \template\widget('card_item', array("img"=>"https://via.placeholder.com/300x300.png?text=IMage","title"=>"Dell Mourse","FooterText"=>"Rs 350","rightTag"=>"Disctount 5%"));
              
?>
 </div>
 <div class='col-6 col-md-3'>             
<?php
              
 \template\widget('card_item', array("img"=>"https://via.placeholder.com/300x300.png?text=IMage","title"=>"HP Mourse","FooterText"=>"Rs 600","rightTag"=>"Disctount 8%")); 
 
?>
   </div>
   <div class='col-6 col-md-3'>
   <?php
              
 \template\widget('card_item', array("img"=>"https://via.placeholder.com/300x300.png?text=IMage","title"=>"Acer USB","FooterText"=>"Rs 1200","rightTag"=>"Disctount 4%")); 
 
?>
        </div>
      </div>
    </div>
  
<!-- End : Your Page Source -->
<?php if(is_file("include/Pages/bodyBottom.cms.php")){ include("include/Pages/bodyBottom.cms.php"); } ?>
</body>
</html>
