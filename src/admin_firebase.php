<?php
session_start();
$_SESSION['arrData'] = array();
if(!isset($_SESSION['selComplete'])) {
    $_SESSION['selComplete'] = "no";
}

if (isset($_POST['fireObject'])) $php_var = $_POST['fireObject'];
else $php_var = "<br />js_var is not set!";

function html_table($data = array(), $status)
{
    if ($status == "yes") {


        $rows = array();
        foreach ($data as $row) {

            $cells = array();
            foreach ($row as $cell) {
                $cells[] = "<td>{$cell}</td>";
            }
            $rows[] = "<tr>" . implode('', $cells) . "</tr>";

        }
        $html_table = '<table id="customers" border="1" cellspacing="0" cellpadding="2"><tr>
                        <th>Date of Request</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email Address</th>
                        <th>Phone Number</th>
                        <th>Plan or Service</th>
                        <th>Comments</th>
                        <th>Archived</th>
                       </tr>';
        return $html_table . implode('', $rows) . "</table>";
    } elseif ($status == "no") {

        $i = 0;
        $rows = array();
        foreach ($data as $row) {
            $cells = array();
            foreach ($row as $cell) {
                $cells[] = "<td>{$cell}</td>";
            }
            $rows[] = "<tr>" . implode('', $cells) . "<td class=\"ui-helper-center\"><input type=\"checkbox\" name=\"customer[]\" value=" . $data[$i]['origID'] . "></td>" . "</tr>";
            $i++;
        }
        $html_table = '<table id="customers2" border="1" cellspacing="0" cellpadding="2"><tr>
                        <th>Date of Request</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email Address</th>
                        <th>Phone Number</th>
                        <th>Plan or Service</th>
                        <th>Comments</th>
                        <th>Archived</th>
                        <th>Mark</th>
                       </tr>';
        return $html_table . implode('', $rows) . "</table>";
    }
}

//$myFile = "data.json";
$arr_data = array(); // create empty array
$new_Array=array();

//Get data from existing json file
$jsondata = $php_var;

if ($jsondata <> null) {
    $arr_data = json_decode($jsondata, true);
}

$properties = array('dateOfReq', 'txtFirstName', 'txtLastName', 'txtEmail','txtPhone', 'lstPlans', 'txtComments', 'Archived');
for ($i=0; $i<count($arr_data);$i++)
{
    /**
    foreach ($properties as $prop) {
        //print_r($i);
        echo "<br>".$arr_data[$i][$prop];
        $formdata = array(
            'dateOfReq' => date("M d, Y"),
            'txtFirstName' => $_POST['txtFirstName'],
            'txtLastName' => $_POST['txtLastName'],
            'txtEmail' => $_POST['txtEmail'],
            'txtPhone' => $_POST['txtPhone'],
            'lstPlans' => $_POST['lstPlans'],
            'txtComments' => $_POST['txtComments'],
            'Archived' => "No"
        );

    }
     * ***/
    $formdata = array(
        'dateOfReq' => $arr_data[$i]['dateOfReq'],
        'txtFirstName' =>$arr_data[$i]['txtFirstName'],
        'txtLastName' => $arr_data[$i]['txtLastName'],
        'txtEmail' => $arr_data[$i]['txtEmail'],
        'txtPhone' => $arr_data[$i]['txtPhone'],
        'lstPlans' => $arr_data[$i]['lstPlans'],
        'txtComments' => $arr_data[$i]['txtComments'],
        'Archived' => $arr_data[$i]['Archived']
    );

    array_push($new_Array, $formdata);

}
//echo $arr_data[0]['dateOfReq'];
//print_r($new_Array);
//echo "<br><br>";
//print_r($arr_data);
$_SESSION['arrData'] = $new_Array;

$arr_data = $new_Array;


if ($_SESSION['selComplete'] == "no") {

    $i = 0;


    foreach ($arr_data as $value) {
        $arr_data[$i]['origID'] = $i;
        $i++;
    }


    for ($i = 0; $i < sizeof($arr_data); $i++) {
        if ($arr_data[$i]['Archived'] == "Yes") {
            array_splice($arr_data, $i, 1);
            $i--;
        }
    }



    echo html_table($arr_data, $_SESSION['selComplete']);
    echo "<input type=\"submit\" value=\"Click to Archive\">";

} elseif ($_SESSION['selComplete'] == "yes") {
    echo html_table($arr_data, $_SESSION['selComplete']);
}

?>

<?php


?>


