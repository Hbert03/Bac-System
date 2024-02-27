$(document).ready(function() {
    var table = $('#showTable').DataTable({
        serverSide: true,
        responsive: true,
        lengthChange: false,
        autoWidth: true,
        ajax: {
            url: "fetch.php",
            type: "post",
            data: {list: true},
            error: function(xhr, error, thrown) {
                console.log("Ajax request failed: " + thrown);
            }
        },
        columns: [
            {"data": "file_name"},
            {"data": "date"},
            {
                "data": null,
                "render": function(data, type, row) {
                    return '<a class="btn btn-success btn-sm" href="pdf/' + row.file_name + '" target="_blank"><span>View <i class="fa fa-eye" style="color:skyblue"></i></span></a>';
                }
            },
        ],
        "initComplete": function(settings, json) {
            console.log("Data loaded:", json);
        },
        "error": function(xhr, error, thrown) {
            console.log("DataTables error:", thrown);
        }
    });

    $('#select').on('change', function() {
        var selectedOption = $(this).val();
        table.column(0).search(selectedOption).draw();
    });
});

$(document).ready(function() {
    var table = $('#showTable1').DataTable({
        serverSide: true,
        responsive: true,
        lengthChange: false,
        autoWidth: true,
        ajax: {
            url: "fetch.php",
            type: "post",
            data: {list1: true},
            error: function(xhr, error, thrown) {
                console.log("Ajax request failed: " + thrown);
            }
        },
        columns: [
            {"data": "file_name"},
            {"data": "date"},
            {
                "data": null,
                "render": function(data, type, row) {
                    return '<a class="btn btn-success btn-sm" href="pdf/' + row.file_name + '" target="_blank"><span>View <i class="fa fa-eye" style="color:skyblue"></i></span></a>';
                }
            },
        ],
        "initComplete": function(settings, json) {
            console.log("Data loaded:", json);
        },
        "error": function(xhr, error, thrown) {
            console.log("DataTables error:", thrown);
        }
    });

    $('#select').on('change', function() {
        var selectedOption = $(this).val();
        table.column(0).search(selectedOption).draw();
    });
});

$(document).ready(function() {
    var table = $('#showTable2').DataTable({
        serverSide: true,
        responsive: true,
        lengthChange: false,
        autoWidth: true,
        ajax: {
            url: "fetch.php",
            type: "post",
            data: {list2: true},
            error: function(xhr, error, thrown) {
                console.log("Ajax request failed: " + thrown);
            }
        },
        columns: [
            {"data": "file_name"},
            {"data": "date"},
            {
                "data": null,
                "render": function(data, type, row) {
                    return '<a class="btn btn-success btn-sm" href="pdf/' + row.file_name + '" target="_blank"><span>View <i class="fa fa-eye" style="color:skyblue"></i></span></a>';
                }
            },
        ],
        "initComplete": function(settings, json) {
            console.log("Data loaded:", json);
        },
        "error": function(xhr, error, thrown) {
            console.log("DataTables error:", thrown);
        }
    });

    $('#select').on('change', function() {
        var selectedOption = $(this).val();
        table.column(0).search(selectedOption).draw();
    });
});

$(document).ready(function() {
    var table = $('#showTable3').DataTable({
        serverSide: true,
        responsive: true,
        lengthChange: false,
        autoWidth: true,
        ajax: {
            url: "fetch.php",
            type: "post",
            data: {list3: true},
            error: function(xhr, error, thrown) {
                console.log("Ajax request failed: " + thrown);
            }
        },
        columns: [
            {"data": "file_name"},
            {"data": "date"},
            {
                "data": null,
                "render": function(data, type, row) {
                    return '<a class="btn btn-success btn-sm" href="pdf/' + row.file_name + '" target="_blank"><span>View <i class="fa fa-eye" style="color:skyblue"></i></span></a>';
                }
            },
        ],
        "initComplete": function(settings, json) {
            console.log("Data loaded:", json);
        },
        "error": function(xhr, error, thrown) {
            console.log("DataTables error:", thrown);
        }
    });

    $('#select').on('change', function() {
        var selectedOption = $(this).val();
        table.column(0).search(selectedOption).draw();
    });
});

$(document).ready(function() {
    var table = $('#showTable4').DataTable({
        serverSide: true,
        responsive: true,
        lengthChange: false,
        autoWidth: true,
        ajax: {
            url: "fetch.php",
            type: "post",
            data: {list4: true},
            error: function(xhr, error, thrown) {
                console.log("Ajax request failed: " + thrown);
            }
        },
        columns: [
            {"data": "file_name"},
            {"data": "date"},
            {
                "data": null,
                "render": function(data, type, row) {
                    return '<a class="btn btn-success btn-sm" href="pdf/' + row.file_name + '" target="_blank"><span>View <i class="fa fa-eye" style="color:skyblue"></i></span></a>';
                }
            },
        ],
        "initComplete": function(settings, json) {
            console.log("Data loaded:", json);
        },
        "error": function(xhr, error, thrown) {
            console.log("DataTables error:", thrown);
        }
    });

    $('#select').on('change', function() {
        var selectedOption = $(this).val();
        table.column(0).search(selectedOption).draw();
    });
});

$(document).ready(function() {
    var table = $('#showTable5').DataTable({
        serverSide: true,
        responsive: true,
        lengthChange: false,
        autoWidth: true,
        ajax: {
            url: "fetch.php",
            type: "post",
            data: {list5: true},
            error: function(xhr, error, thrown) {
                console.log("Ajax request failed: " + thrown);
            }
        },
        columns: [
            {"data": "file_name"},
            {"data": "date"},
            {
                "data": null,
                "render": function(data, type, row) {
                    return '<a class="btn btn-success btn-sm" href="pdf/' + row.file_name + '" target="_blank"><span>View <i class="fa fa-eye" style="color:skyblue"></i></span></a>';
                }
            },
        ],
        "initComplete": function(settings, json) {
            console.log("Data loaded:", json);
        },
        "error": function(xhr, error, thrown) {
            console.log("DataTables error:", thrown);
        }
    });

    $('#select').on('change', function() {
        var selectedOption = $(this).val();
        table.column(0).search(selectedOption).draw();
    });
});
