<?php
    
 include 'core.inc.php';

  if(!loggedin())
     {
       header('Location: index.php');
     }

?>
<!DOCTYPE html>
<html>
<head>
<script>
    function validateForm() {
        var x = document.forms["myForm"]["mday"].value;
        var d = new Date(x);
        var w = d.getDay();
        if (w == 0) {
            alert("No Meeting's on Sunday");
            return false;
        }

    }
</script>
</head>

<body>
<div>
<span></span>
<link href="logout.css" rel="stylesheet" type="text/css"></link>
<a href="logout.php">Log out</a></div>	
</div>
<form name="myForm" action="demo_form.asp" onsubmit="return validateForm()" method="post">
First name: <input type="text" name="fname">
        <label><span>  Date:</span>  <input type="date" class="datetime" name="mday" min =<?php echo date("Y-m-d");?> required></label>
<input type="submit" value="Submit">
</form>
</body>

</html>
</body>
</html>