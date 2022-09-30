// Add Record
function addRecord() {
    // get values
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();
    var ci = $("#ci").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    // Add record
    $.post("ajax/addRecord.php", {
        nombre: nombre,
        apellido: apellido,
        ci: ci,
		telefono: telefono,
        direccion: direccion
    }, function (data, status) {
        // close the popup
        $("#add_new_record_modal").modal("hide");

        // read records again
        readRecords();

        // clear fields from the popup
        
        $("#nombre").val("");
        $("#apellido").val("");
        $("#ci").val("");
        $("#direcion").val("");
        $("#telefono").val("");
    });
}

// READ records
function readRecords() {
    $.get("ajax/readRecord.php", {}, function (data, status) {
        $("#records_content").html(data);
    });
}


function DeleteUser(id) {
    var conf = confirm("¿Está seguro, realmente desea eliminar el registro?");
    if (conf == true) {
        $.post("ajax/deleteUser.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readUserDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_nombre").val(user.nombre);
            $("#update_apellido").val(user.apellido);
            $("#update_ci").val(user.ci);
            $("#update_telefono").val(user.telefono);
            $("#update_direccion").val(user.direccion);
        }
    );
    // Open modal popup
    $("#update_user_modal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var nombre = $("#update_nombre").val();
    var apellido = $("#update_apellido").val();
    var ci = $("#update_ci").val();
    var telefono = $("#update_telefono").val();
    var direccion = $("#update_direccion").val();
    // get hidden field value
    var id = $("#hidden_user_id").val();

    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
            id: id,
            nombre: nombre,
            apellido: apellido,
            ci: ci,
            direccion: direccion,
            telefono: telefono
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}

$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});