$(document).ready(function() {
    $('#files').dataTable({
        "ajax" : "test.php",
        "columns" : [
            {"data" : "ID"},
            {"data" : "name"},
            {"data" : "extension"},
            {"data" : null, render : function (data, type, row, meta) {
                return '<button class="btn btn-xs btn-success"><i class="fa fa-edit"></i></button>';
            } }
        ],
        dom: 'Bfrtip',
        "buttons" : [
            {
                text: 'Add',
                action: function (e, dt, node, config) {
                    $('#staticBackdrop').modal('toggle');
                }
            }
        ]
    });
});


let saveFile = () => {
    if ($('#fileName').val() != undefined && $('#fileExtension').val() != undefined) {
        $.ajax({
            type  : 'post',
            url   : '../controllers/functions.php',
            data  : {
                      'ID': $('#fileId').val(),
                      'name' : $('#fileName').val(),
                      'extension' : $('#fileExtension').val(),
                      'function' : 'sf'
                    },
            success: function (res) {
                let Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000
                  });

                  Toast.fire({
                    icon: 'success',
                    title: 'Data saved successful!'
                  });

                  
                  $('#staticBackdrop').modal('toggle');

                  $('#files').DataTable().ajax.reload();

            }
          });
    }
};
