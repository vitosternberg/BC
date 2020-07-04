function validarform ()

{

  var todo_correcto = true;
    
    if (document.getElementById('nombre').value.lenght<1){
        todo_correcto = false;
           //document.formulario.nombre.focus()
           
    }
    var expresion = /^[a-z][\w.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i;
    var email = document.formulario.email.value;
    if (!expresion.test(email)){
    todo_correcto = false;
 
    } 

    if(document.getElementById('sub').value.length < 1 ){
    todo_correcto = false;
    }

    if(document.getElementById('mess').value.length < 1 ){
    todo_correcto = false;
    }
    
    if(!todo_correcto){
        alert('Algunos campos no estan correctos, vuelva a revisarlos');
    }
       return todo_correcto;

}
/*alert("Hello! I am an alert box!!");}*/