function connected() {

var success = document.getElementById("success");
success.style.opacity = "1";
success.style.visibility = "visibility";


$.ajax({
url: "./database/db2.php",
method: "POST",
data: {

},
success: function (data) {
$("#success-txt").html(data);

}

});

setTimeout(function () {
success.style.opacity = "0";
success.style.visibility = "hidden";
}, 5000);

}

function showMsg() {
var loginmsg = document.getElementById("pop-up");
loginmsg.style.opacity = "1";
loginmsg.style.visibility = "visible";

}

function hideMsg() {
var loginmsg = document.getElementById("pop-up");
loginmsg.style.opacity = "0";
loginmsg.style.visibility = "hidden";

}


$("body").delegate("#login-form", "submit", function (e) {
e.preventDefault();
showMsg();
var emailtxtbox = document.getElementById('email').value;
var passwordtxtbox = document.getElementById('pwd').value;


$.ajax({
url: "./urls/login.php",
method: "POST",
data: {
email: emailtxtbox,
password: passwordtxtbox

},
success: function (data) {
$("#pop-up-txt").html(data);

}

});
});


$(document).ready(function(){
   
    alert(0);

$("body").delegate("#register-student-form", "submit", function (e) {
e.preventDefault();
// showLoginMsg();
// var emailtxtbox = document.getElementById('email').value;
// var passwordtxtbox = document.getElementById('pwd').value;
var sgender = document.getElementById('sgender').value
var sname = document.getElementById('sname').value
var sdob = document.getElementById('sdob').value
var scertificate = document.getElementById('scertificate').value
var sclass = document.getElementById('sclass').value
var sdate = document.getElementById('sdate').value
var pname = document.getElementById('pname').value
var prelation = document.getElementById('prelation').value
var pnumber = document.getElementById('pnumber').value
var form = document.getElementById("register-student-form");











$.ajax({
url: "../urls/register.php",
method: "POST",
data: {
sgender: sgender,
sname: sname,
sdob: sdob,
scertificate: scertificate,
sclass: sclass,
sdate: sdate,
pname: pname,
prelation: prelation,
pnumber: pnumber


},
success: function (data) {

showMsg();


$("#pop-up-txt").html(data);

}

});
});

    
    
});




function all_students() {

$("#all-students").html("Please wait...");
$.ajax({
url: "../urls/all_students.php",
method: "GET",
data: {

},
success: function (data) {
$("#all-students").html(data);
}

});
}


function deregistered_students() {

$("#all-students").html("Please wait...");
$.ajax({
url: "../urls/de_registered.php",
method: "GET",
data: {

},
success: function (data) {
$("#all-students").html(data);
}

});
}

$("body").delegate("#search-form", "submit", function (e) {

e.preventDefault();
search_student();
});

function search_student() {



var query = document.getElementById("query").value;
showSuggestion();
$("#suggestion").html("Loading...");

if (query === "") {
hideSuggestion();

return 0;
}

$.ajax({

url: "../urls/search_student.php",
method: "GET",
data: {
query: query

},

success: function (data) {

$("#suggestion").html(data);

}


});

}


function showSuggestion() {
var suggestion = document.getElementById("suggestion");

suggestion.style.visibility = "visible";

}



function hideSuggestion() {
var suggestion = document.getElementById("suggestion");

suggestion.style.visibility = "hidden";


}


function showDialog() {
var dialog = document.getElementById("dialog");
var dialog_content=document.getElementById("dialog-content");

dialog.style.opacity = "1";
dialog.style.visibility = "visible";

setTimeout(function(){
dialog_content.style.marginTop="50px";

},20);

}


function hideDialog() {
var dialog = document.getElementById("dialog");
var dialog_content=document.getElementById("dialog-content");
// hideMsg();

dialog.style.opacity = "0";
dialog.style.visibility = "hidden";

setTimeout(function(){
dialog_content.style.marginTop="0px";

},50);
}



$("body").delegate("#delete","click",function(e){
e.preventDefault();


var sid = $(this).attr('sid');



$.ajax({
url:"../urls/delete_action.php",
method:"GET",
data:{
sid:sid,
},

success: function (data) {

showDialog();
$("#dialog-content").html(data);

}

});
});



$("body").delegate("#reverse","click",function(e){
e.preventDefault();


var sid = $(this).attr('sid');



$.ajax({
url:"../urls/reverse_action.php",
method:"GET",
data:{
sid:sid,
},

success: function (data) {

showDialog();
$("#dialog-content").html(data);

}

});
});


$(document).click(function(e){

if($(e.target).is('#dialog')){
var dialog = document.getElementById("dialog");
hideDialog();
}
});


// $(document).click(function(e){

// if(!$(e.target).is('#suggestion')){
// hideSuggestion();
// }
// });





$("body").delegate("#dialog-content-form", "submit", function (e) {
e.preventDefault();


var sid = $(this).attr('sid');
var reason = document.getElementById("reason").value;

$.ajax({
url:"../urls/delete_student.php",
method:"POST",
data:{
sid:sid,
reason:reason
},

success:function(data){

showMsg() ;
all_students();
hideDialog();

$("#pop-up-txt").html(data);


}

});
});




$("body").delegate("#reverse_btn", "click", function (e) {
e.preventDefault();


var sid = $(this).attr('sid');

$.ajax({
url:"../urls/reverse_student.php",
method:"POST",
data:{
sid:sid,
},

success:function(data){

showMsg() ;
deregistered_students();
all_students();
hideDialog();
search_student();
$("#pop-up-txt").html(data);


}

});
});




$("body").delegate("#edit","click",function(e){
e.preventDefault();


var sid = $(this).attr('sid');



$.ajax({
url:"../urls/edit_action.php",
method:"GET",
data:{
sid:sid,
},

success: function (data) {

showDialog();
$("#dialog-content").html(data);

}

});
});



$("body").delegate("#edit-form", "submit", function (e) {
e.preventDefault();


var sid = $(this).attr('sid');
var sgender = document.getElementById('sgender').value
var sname = document.getElementById('sname').value
var sdob = document.getElementById('sdob').value
var scertificate = document.getElementById('scertificate').value
var sclass = document.getElementById('sclass').value
var sdate = document.getElementById('sdate').value
var pname = document.getElementById('pname').value
var prelation = document.getElementById('prelation').value
var pnumber = document.getElementById('pnumber').value


$.ajax({
url:"../urls/update_student.php",
method:"POST",
data:{
sid:sid,
sgender: sgender,
sname: sname,
sdob: sdob,
scertificate: scertificate,
sclass: sclass,
sdate: sdate,
pname: pname,
prelation: prelation,
pnumber: pnumber
},

success:function(data){

showMsg() ;
all_students();
hideDialog();
search_student();
$("#pop-up-txt").html(data);


}

});
});



$("body").delegate("#sort-student-form", "submit", function (e) {
e.preventDefault();

var gender = document.getElementById("gender").value;
var start= document.getElementById("start").value;
var end = document.getElementById("end").value;


$.ajax({
url:"../urls/sort_student.php",
method:"GET",
data:{
gender:gender,
start:start,
end:end,
},
success:function(data){
    $("#all-students").html(data);

}


});
});

$("body").delegate("#change-school-btn", "click", function (e) {
    e.preventDefault();
    var school = $(this).attr('school');

    
    $.ajax({
        url:"../urls/change-school-action.php",
        method:"GET",
        data:{
            school:school,
       
        },
        success:function(data){
            showDialog();
            $("#dialog-content").html(data);
        
        }

    });
});


$("body").delegate("#update-school-form", "submit", function (e) {
    e.preventDefault();
    var original = $(this).attr('school');
    var school = document.getElementById("school").value;

    
    $.ajax({
        url:"../urls/change-school.php",
        method:"GET",
        data:{
            school:school,
            original:original,
       
        },
        success:function(data){
            showMsg();
            $("#pop-up-txt").html(data);
        
        }

    });
});


$("body").delegate("#add-admin-btn", "click", function (e) {
   
    e.preventDefault();
  

    $.ajax({
        url:"../urls/add-admin-action.php",
        method:"GET",
        data:{
           
       
        },
        success:function(data){
            showDialog();
            $("#dialog-content").html(data);
        
        }

    });


});



$("body").delegate("#add-admin-form", "submit", function (e) {
    e.preventDefault();
    
     var name=document.getElementById("name").value;
    var email=document.getElementById("email").value;
    var password=document.getElementById("password").value;

    
    $.ajax({
        url:"../urls/add-admin.php",
        method:"POST",
        data:{
            name:name,
            email:email,
            password:password,
       
        },
        success:function(data){
            
            showMsg();
            $("#pop-up-txt").html(data);
        
        }

    });
});