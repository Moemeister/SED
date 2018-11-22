function emptyFieldsReg(){
    nombre = document.getElementById("name").value;
    username = document.getElementById("user").value;
    pass = document.getElementById("pass").value;
    pass2 = document.getElementById("pass2").value;
    if(nombre == "" || username == "" || pass == "" || pass2 == ""){
        alert("Debe rellenar todos los campos");
    }
    //var regex2 = new RegExp("^(?=.*[A-Z].*[0-9].{8,})");
    var regex2 =  new RegExp("^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$");
    if (!(regex2.test(pass))){
        alert("La contraseña no es segura, Usuario no creado");
        window.location.href="register.php";
        
    }
}
function emptyFieldsReg2(){
    nombre = document.getElementById("name").value;
    username = document.getElementById("user").value;
    pass = document.getElementById("pass").value;
    pass2 = document.getElementById("pass2").value;
    if(nombre == "" || username == "" || pass == "" || pass2 == ""){
        alert("Debe rellenar todos los campos");
    }
    var regex2 =  new RegExp("^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$");
    if (!(regex2.test(pass))){
        alert("La contraseña no es segura, los cambios no se han efectuado");
        window.location.href="config.php";
        
    }
}


function emptyFields(){
    username = document.getElementById("user").value;
    pass = document.getElementById("pass").value;
    if(username == "" && pass == ""){
        alert("Debe rellenar todos los campos");
    }
}
  var check = function() {
    if (document.getElementById('pass').value ==
      document.getElementById('pass2').value) {
      document.getElementById('message').style.color = 'green';
      document.getElementById('message').innerHTML = 'matching';

    } else {
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').innerHTML = 'not matching';
    }
  }
  var check2 = function() {
    if (document.getElementById('pass').value ==
      document.getElementById('pass2').value) {
      document.getElementById('message').style.color = 'green';
      document.getElementById('message').innerHTML = 'matching';
     
    } else {
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').innerHTML = 'not matching';
      
    }
  }
  $(function(){
      var mayus = new RegExp("^(?=.*[A-Z])");
      var number = new RegExp("^(?=.*[0-9])");
      var len = new RegExp("^(?=.{8,})");
     // var len = new RegExp("^[a-zA-Z0-9]{8,}");
      
      var regExp = [mayus,number,len];
      var elements = [$("#mayus"),$("#number"),$("#len")];

    
      $("#pass").on("keyup", function(){
            var pass = $("#pass").val();
            for (var i = 0; i <3; i++ ){
                
                if(regExp[i].test(pass)){
                    elements[i].hide();
                    
                    //document.getElementById('config-box').style.height = "560px";
                }else{
                    elements[i].show();
                    

                    
                }
            }
            
      });
      
  });