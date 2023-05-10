<!-- empty file -->
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f5f5f5;
  color: #333;
}

.container {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 5px;
}

/* styles for the form */
.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

.form-control {
  display: block;
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-sizing: border-box;
}

.btn {
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  color: #fff;
  background-color: #007bff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.btn:hover {
  background-color: #0069d9;
}

</style>

<html>
   <head>
      <title>BNU Student Web Application</title>
      <link rel="stylesheet" href="styles.css">
   </head>

   <body>
      <?php echo $message; ?>
      <div class="container mt-5">
         <form name="frmLogin" action="authenticate.php" method="post">
            <div class="form-group">
               <label for="txtid">Enter Your Student ID:</label>
               <input name="txtid" type="text" class="form-control" id="txtid" />
            </div>
            <div class="form-group">
               <label for="txtpwd">Enter Your Password:</label>
               <input name="txtpwd" type="password" class="form-control" id="txtpwd" />
            </div>
            <button type="submit" class="btn btn-primary" name="btnlogin">Login</button>
         </form>
      </div>
   </body>
</html>
