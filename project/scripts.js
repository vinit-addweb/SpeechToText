/*!
* Start Bootstrap - Simple Sidebar v6.0.3 (https://startbootstrap.com/template/simple-sidebar)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-simple-sidebar/blob/master/LICENSE)
*/
// 
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

// start-pause button 
function pausebtn()
{
var btn = document.getElementById('pause-record-btn');
var btn1 = document.getElementById('start-record-btn');

if((btn.style.display ==="none") || (btn1.style.display ==="block"))
{
    btn.style.display = "block";
    btn1.style.display = "none";
}else{
    btn.style.display = "none";
    btn1.style.display = "block";
}

};


// form validation

function Formval() {
   
    var name = document.forms["dash"]["name"];
    var email = document.forms["dash"]["email"];
    var password = document.forms["dash"]["pwd"];
    var cpassword = document.forms["dash"]["cpwd"];

    var regex = /^[a-zA-Z]+$/;
    var phoneno = /^\d{10}$/;
    var emailval = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    var passval = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{7,15}$/;;
    if (id.value == "") {
        window.alert("Please enter your id.");
        name.focus();
        return false;
    }
    
    
    if(regex.test(dash.name.value) == false)
    {
        window.alert("Name must be in alphabets only");
        dash.name.focus();
        return false;
    }

    if (name.value == "") {
        window.alert("Please enter your name.");
        name.focus();
        return false;
    }

    

    if (address.value == "") {
        window.alert("Please enter your address.");
        address.focus();
        return false;
    }


    if (phone.value == "") {
        window.alert(
          "Please enter your Mobile number.");
        phone.focus();
        return false;
        
    }
    
      
    
    if(!phone.value.match(phoneno))
    {
        alert("Not a valid Phone Number");
        return false;
    }
   
    if (email.value == "") {
        window.alert(
          "Please enter a valid e-mail address.");
        email.focus();
        return false;
    }

    if(!email.value.match(emailval))
    {
        alert("Not a valid Email-address");
        return false;
    }
    if (password.value == "") {
        window.alert("Please enter your password");
        password.focus();
        return false;
    }
  
    if(!password.value.match(passval))
    {
        window.alert("password must in between 6 to 20 characters");
        return false;
    }

    return true;
}

// // store data in json

// var str_json = JSON.stringify(noteContent);
//     console.log(str_json);

//     var request= new XMLHttpRequest();
//     request.open("POST", "receive.php", true);
//     request.setRequestHeader("Content-type", "application/json");
//     request.send(str_json);