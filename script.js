const menu = document.querySelector('#mobile-menu')
const menuLinks = document.querySelector('.nav-bar')

menu.addEventListener('click', function() {
    menu.classList.toggle('is-active');
    menuLinks.classList.toggle('active');
})

function myFunction(){
    alert("LOGOUT SUCCESSFUL!");
}

function validateform(){
    var name = documen.loginform.password.value;
    var password = document.loginform.password2.value;
    
    if (name == null || name==""){
        alert ("rong username OR password!");
    } else if (password == null) {
        alert ("wrong username OR password!");    
        return false;
    }
}

//function validateform(){
//    var name = document.regform.password.value;
//    var password = document.regform.password2.value;
    
//    if (name == null || name==""){
        
//        return true;
//   } else {
//        alert ("Password must be the same!");
//        return false;
//    }
//}


//function loginFunction() {
//    alert("Login Successful.")
//}

//function myFunction() {
//    let text = "Do you want to logout?\nOK or Cancel."
//    if (confirm(text) == true) {
//        text = "";
//    } else {
//        text = "Canceled!";
//    }
//    document.getElementById("demo").innerHTML = text;
//}

//let search = document.getElementById("search");

//search.addEventListener("click", buttonClicked);
//function buttonClicked(ev){
//    console.log(ev.type, ev.target, ev.currentTarget);
//}