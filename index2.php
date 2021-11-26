<DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Agent 69's Triptastic Editor!</title>
<script>
    function autoSubmit(){
        var formObject = document.forms['radioOptions']
        formObject.submit();
    }
    </script>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Welcome to the Western Bus Trip Editor</h1>
<form name = "radioOptions" method="POST">
<tr> <td style="text-align:center"><input type="radio" id = "orderasc" name ="ordering"  value="orderasc" >
<label for="orderasc"> Ascending Order </label>  </td>
<td style="text-align:center">"<input type="radio" id = "tripnameOcountry" name ="tripnameOcountry"  value="country" >
<label for="orderasc"> Order by: Country names </label>  </td></tr>

<br><tr> <td style="text-align:center"><input type="radio" id = "orderdesc" name="ordering"  value="orderdesc">
<label for="orderdesc"> Descending Order </label><br></td>
<td style="text-align:center">"<input type="radio" id = "tripnameOcountry" name ="tripnameOcountry"  value="tripname" >
<label for="orderasc"> Order by: Trip names </label>  </td></tr>
<input type="submit" value="submit"/>
</form>
<?php
include 'getdata.php'

?>

</body>
</html>

