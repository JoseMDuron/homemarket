window.addEventListener('load', function(){
    fntViewCliente();
}, false);
 
 function fntViewCliente(){
    var btnViewCliente = document.querySelectorAll(".btnViewCliente");
    btnViewCliente.forEach(function(btnViewCliente){
        btnViewCliente.addEventListener('click', function(){
            var Id_Cliente = this.getAttribute("cl");
            var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxtUrl = base_url+'/Clientes/getCliente/'+Id_Cliente;
            request.open("GET", ajaxtUrl,true);
            request.send();
            $('#modalViewClientes').modal('show');
        });
    });
}
function openModal(){
    $('#modalViewClientes').modal('show');
}
    

//window.addEventListener('load', function(){
    //fntClientes();
//}, false);

//function fntClientes(){
//var ajaxUrl = base_url+'/Clientes/getSelectClientes';
    //var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    //request.open("GET",ajaxUrl,true);
    //request.send();

    //request.onreadystatechange = function(){
        //if(request.readyState == 4 && request.status == 200){
           // document.querySelector('#listCat').innerHTML = request.responseText;
           // document.querySelector('#listCat').value =1;
           // $('#listCat').selectpicker('render');
           // $('#listCategoria').selectpicker('refresh');
        //}
    //}
//}

var tableClientes;

document.addEventListener('DOMContentLoaded', function(){
    tableClientes = $('#tableClientes').dataTable( {
        "aProcessing":true,
        "aServerSide":true,
        "languaje":{
            "url":"/cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
            
        },
        "ajax":{
            "url": " "+base_url+"/Clientes/getClientes",
            "dataSrc":""
        },
        "columns":[
            {"data":"Id_Cliente"},
            {"data":"Nombre"},
            {"data":"Apellidos"},
            {"data":"Correo_Cliente"},
            {"data":"Telefono"},
            {"data":"Contrasena"},
            {"data":"Categoria"},
            {"data":"Numero_ID"},
            {"data":"Fecha_Registro"},
            {"data":"options"}
        ],
        "resonsieve":"true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order":[[0,"desc"]]
  
        
    });

    //Agregar Cliente
    var formCliente = document.querySelector("#formCliente");
    formCliente.onsubmit = function(e) {
        e.preventDefault();
        //var strID_cliente = document.querySelector('#txtID_cliente').value;
        var strNombre = document.querySelector('#txtNombre').value;
        var strApellidos = document.querySelector('#txtApellidos').value;
        var strCorreo_Cliente = document.querySelector('#txtCorreoelectronico').value;
        var intTelefono = document.querySelector('#txttelefono').value;
        var strContraseña = document.querySelector('#txtContraseña').value;
        var strCategoria = document.querySelector('#listCat').value;
        var intNumero_Identidad = document.querySelector('#txtNumIdentidad').value;
        var strFecha_de_registro = document.querySelector('#txtFecharegistro').value; 

        if(strNombre == '' || strApellidos == '' || strCorreo_Cliente == '' || intTelefono =='' || strCategoria == '' || intNumero_Identidad == '' || strFecha_de_registro == '')
        {
            swal("Atencion", "Todos los campos son obligatorios." , "error");
            return false; 
        }
        
        var request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        var ajaxUrl = base_url+'/Clientes/setClientes';
        var formData = new FormData(formCliente);
        request.open("POST",ajaxUrl,true);
        request.send(formData);
        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200){
                var objData = JSON.parse(request.responseText);
                if(objData.status)
                {
                    $('#ClientesModal').modal("hide"); //AQUI
                    formCliente.reset();
                    swal("Clientes", objData.msg ,"success");
                    tableClientes.api().ajax.reload(function(){

                    });
                }else{
                    swal("Error", objData.msg, "error");
                }
            }
           
            
        }
    }
    
    
    
    

    });
$('#tableClientes').DataTable();