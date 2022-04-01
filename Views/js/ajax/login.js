//Ajax login
let form = document.querySelector("#login");

let login  = (e) => {
    e.preventDefault();
    let correo = e.target.correo.value
    let password = e.target.password.value

    if (correo == "" || password == "") {
           swalMixin("top","error","Existen campos vacíos");
            return;
    } 

     let dato = new FormData();
     dato.append("correo",correo)
     dato.append("password",password)
    
    $.ajax({ 
    url:"Views/Ajax/login.ajax.php",
    method: "POST",
    data: dato,
    dataType: "json",
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
        console.log(data);
        if(data.response == "true"){
            let button =  e.target[2];
            button.setAttribute("disabled","");
            e.target.correo.setAttribute("disabled","");
            e.target.password.setAttribute("disabled","");
            swalMixin("top","success","Redireccionando...");   
            
              
            setTimeout(() => window.location.href = "crear" ,3000)
        }else{
            swalMixin("top","error","Campos incorrectos");   
        }
        
       
    }
    });
    
}
// Esta condicional evalúa si el id del form existe, para que no surja el error
/*
Uncaught TypeError: Cannot read properties of null (reading 'addEventListener')
*/
if(form){
form.addEventListener("submit",login);
}