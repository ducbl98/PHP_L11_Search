<?php

use PhoneList\PhoneList;

include_once "vendor/autoload.php";
if($_SERVER["REQUEST_METHOD"]=="GET"){
    $phone = $_GET["input"];
    $phone_number_list = new PhoneList();
    $phone_number_list->createPhoneList($phone);
    $phone_number_list->pushPhone();
    var_dump($phone_number_list->vinaphone);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phone Classification</title>
    <style>
        textarea{
            background-color: aquamarine;
        }
    </style>
    <script language="javascript">
        function checkInput(ob) {
            let invalidChars = /[^0-9,]/gi
            if (invalidChars.test(ob.value)) {
                ob.value = ob.value.replace(invalidChars, "");
            }
        }
    </script>
</head>
<body>
<h2>Number Phone Classification</h2>
<form method="get">
    <textarea name="input" rows="5" cols="50" onkeyup="checkInput(this)"></textarea><br>
    <input type="submit" value="Classification">
</form>
<table border="1" style="border-collapse: collapse">
    <tr>
        <th>Viettel</th>
        <th>Mobifone</th>
        <th>Vinaphone</th>
    </tr>
    <td>
        <?php $phone_number_list->displayViettel();?>
    </td>
    <td>
        <?php $phone_number_list->displayMobiphone();?>
    </td>
    <td>
        <?php $phone_number_list->displayVinaphone();?>
    </td>
</table>
</body>
</html>
