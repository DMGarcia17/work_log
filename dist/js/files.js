$(document).ready(function() {
    $('#files').dataTable({
        "ajax" : "test.php",
        "columns" : [
            {"data" : "ID"},
            {"data" : "name"},
            {"data" : "extension"},
            {"data" : null, render : function (data, type, row, meta) {
                return '<button class="btn btn-sm btn-success"><i class="fa fa-edit"></i></button>';
            } }
        ]
    });
});