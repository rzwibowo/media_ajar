<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MASUK</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Kube CSS -->
    <link rel="stylesheet" href="css/kube.css">
    <link rel="icon" 
      type="image/ico" 
      href="favicon.ico">
</head>
<body>
	<div class="row align-center">
		<div class="col-4">
			<div class="text-center">
				<h1>Masuk sebagai Administrator</h1>
			</div>
			<form class="form" action="loginProses.php" method="POST" name="form-login">
				<fieldset>
					<div class="form-item">
						<label for="username">Nama Pengguna</label>
						<input type="text" name="username" id="username">
						<div id="error_username" style="margin-top: 5px;"></div>
					</div>
					<div class="form-item">
						<label for="password">Kata Kunci</label>
						<input type="password" name="password" id="password">
						<div id="error_password" style="margin-top: 5px;"></div>
					</div>
					<div class="row align-center">
						<button type="submit" class="button big" id="login">Masuk</button>
					</div>
				</fieldset>
			</form>
			<a href="index.html">Kembali ke Halaman Depan</a>
		</div>
	</div>
	<div>

</div>
	</div>
	<!-- Kube JS + jQuery are used for some functionality, but are not required for the basic setup -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/kube.js"></script>
    <script type="text/javascript">
    	 $("#login").click(function(){
    $('form[name=form-login]').submit(function(){
        var username       =$("#username").val();
        var password       =$("#password").val();
       

       if(username.length==0){
           $("#username").focus();
           $("#error_username").addClass("message error");
           $("#error_username").html("<span>Username belum di isi</span>");
           return false;
        }
       
        else if(password.length==0)
        {
            $("#password").focus();
            $("#error_password").addClass("message error");
            $("#error_password").html("<span>Password belum di isi</span>");
            return false;
        }
        else
        {
            return true;
        }
        
    });
});
    	 $("button").click(function(){
    	 	$('#my-modal').on('open.modal', function()
				{
				   
				});
    	 });
    </script>
</body>
</html>