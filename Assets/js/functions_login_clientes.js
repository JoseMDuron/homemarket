document.addEventListener('DOMContentLoaded', function () {

    //validamos que exista el formulario del login en la vista.
    if (document.querySelector("#formLogin_clientes")) {
        //si existe agregamos el evento con una variable con let, indica que se va utilizar solo en esta funcion
        let formLogin = document.querySelector("#formLogin_clientes");
        formLogin.onsubmit = function (e) {
            e.preventDefault();//prevenir a que se recargue la pagina al momento de darle submit

            let strEmail = document.querySelector('#txtEmailCliente').value;
            let strPassword = document.querySelector('#txtPasswordCliente').value;

            if (strEmail == "" || strPassword == "") {//validamos que se hayan llenado los campos de correo y de la contrasena
                swal("Por favor", "Escriba usuario y contraseña.", "error");
                return false;
            } else {//cuando los datos esten llenos, se especficia los siguientes datos 
                var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                var ajaxUrl = base_url + '/Login_clientes/loginClientesWeb';
                var formData = new FormData(formLogin);//obtiene los campos del form login
                request.open("POST", ajaxUrl, true);//abre la conexion e indica que se va enviar la informacion
                request.send(formData);//envia la informacion 

                request.onreadystatechange = function () {

                    if (request.readyState != 4) return;//si es diferente de 4 no va hacer nada 
                    if (request.status == 200) {//si la conexion es exitosa convierte en formato json lo obtenido
                        var objData = JSON.parse(request.responseText);//JSON.PARSE lo que hace es parsear para que sea un objeto de formato JSON que viene del response text.
                        if (objData.status) {//valida que si el status que viene en el formato Json que corresponde a lo que viene del controlador, esta en true quiere decir que hizo login de manera correcta
                            window.location = base_url + '/home';//direcciona hacia el dashboard

                        } else {
                            swal("Atencion", objData.msg, "error");
                            document.querySelector('#txtPasswordCliente').value = "";// limpiar el campo de la contraseña

                        }
                    }
                    else {
                        swal("Atencion", "Error en el proceso", "error");
                    }

                    return false;
                }
            }
        }
    }
    if (document.querySelector("#form_Reinicar_clientes")) {//se dirige hacia el elemento reiniciar contraseña de la vista
        let form_reiniciar_contraseñas = document.querySelector("#form_Reinicar_clientes");//si existe ese elemento hace la validacion y le asigna a una variable que obtiene el id del formulario
        form_reiniciar_contraseñas.onsubmit = function (e) {
            e.preventDefault();//previene que se recargue la pagina al darle al boton de aceptar

            let strEmail = document.querySelector('#txtEmailReiniciarCliente').value;//obtiene el valor del input del correo


            if (strEmail == "")//si el valor esta vacio entonces no deja continuar el programa
            {
                swal("Por favor", "Escribe tu correo electronico.", "error");
                return false;
            } else
                // swal("", "ha seleccionado recuperacion por correo", "success");
                var request = (window.XMLHttpRequest) ?// esta variable indica en que navegador se encuentra
                    new XMLHttpRequest() :
                    new ActiveXObject('Microsoft.XMLHTTP');

            var ajaxUrl = base_url + '/login_clientes/resetPassCliente';// a la variala ajaxurl se le asigna el metodo resetPass
            var formData = new FormData(form_reiniciar_contraseñas);
            request.open("POST", ajaxUrl, true);
            request.send(formData);
            request.onreadystatechange = function () {
                //console.log(request);
                if (request.readyState != 4) return;// no devuelve nada
                if (request.status == 200) { // si la peticion es exitosa 
                    var objData = JSON.parse(request.responseText);//convierte a objeto lo que obtiene en formato JSON
                    if (objData.status) {// si el estatu es verdadero quiere decir que se envio el correo y muestra el mensaje
                        swal({
                            title: "",
                            text: objData.msg,// coloca el texto del formato json
                            type: "success",// tipo de msj
                            confirmButtonText: "Aceptar",//boton de confirmacion
                            CloseOnConfirm: false,
                        }, function (isConfirm) {
                            if (isConfirm) {
                              //  window.location = base_url + '/login_clientes';
                               // window.location = base_url;// reedirecciona a la ruta raiz del proyecto
                            }
                        });
                    } else {
                        swal("Atencion", objData.msg, "error");
                    }
                } else {
                    swal("Atencion", "Error en el proceso", "error");// en caso de que no haya status 200
                }
                return false;

            }

        }



    }
        if (document.querySelector('#form_reiniciar_contraseña_C')) {
        let formCambiarPass = document.querySelector('#form_reiniciar_contraseña_C');//con esta variable asignamos el formulario de cambiar contrasena
        formCambiarPass.onsubmit = function (e) {
            e.preventDefault();//previene que se recargue la pagina al momento de darle aceptar al formulario
            let strPassword = document.querySelector('#txtpassword_C').value;//asignamos los valores que obtenemos de los inputs
            let strPasswordConfirm = document.querySelector('#txtpasswordconfirm_C').value;
            let idUsuario = document.querySelector('#id_Usuario').value;

           
            if (strPassword == "" || strPasswordConfirm == "") {
                swal("Por Favor", "Escriba la nueva contraseña", "error");
                return false;
            } else {
                if (strPassword.length < 5) {
                    swal("Atencion", "La contraseña debe tener un minimo de 5 caracteres.", "info");
                    return false;
                }
                if (strPassword != strPasswordConfirm) {
                    swal("Atencion", "Las contraseñas no son iguales", "error");
                    return false;
                }
                var request = (window.XMLHttpRequest) ? //Valida en que navegador esta
                    new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                var ajaxUrl = base_url + '/Login_clientes/setPasswordClient';// obtiene el metodo setPassword del controlador para crear la contrasena
                var formData = new FormData(formCambiarPass);// con este objeto encapsulamos todos los datos obtenidos
                request.open("POST", ajaxUrl, true);//enviamos los datos por el metodo post por medio de la url
                request.send(formData);
                request.onreadystatechange = function () {
                    if (request.readyState != 4) return;
                    if (request.status == 200) {
                        var objData = JSON.parse(request.responseText);
                        if (objData.status) {
                            swal({
                                title: "",
                                text: objData.msg,
                                type: "success",
                                confirmButtonText: "Iniciar sesion",
                                closeOnConfirm: false,
                            }, function (isConfirm) {
                                if (isConfirm) {
                                    window.location = base_url + '/login_clientes';
                                }

                            });
                        } else {
                            swal("Atencion", objData.msg, "error");
                        }

                    } else {
                        swal("Atencion", "Error en el proceso", "error");
                    }
                }
            }
        }
    }

}, false);