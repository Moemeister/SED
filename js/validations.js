function emptyFieldsReg(){
    nombre = document.getElementById("name").value;
    username = document.getElementById("user").value;
    pass = document.getElementById("pass").value;
    pass2 = document.getElementById("pass2").value;
    if(nombre == "" || username == "" || pass == "" || pass2 == ""){
        alert("Debe rellenar todos los campos");
    }
}


function emptyFields(){
    username = document.getElementById("user").value;
    pass = document.getElementById("pass").value;
    if(username == "" && pass == ""){
        alert("Debe rellenar todos los campos");
    }
}
/*$('#pass, #pass2').on('keyup', function () {
    if ($('#pass').val() == $('#pass2').val()) {
      $('#message').html('Matching').css('color', 'green');
    } else 
      $('#message').html('Not Matching').css('color', 'red');
  });*/
  var check = function() {
    if (document.getElementById('pass').value ==
      document.getElementById('pass2').value) {
      document.getElementById('message').style.color = 'green';
      document.getElementById('message').innerHTML = 'matching';
      document.getElementById('register-box').style.height = "620px";
    } else {
      document.getElementById('message').style.color = 'red';
      document.getElementById('message').innerHTML = 'not matching';
      document.getElementById('register-box').style.height = "620px";
    }
  }
  $(function(){
      var mayus = new RegExp("^(?=.*[A-Z])");
      var number = new RegExp("^(?=.*[0-9])");
      var len = new RegExp("^(?=.{8,})");

      var regExp = [mayus,number,len];
      var elements = [$("#mayus"),$("#number"),$("#len")];

    
      $("#pass").on("keyup", function(){
            var pass = $("#pass").val();
            for (var i = 0; i <3; i++ ){
                if(regExp[i].test(pass)){
                    elements[i].hide();
                    document.getElementById('register-box').style.height = "560px";
                }else{
                    elements[i].show();
                    

                    
                }
            }
      });
      
  });