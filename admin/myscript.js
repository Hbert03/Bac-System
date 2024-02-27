$(document).ready(function() {
    var table = $('#myTable').DataTable({
        serverSide: true,
        responsive: true,
        lengthChange: false,
        autoWidth: true,

        ajax: {
            url: "getdata.php",
            type: "post",
            data:{files:true},
            error: function (xhr, error, thrown) {
               
            }
        },
        columns: [
            { 
            "data":"bac_list"
            },
            {"data": "file_name"},
            { "data": "date" },
            {
                "data": null,
                "render": function(data, type, row) {
                    return '<div  class="d-flex"><a class="btn btn-success btn-sm" href="../pdf/' + row.file_name + '" target="_blank"><span>View <i class="fa fa-eye" style="color:skyblue" ></i></span></a>' +
                    '<button class="btn btn-danger btn-sm ml-2 ms-1 delete-btn" name="delete" data-delete="' + row.id + '"><span>Delete <i class="fa fa-trash" style="color:skyblue"></i></span></button>' +
                    '<button class="btn btn-info btn-sm ml-2 ms-1 update-btn" name="update" data-update="' + row.id + '"><span>Update<i class="fa fa-pen" style="color:yellow"></i></span></button>' +'</div>';
                }
            },
        ],
        "initComplete": function(settings, json) {
           
        },
        "error": function(xhr, error, thrown) {
          
        }
        
    });
    


  // Update button click event handler
$('#myTable').on('click', '.update-btn', function() {
    var rowData = table.row($(this).parents('tr')).data(); 
    var id = rowData.id; 
    $.ajax({
        url: 'getdata.php',
        type: 'POST',
        data: {
            getfiles: true 
        },
        success: function(response) {
            var options = JSON.parse(response);
            var selectOptions = '';
            var defaultOption = '';
            options.forEach(function(option) {
            selectOptions += '<option value="' + option.id + '">' + option.bac_list + '</option>'; 
                if (rowData.bac_list === option.bac_list) {
                    defaultOption = option.id;
                }
            });
            var html =
            '<select id="swal-select1" class="swal2-input">' +
            '<option value="' + defaultOption + '" selected>' + rowData.bac_list + '</option>' + 
            selectOptions +
            '</select>' +
            '<input id="swal-input2" class="swal2-input" value="' + rowData.file_name + '">';
            Swal.fire({
                title: 'Update Form',
                html: html,
                focusConfirm: false,
                confirmButtonText:'Update',
                preConfirm: () => {
                    const value1 = document.getElementById('swal-select1').value;
                    const value2 = document.getElementById('swal-input2').value;
                    return [value1, value2];
                },
            }).then((result) => {
                if (result.isConfirmed) {
                    const [value1, value2] = result.value; 
                    $.ajax({
                        url: 'function.php',
                        type: 'POST',
                        data: {
                            update: true,
                            id: id,
                            bac_list: value1, 
                            file_name: value2 
                        },
                        success: function(response) {
                            if (response.trim() === "Updated Successfully") {
                                Swal.fire(
                                    'Updated!',
                                    'File has been updated successfully.',
                                    'success'
                                );
                                table.ajax.reload();
                            } else {
                                Swal.fire(
                                    'Failed!',
                                    'Failed to update file.',
                                    'error'
                                );
                            }
                        },
                    });
                }
            });
           }
       });
    });


    $('#myTable').on('click', '.delete-btn', function() {
        var id = $(this).data('delete');
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to delete it?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: 'function.php',
                    type: 'POST',
                    data: {
                        delete: true,
                        id: id
                    },
                    success: function(response) {
                        if (response.trim() === "Deleted Successfully") {
                            Swal.fire(
                                'Deleted!',
                                'File has been deleted successfully.',
                                'success'
                            );
                            // Reload the table data
                            table.ajax.reload();
                        } else {
                            Swal.fire(
                                'Failed!',
                                'Failed to delete file.',
                                'error'
                            );
                        }
                    },
                });
            }
        });
    });
});






function Logout() {
    Swal.fire({
        title: 'Are you sure?',
        text: "You will be signed out!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, sign me out!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'function.php';
        }
    });
}
