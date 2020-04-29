
<!DOCTYPE html>
<html lang = "en">
<!DOCTYPE html>
<head>
    <title>Tasty Recipes - pancakes</title>  
       <link href="resources/css/reset.css" rel ="stylesheet" type="text/css">
    <link href="resources/css/index.css" rel="stylesheet" type="text/css">

     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="resources/javaScript/comment.js"></script>
    
</head>
<body> 
   
    <?php include 'showNav.php';?>
      
    <h1>Pancakes</h1>
<div class="box">
    
        <img src="resources/images/pankaka.jpg" alt="Pankakor">
        <h3>Prep: 10 min | Total: 30 min | Servings: 4</h3>
        <h3>Ingredients</h3>
        <p>1 cup all-purpose flour<br>
        2 tablespoons sugar<br>
        2 tablespoon baking powder<br>1/2 teaspoon salt teaspoon salt<br>
        1 large egg, slightly beaten <br>
        2 tablespoons vegetable oil <br>
       3/4 cup milk<br>
        <h3>Steps to Make It</h3>
        <p>Combine the flour, sugar, baking powder, and salt. Whisk or stir to blend thoroughly.<br>
        Stir in egg, oil, and the milk. Mix lightly, just enough to blend.<br>

        Cook the pancakes on a hot, well-greased griddle. Flip the pancakes when <br>
        you see bubbles breaking all over the tops, and then continue cooking <br>
        until the underside is browned. <br>
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
                <input type="hidden" value = "pancake" name = "holderMod">
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
          <button id ="submitPKcomment" class="comm">Update Comments</button>
          <div>
      
            <p hidden id="unPK"><?php echo $ctr->getUsername();?></p>
            <div id="commentContainPK"></div>  
         
    
        </div>   
    </div>
</body>
</html>