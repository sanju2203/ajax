<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP form ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
<h>Student Registration Form 
    <form action="submit.php" method="post">
		<div style="margin: 10px;">  Name: <input type ="text" name="fname" value=""/></div>
        <div style="margin: 10px;">  Mobile: <input type="text" name="mobile" value=""/></div>
		<div style="margin: 10px;">  Email: <input type="text" name="email" value=""/></div>
		<div style="margin: 10px;">  Male : <input type="radio" name="gender"  value="male"/></div>
        <div style="margin: 10px;">  Female:<input type="radio" name="gender" value="female"/></div>
		<div style="margin: 10px;">  Other: <input type="radio" name="gender" value="other"/></div>
		<div><input type="submit"  value="submit"/></div>
        </form>

    
</body>
<script type="text/javascript">
    function submitform()
    {
        var name= $('input[name=name]').val();
        var phone=$('input[name=phone]').val();
        var email=$('input[name=email]').val();
        
        var formdata={name:name, phone:phone,email:email};
        $.ajax({url:"http: //localhost/ajaxform/api/submit.php",type: 'POST', data: formdata, success:function(response)
        {

        }
        });
  
        
        
     }

</script>
</html>