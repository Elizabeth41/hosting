/*
var input_field = document.querySelectorAll(".input");
var loginbtn = document.querySelector("#submit");

input_field.forEach(function(input_item){
    input_item.addEventListener("input", function(){
        if(input_item.value.length > 3){
            alert("hola");
            loginbtn.disable = false;
            loginbtn.className = "btn enabled";
        }
    });
});


function Validacion(){
    var username = document.querySelector("#uname");
     var password = document.querySelector("#psw");
        var errormsg = document.querySelector(".error_msg");
        
        if(username.value.length<=3 || password.value.length <=3){
            errormsg.style.display = "inline-block";
            return false;
        }else{
            alert("Por favor ingrese un usuario y clave correcta.");
            return false;
        }
        
    
}

*/






/*
    1. admin, 12345
    2. juan, perez
*/


/*
function obtenerListaUsuarios(){
    var listaUsuarios  = JSON.parse(localStorage.getItem('listaUsuariosLs'));
    
    if(listaUsuarios == null){
        // listaUsuarios = 
        // [
            // id, nombre, clave
        //    ['1','arely','12345'],
        //    ['2','user','12345']
        // ]
        listaUsuarios = 
        [
            // nombre, clave
            ['arely','12345'],
            ['user','12345']
        ]
    }
    return listaUsuarios;
}

function validarCredenciales(pUsuario, pClave){
    var listaUsuarios = obtenerListaUsuarios();
    var bAcceso = false;
    
    for(var i = 0; i < listaUsuarios.length; i++){
        if(pUsuario == listaUsuarios[i][1] && pClave == listaUsuarios[i][2]){ 
            bAcceso = true;
            sessionStorage.setItem('usuarioActivo', listaUsuarios[i][1] + ' ' + listaUsuarios[i][2]);
            
            // sessionStorage.setItem('rolUsuario', listaUsuarios[i][3]);
        }
    }
    
    return bAcceso;
}


const botonsubmit = document.querySelector('#submit');
botonsubmit.addEventListener('click', inicioSesion());

function iniciarSesion(){
    var sUsuario = '';
    var sClave = '';
    var bAcceso = false;
    
    sUsuario = document.querySelector('#username').value;
    sClave = document.querySelector('#passsw').value;
    
    bAcceso = validarCredenciales(sUsuario, sClave);
    console.log(bAcceso);
    
    if(bAcceso == true){
        ingresar();
    }
}


function ingresar(){
    var rol = sessionStorage.getItem('rolUsuarioActivo');
    switch(rol){
        case '1':
            window.location.href = 'PaginaPrincipal/paginaprincipal.html';
        break;
        default:
            window.location.href = 'login.html';
        break;
            
    }
}

*/


// const lUsuario = document.getElementById("username");
// const lClave = document.getElementById("passsw");
// const lForm = document.getElementById("myform"); 
var Usurio = document.querySelector('#username');
var Password = document.querySelector("#passw");
var btnLogin = document.querySelector("#etiquetaIr");

/*
lForm.addEventListener("submit", e=>{
    e.preventDefault()
    if(lUsuario.nodeValue.length < 5){
        alert("Usuario muy corto")
    }
})
*/

/*
Usurio.addEventListener('keyup', function(){
                        console.log("hello");
    if(Usurio.value.length == 0 || Usurio.value.length < 5){
        alert("Usuario muy corto");
        return false;
    }else{
        
    }

})
*/

function validando(){
    if(Usurio.value == "admin" && Password.value == "12345"){ 
        alert("bienvenido");
        window.location.href = 'PaginaPrincipal/paginaprincipal.html';
    }else{
         alert("ingrese un usuario valido");
    }
}


btnLogin.addEventListener('click', validando);