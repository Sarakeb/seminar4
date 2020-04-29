$(document).ready(function() {
   // alert("works");
    $("button#submit").click(function() {  //när man clickar på submit btn
        alert("Comment is submitted!");
        $.post("showComments.php", $("#ops").serialize());  ///$.post(url,[data],[callback],[type]);
    });
     
    $("button#submitKBcomment").click(kottbularComment);    //efter man clickat på, funktionen kottbularComment
    $("button#submitPKcomment").click(pankakorcomment);     //efter man clickat på, funktionen pankakorcomment
    
  

    function kottbularComment() {
        alert("Comment is succsefully updated!");
        $("#commentContainKB").html("");
       
        $.get("classes/Database/kottbullarDB.html", function(variable) {   //skicka request till databsen: om request lyckas executa funktionen.
        var comm = variable.split("\n");
     
        var vektor = new Array();  //skapade ny array        
        for (var i = 0; i < comm.length; i++){
            vektor[i] = comm[i];   //sparas i vektor
        }

        for (var j = 0; j < comm.length; j++) {

            var value = comm[j].match($("#unKB").text());  //kommenten skriven av den inloggade användaren, om de matchas
           
            if(value == $("#unKB").text()) {  ////så länge användaren har skrivit kommentar, det inte är tomt
            
            var commentDel = $("<form id = \"raderaK\" method = \"POST\" onsubmit=\"return false\">");  //började form

            //The appendTo():insert HTML element at the end of the selected element.
           
            $(comm[j]).appendTo(commentDel);  //lägg den i sluttet

            $("<input type=\"hidden\" name=\"Delete\">").appendTo(commentDel);

            $("<input type=\"hidden\" value = \"meatball\" name = \"holderMod\">").appendTo(commentDel);  //för köttbullar

            $("<input type='hidden' name='timestamp' value='" + vektor[j] + "'/></form>").appendTo(commentDel);  //med hjälp av datum.      stände form

            $("<button id=\"btnRd\">Delete</button>").click(btnRadera).appendTo(commentDel);  //funktionen btnRadera

            $(commentDel).appendTo("#commentContainKB");
            
            }          
        }
    });} 




    function pankakorcomment() {
        alert("Comment is succsefully updated!");
        $("#commentContainPK").html("");
       
        $.get("classes/Database/pankakorDB.html", function(variable) {   //skicka request till databsen: om request lyckas executa funktionen.
        var comm = variable.split("\n");
        
        var vektor = new Array();
        
        for (var i = 0; i < comm.length; i++){
           vektor[i] = comm[i];   //sparas i vektor
        }

        for (var j = 0; j < comm.length; j++) {
            var value = comm[j].match($("#unPK").text());   //kommenten skriven av den inloggade användaren, om de matchas      

           ////så länge användaren har skrivit kommentar, det inte är tomt
           if(value == $("#unPK").text()) { 
         
            var commentDel = $("<form id = \"raderaP\" method = \"POST\" onsubmit=\"return false\">");
             
            //The appendTo():insert HTML element at the end of the selected element.

            $(comm[j]).appendTo(commentDel); //lägg den i sluttet

            $("<input type=\"hidden\" name=\"Delete\">").appendTo(commentDel);

            $("<input type=\"hidden\" value = \"pancake\" name = \"holderMod\">").appendTo(commentDel);  //för pankakor

            $("<input type='hidden' name='timestamp' value='" + vektor[j] + "'/></form>").appendTo(commentDel); //med hjälp av datum.      stände form

            $("<button id=\"btnRd\">Delete</button>").click(btnRadera).appendTo(commentDel);

            $(commentDel).appendTo("#commentContainPK");
            
            }
            
           
        }
    });} 
    
    function btnRadera(){  //radera kommentarer
        $.post("showDeletedComments.php", $(this).siblings("input").serialize());
        alert("Comment succesfully deleted!");
    }
});

