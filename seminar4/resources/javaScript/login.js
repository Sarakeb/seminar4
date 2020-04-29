$(document).ready(function(){

 //$("#submit2").click(function() {
    $("#submitbtn").click(function() {
     alert("trying to log in? go to the recepts to leave a comment!"); 
 
var uname1 = $('input[name=userN]').val();
var psw1 = $('input[name=passW]').val();
//alert(uname1);
//alert(psw1);

//kontollera så att det inte blir tomt
if( uname1 =='' || psw1 ==''){
alert("Please fill all fields...!!!!!!");
}

else {
 //alert("work");
$.post("showLoggedIn.php",{ userN:uname1, passW:psw1},function(data) {
//    alert(data);
if(data =='Login Unsuccesfull'){
//window.location.href='resources/views/fel.html';
alert(data);
}

else if(data=='Login Succesfull'){
//window.location.href = "resources/views/loginSuccesfull.php";

alert(data);
//alert("go to the recepts to leave a comment!");
} 

});


}
});
});








