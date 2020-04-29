<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Tasty Recipes - meatballs</title>  
    <link href="resources/css/reset.css" rel ="stylesheet" type="text/css">
    <link href="resources/css/index.css" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="resources/javaScript/comment.js"></script>
  
    
</head>
<body>  
    <?php 
include 'showNav.php';
?>
   
    <h1>Meatballs</h1> 
    <div class="box">
       
      <img src="resources/images/kottbull.jpg" alt="kottbullar">
        <h3> Total:45 min |Prep: 15 min | cook: 40 min | yeald: 4 Servings </h3>
        <h3>Ingredients</h3>

        <p>1 pound lean ground beef<br>
        1 egg<br>
       2 tablespoons water<br>
        1/2 cup bread crumbs<br>
        11/4 cup onion (minced)<br>
        1/2 teaspoon salt<br>
       1/8 teaspoon pepper<br>
        </p>
        <h3>Steps to Make It</h3>
        <p>Gather the ingredients.<br>
        Preheat oven to 350 F<br>
       In a large bowl combine the egg, water, bread crumbs, onion, <br>
       salt, and pepper and combine. Add the ground beef <br>
       that has been broken into chunks, and mix gently, <br>
       but thoroughly,with your hands to combine.<br>
       </p>
            
       
   
 <?php
 use classes\Controller\Controller;
$ctr = Controller::accessController();
$username = $ctr->getUsername();

if(!empty($ctr) && $username != '') {
    echo'
        <h3>Add a public comment</h3>
        <div class="comments">
           <form id ="ops">
                <label>Comment</label>
                <input type="text" name="comment" placeholder="Your comments...">
                <input type="hidden" value = "meatball" name = "holderMod">
          </form>
           <button id="submit">Submit Comment</button>
        </div>';
}


 else {
                echo '<h4>Log in to write a comment</h4><br>';
            }
            ?>

        <h4>Comment section</h4>
        <hr>

        <button id ="submitKBcomment" class="comm">Update Comments</button>
  
    <div>
            <p hidden id="unKB"><?php echo $ctr->getUsername();?></p>
            <div id="commentContainKB"></div>
               
         
            
            
        </div>
    </div>
</body>
</html>
