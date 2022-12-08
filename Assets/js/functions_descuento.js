
let tableDescuentos;
let rowTable = "";

window.addEventListener('load', function () {
    tableDescuentos = $('#mantenimientoDescuentosTable').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        "languaje": {
            "url": "/cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"

        },
        "ajax": {
            "url": " " + base_url + "/Descuentos/getDescuentos",
            "dataSrc": ""
        },
        "columns": [
            { "data": "Id_Descuento" },
            { "data": "Nombre" },
            { "data": "Descripcion" },
            { "data": "Porcentaje_Deduccion" },
            { "data": "Estado" },
            { "data": "options" }
        ],
        "resonsieve": "true",
        "bDestroy": true,
        "iDisplayLength": 10,
        "order": [[0, "desc"]]
    });
}, false);

window.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector("#formDescuentos")) {
        let formDescuentos = document.querySelector("#formDescuentos");
        formDescuentos.onsubmit = function (e) {
            e.preventDefault();

            let strNombre = document.querySelector('#txtNombre').value;
            let strDescripcion = document.querySelector('#txtDescripcion').value;
            let strPorcentajeDeduccion = document.querySelector('#txtPorcentajeDeduccion').value;
            let estado = document.querySelector('#txtEstado').value;
            let idDescuento = document.querySelector('#IdDescuento').value;

            if (strNombre == '' || strDescripcion == '' || strPorcentajeDeduccion == 0 || estado == '') {
                swal("Atención", "Todos los campos son obligatorios.", "error");
                return false;
            }

            let request = (window.XMLHttpRequest) ?
                new XMLHttpRequest() :
                new ActiveXObject('Microsoft.XMLHTTP');

            let ajaxUrl = base_url + '/Descuentos/setDescuentos';
            let formData = new FormData(formDescuentos);
            formData.append('txtNombre', strNombre)
            formData.append('txtDescripcion', strDescripcion)
            formData.append('txtPorcentajeDeduccion', strPorcentajeDeduccion)
            formData.append('txtEstado', estado)
            formData.append('IdDescuento', idDescuento);
        
            request.open("POST", ajaxUrl, true);
            request.send(formData);

            request.onreadystatechange = function () {
                if (request.readyState == 4 && request.status == 200) {
                    let objData = JSON.parse(request.responseText);
                    if (objData.status) {
                        document.querySelector("#IdDescuento").value = objData.idDescuento;

                        if (rowTable == "") {
                            tableDescuentos.api().ajax.reload();
                        } else {
                            htmlStatus = estado == 1 ?
                                '<span class="badge badge-success">Activo</span>' :
                                '<span class="badge badge-danger">Inactivo</span>';
                            rowTable.cells[1].textContent = strNombre;
                            rowTable.cells[2].textContent = strDescripcion;
                            rowTable.cells[3].textContent = strPorcentajeDeduccion;
                            rowTable.cells[4].innerHTML = htmlStatus;
                            rowTable = "";
                        }
                        swal("", objData.msg, "success");
                        $('#modalMantenimientoDescuentos').modal('hide');
                        formDescuentos.reset();
                    } else {
                        swal("Error", objData.msg, "error");
                    }
                }
            }
        }
    }
}, false);

function fntViewInfo(idDescuento) {
    let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    let ajaxUrl = base_url+'/Descuentos/getDescuento/'+idDescuento;
    request.open("GET",ajaxUrl,true);
    request.send();
    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            let objData = JSON.parse(request.responseText);
            if(objData.status)
            {
                let estado = objData.data.Estado == 1 ? 
                '<span class="badge badge-success">Activo</span>' : 
                '<span class="badge badge-danger">Inactivo</span>';
                document.querySelector("#celId").innerHTML = objData.data.Id_Descuento;
                document.querySelector("#celNombre").innerHTML = objData.data.Nombre;
                document.querySelector("#celPorcentajeDeduccion").innerHTML = objData.data.Porcentaje_Deduccion;
                document.querySelector("#celDescripcion").innerHTML = objData.data.Descripcion;
                document.querySelector("#celEstado").innerHTML = estado;

                $('#modalViewDescuento').modal('show');
            }else{
                swal("Error", objData.msg , "error");
            }
        }
    }
}

function openModal() {
    $('#modalViewDescuentos').modal('show');
}

function fntEditInfo(element, idDescuento) {
    rowTable = element.parentNode.parentNode.parentNode;

    document.querySelector('#modalMantenimientoDescuentosTitle').innerHTML = "Actualizar Descuento";
    document.querySelector('.modal-header').classList.replace("headerRegister", "headerUpdate");
    document.querySelector('#btnActionForm').classList.replace("btn-primary", "btn-info");
    document.querySelector('#btnText').innerHTML = "Actualizar";
    let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    let ajaxUrl = base_url + '/Descuentos/getDescuento/' + idDescuento;
    request.open("GET", ajaxUrl, true);
    request.send();
    
    request.onreadystatechange = function () {
        if (request.readyState == 4 && request.status == 200) {
            let objData = JSON.parse(request.responseText);
            
            if (objData.status) {
                document.querySelector("#IdDescuento").value = objData.data.Id_Descuento;
                document.querySelector('#txtNombre').value = objData.data.Nombre;
                document.querySelector("#txtDescripcion").value = objData.data.Descripcion;
                document.querySelector('#txtPorcentajeDeduccion').value = objData.data.Porcentaje_Deduccion;
                document.querySelector("#txtEstado").value = objData.data.Estado;

                $('#modalMantenimientoDescuentos').modal('show');

            } else {
                swal("Error", objData.msg, "error");
            }
        }
    }
}

function fntDelInfo(idDescuento) {
    swal({
        title: "Eliminar Descuento",
        text: "¿Realmente quiere eliminar al descuento?",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Si, eliminar!",
        cancelButtonText: "No, cancelar!",
        closeOnConfirm: false,
        closeOnCancel: true
    }, function (isConfirm) {

        if (isConfirm) {
            let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            let ajaxUrl = base_url + '/Descuentos/deleteDescuento';
            let strData = "idDescuento=" + idDescuento;
            request.open("POST", ajaxUrl, true);
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            request.send(strData);
            
            request.onreadystatechange = function () {
                if (request.readyState == 4 && request.status == 200) {
                    let objData = JSON.parse(request.responseText);
                    if (objData.status) {
                        swal("Eliminar!", objData.msg, "success");
                        tableDescuentos.api().ajax.reload();
                        formDescuentos.reset();
                    } else {
                        swal("Atención!", objData.msg, "error");
                    }
                }
            }
        }

    });

}
