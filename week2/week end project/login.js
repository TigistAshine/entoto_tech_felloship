


 var login= {
    Firstname:"Tigist",
    Email:"tigistashine22@gmail.com",
    Phone:"0922864247"
}
function user() {
    

     var Firstname = document.getElementById('firstname').value;
     var Email=document.getElementById('Email').value;
     var Phone=document.getElementById('phone').value;

     if (login.Firstname && login.Email && login.Phone)
      {
    window.location.href="./home.html";
        // alert('successfully login');
     }else {
        alert("try again");
     }
  
}



