function emptyFields(){
    nombre = document.getElementById("name").value;
    username = document.getElementById("user").value;
    pass = document.getElementById("pass").value;
    if(nombre == "" || username == "" || pass == ""){
        alert("Debe rellenar todos los campos");
    }
}