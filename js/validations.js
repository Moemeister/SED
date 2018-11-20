function emptyFields(){
    nombre = document.getElementById("name").value;
    username = document.getElementById("user").value;
    pass = document.getElementById("pass").value;
    if(nombre == "" && username == "" && pass == ""){
        alert("Debe rellenar todos los campos");
    }
}
function passRegex(){
    var pass = document.getElementById('pass').value;
    var regex = o;
    var passresult =  regex.test(pass);
}