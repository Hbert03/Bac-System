<?php
include('admin/conn.php');
if (isset($_POST['list'])) {
    function getDataTable($draw, $start, $length, $search)
    {
        global $conn;
        $sortableColumns = array('bac_list', 'date_upload', 'file_name');

        $orderBy = 'files_id';
        $orderDir = 'ASC';

        if (isset($_POST['order'][0]['column']) && isset($_POST['order'][0]['dir'])) {
            $columnIdx = intval($_POST['order'][0]['column']);
            $orderDir = $_POST['order'][0]['dir'];

            if (isset($sortableColumns[$columnIdx])) {
                $orderBy = $sortableColumns[$columnIdx];
            }
        }
        $query = "SELECT DATE_FORMAT(e.date_upload, '%m-%d-%Y %H:%i:%s') as date, e.file_name, c.bac_list 
        FROM tbl_bac_upload e 
        LEFT JOIN tbl_bac c ON e.files_id = c.id
        WHERE files_id=1";
        if (!empty($search)) {
            $query .= " AND (files_id LIKE '%" . $search . "%' OR file_name LIKE '%" . $search . "%' OR date_upload LIKE '%" . $search . "%')";
        }
        $query .= " ORDER BY $orderBy $orderDir LIMIT $start, $length";
    // Execute the query
        $result = $conn->query($query);
    // Fetch data into array
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        // Count total records without limit for filtering
        $totalQuery = "SELECT COUNT(*) as total FROM tbl_bac_upload WHERE files_id=1";
        if (!empty($search)) {
            $totalQuery .= " AND (files_id LIKE '%" . $search . "%' OR file_name LIKE '%" . $search . "%' OR date_upload LIKE '%" . $search . "%')";
        }
        $totalResult = $conn->query($totalQuery);
        $totalRow = $totalResult->fetch_assoc();
        $totalRecords = $totalRow['total'];
        // Return data as JSON
        $output = array(
            "draw" => intval($draw),
            "recordsTotal" => intval($totalRecords),
            "recordsFiltered" => intval($totalRecords),
            "data" => $data
        );
        return json_encode($output);
    }
    // Usage example
    $draw = $_POST["draw"];
    $start = $_POST["start"];
    $length = $_POST["length"];
    $search = $_POST["search"]["value"];
    // Call the function to get DataTable data and echo it
    echo getDataTable($draw, $start, $length, $search);
    exit();
}
if (isset($_POST['list1'])) {
    function getDataTable($draw, $start, $length, $search)
    {
        global $conn;
        $sortableColumns = array('bac_list', 'date_upload', 'file_name');

        $orderBy = 'files_id';
        $orderDir = 'ASC';

        if (isset($_POST['order'][0]['column']) && isset($_POST['order'][0]['dir'])) {
            $columnIdx = intval($_POST['order'][0]['column']);
            $orderDir = $_POST['order'][0]['dir'];

            if (isset($sortableColumns[$columnIdx])) {
                $orderBy = $sortableColumns[$columnIdx];
            }
        }
        $query = "SELECT DATE_FORMAT(e.date_upload, '%m-%d-%Y %H:%i:%s') as date, e.file_name, c.bac_list 
        FROM tbl_bac_upload e 
        LEFT JOIN tbl_bac c ON e.files_id = c.id
        WHERE files_id=2";
        if (!empty($search)) {
            $query .= " AND (files_id LIKE '%" . $search . "%' OR file_name LIKE '%" . $search . "%' OR date_upload LIKE '%" . $search . "%')";
        }
        $query .= " ORDER BY $orderBy $orderDir LIMIT $start, $length";
    // Execute the query
        $result = $conn->query($query);
    // Fetch data into array
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        // Count total records without limit for filtering
        $totalQuery = "SELECT COUNT(*) as total FROM tbl_bac_upload WHERE files_id=2";
        if (!empty($search)) {
            $totalQuery .= " AND (files_id LIKE '%" . $search . "%' OR file_name LIKE '%" . $search . "%' OR date_upload LIKE '%" . $search . "%')";
        }
        $totalResult = $conn->query($totalQuery);
        $totalRow = $totalResult->fetch_assoc();
        $totalRecords = $totalRow['total'];
        // Return data as JSON
        $output = array(
            "draw" => intval($draw),
            "recordsTotal" => intval($totalRecords),
            "recordsFiltered" => intval($totalRecords),
            "data" => $data
        );
        return json_encode($output);
    }
    // Usage example
    $draw = $_POST["draw"];
    $start = $_POST["start"];
    $length = $_POST["length"];
    $search = $_POST["search"]["value"];
    // Call the function to get DataTable data and echo it
    echo getDataTable($draw, $start, $length, $search);
    exit();
}
if (isset($_POST['list2'])) {
    function getDataTable($draw, $start, $length, $search)
    {
        global $conn;
        $sortableColumns = array('bac_list', 'date_upload', 'file_name');

        $orderBy = 'files_id';
        $orderDir = 'ASC';

        if (isset($_POST['order'][0]['column']) && isset($_POST['order'][0]['dir'])) {
            $columnIdx = intval($_POST['order'][0]['column']);
            $orderDir = $_POST['order'][0]['dir'];

            if (isset($sortableColumns[$columnIdx])) {
                $orderBy = $sortableColumns[$columnIdx];
            }
        }
        $query = "SELECT DATE_FORMAT(e.date_upload, '%m-%d-%Y %H:%i:%s') as date, e.file_name, c.bac_list 
        FROM tbl_bac_upload e 
        LEFT JOIN tbl_bac c ON e.files_id = c.id
        WHERE files_id=3";
        if (!empty($search)) {
            $query .= " AND (files_id LIKE '%" . $search . "%' OR file_name LIKE '%" . $search . "%' OR date_upload LIKE '%" . $search . "%')";
        }
        $query .= " ORDER BY $orderBy $orderDir LIMIT $start, $length";
    // Execute the query
        $result = $conn->query($query);
    // Fetch data into array
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        // Count total records without limit for filtering
        $totalQuery = "SELECT COUNT(*) as total FROM tbl_bac_upload WHERE files_id=3";
        if (!empty($search)) {
            $totalQuery .= " AND (files_id LIKE '%" . $search . "%' OR file_name LIKE '%" . $search . "%' OR date_upload LIKE '%" . $search . "%')";
        }
        $totalResult = $conn->query($totalQuery);
        $totalRow = $totalResult->fetch_assoc();
        $totalRecords = $totalRow['total'];
        // Return data as JSON
        $output = array(
            "draw" => intval($draw),
            "recordsTotal" => intval($totalRecords),
            "recordsFiltered" => intval($totalRecords),
            "data" => $data
        );
        return json_encode($output);
    }
    // Usage example
    $draw = $_POST["draw"];
    $start = $_POST["start"];
    $length = $_POST["length"];
    $search = $_POST["search"]["value"];
    // Call the function to get DataTable data and echo it
    echo getDataTable($draw, $start, $length, $search);
    exit();
}
if (isset($_POST['list3'])) {
    function getDataTable($draw, $start, $length, $search)
    {
        global $conn;
        $sortableColumns = array('bac_list', 'date_upload', 'file_name');

        $orderBy = 'files_id';
        $orderDir = 'ASC';

        if (isset($_POST['order'][0]['column']) && isset($_POST['order'][0]['dir'])) {
            $columnIdx = intval($_POST['order'][0]['column']);
            $orderDir = $_POST['order'][0]['dir'];

            if (isset($sortableColumns[$columnIdx])) {
                $orderBy = $sortableColumns[$columnIdx];
            }
        }
        $query = "SELECT DATE_FORMAT(e.date_upload, '%m-%d-%Y %H:%i:%s') as date, e.file_name, c.bac_list 
        FROM tbl_bac_upload e 
        LEFT JOIN tbl_bac c ON e.files_id = c.id
        WHERE files_id=4";
        if (!empty($search)) {
            $query .= " AND (files_id LIKE '%" . $search . "%' OR file_name LIKE '%" . $search . "%' OR date_upload LIKE '%" . $search . "%')";
        }
        $query .= " ORDER BY $orderBy $orderDir LIMIT $start, $length";
    // Execute the query
        $result = $conn->query($query);
    // Fetch data into array
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        // Count total records without limit for filtering
        $totalQuery = "SELECT COUNT(*) as total FROM tbl_bac_upload WHERE files_id=4";
        if (!empty($search)) {
            $totalQuery .= " AND (files_id LIKE '%" . $search . "%' OR file_name LIKE '%" . $search . "%' OR date_upload LIKE '%" . $search . "%')";
        }
        $totalResult = $conn->query($totalQuery);
        $totalRow = $totalResult->fetch_assoc();
        $totalRecords = $totalRow['total'];
        // Return data as JSON
        $output = array(
            "draw" => intval($draw),
            "recordsTotal" => intval($totalRecords),
            "recordsFiltered" => intval($totalRecords),
            "data" => $data
        );
        return json_encode($output);
    }
    // Usage example
    $draw = $_POST["draw"];
    $start = $_POST["start"];
    $length = $_POST["length"];
    $search = $_POST["search"]["value"];
    // Call the function to get DataTable data and echo it
    echo getDataTable($draw, $start, $length, $search);
    exit();
}
if (isset($_POST['list4'])) {
    function getDataTable($draw, $start, $length, $search)
    {
        global $conn;
        $sortableColumns = array('bac_list', 'date_upload', 'file_name');

        $orderBy = 'files_id';
        $orderDir = 'ASC';

        if (isset($_POST['order'][0]['column']) && isset($_POST['order'][0]['dir'])) {
            $columnIdx = intval($_POST['order'][0]['column']);
            $orderDir = $_POST['order'][0]['dir'];

            if (isset($sortableColumns[$columnIdx])) {
                $orderBy = $sortableColumns[$columnIdx];
            }
        }
        $query = "SELECT DATE_FORMAT(e.date_upload, '%m-%d-%Y %H:%i:%s') as date, e.file_name, c.bac_list 
        FROM tbl_bac_upload e 
        LEFT JOIN tbl_bac c ON e.files_id = c.id
        WHERE files_id=5";
        if (!empty($search)) {
            $query .= " AND (files_id LIKE '%" . $search . "%' OR file_name LIKE '%" . $search . "%' OR date_upload LIKE '%" . $search . "%')";
        }
        $query .= " ORDER BY $orderBy $orderDir LIMIT $start, $length";
    // Execute the query
        $result = $conn->query($query);
    // Fetch data into array
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        // Count total records without limit for filtering
        $totalQuery = "SELECT COUNT(*) as total FROM tbl_bac_upload WHERE files_id=5";
        if (!empty($search)) {
            $totalQuery .= " AND (files_id LIKE '%" . $search . "%' OR file_name LIKE '%" . $search . "%' OR date_upload LIKE '%" . $search . "%')";
        }
        $totalResult = $conn->query($totalQuery);
        $totalRow = $totalResult->fetch_assoc();
        $totalRecords = $totalRow['total'];
        // Return data as JSON
        $output = array(
            "draw" => intval($draw),
            "recordsTotal" => intval($totalRecords),
            "recordsFiltered" => intval($totalRecords),
            "data" => $data
        );
        return json_encode($output);
    }
    // Usage example
    $draw = $_POST["draw"];
    $start = $_POST["start"];
    $length = $_POST["length"];
    $search = $_POST["search"]["value"];
    // Call the function to get DataTable data and echo it
    echo getDataTable($draw, $start, $length, $search);
    exit();
}
if (isset($_POST['list5'])) {
    function getDataTable($draw, $start, $length, $search)
    {
        global $conn;
        $sortableColumns = array('bac_list', 'date_upload', 'file_name');

        $orderBy = 'files_id';
        $orderDir = 'ASC';

        if (isset($_POST['order'][0]['column']) && isset($_POST['order'][0]['dir'])) {
            $columnIdx = intval($_POST['order'][0]['column']);
            $orderDir = $_POST['order'][0]['dir'];

            if (isset($sortableColumns[$columnIdx])) {
                $orderBy = $sortableColumns[$columnIdx];
            }
        }
        $query = "SELECT DATE_FORMAT(e.date_upload, '%m-%d-%Y %H:%i:%s') as date, e.file_name, c.bac_list 
        FROM tbl_bac_upload e 
        LEFT JOIN tbl_bac c ON e.files_id = c.id
        WHERE files_id=6";
        if (!empty($search)) {
            $query .= " AND (files_id LIKE '%" . $search . "%' OR file_name LIKE '%" . $search . "%' OR date_upload LIKE '%" . $search . "%')";
        }
        $query .= " ORDER BY $orderBy $orderDir LIMIT $start, $length";
    // Execute the query
        $result = $conn->query($query);
    // Fetch data into array
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        // Count total records without limit for filtering
        $totalQuery = "SELECT COUNT(*) as total FROM tbl_bac_upload WHERE files_id=6";
        if (!empty($search)) {
            $totalQuery .= " AND (files_id LIKE '%" . $search . "%' OR file_name LIKE '%" . $search . "%' OR date_upload LIKE '%" . $search . "%')";
        }
        $totalResult = $conn->query($totalQuery);
        $totalRow = $totalResult->fetch_assoc();
        $totalRecords = $totalRow['total'];
        // Return data as JSON
        $output = array(
            "draw" => intval($draw),
            "recordsTotal" => intval($totalRecords),
            "recordsFiltered" => intval($totalRecords),
            "data" => $data
        );
        return json_encode($output);
    }
    // Usage example
    $draw = $_POST["draw"];
    $start = $_POST["start"];
    $length = $_POST["length"];
    $search = $_POST["search"]["value"];
    // Call the function to get DataTable data and echo it
    echo getDataTable($draw, $start, $length, $search);
    exit();
}
?>
