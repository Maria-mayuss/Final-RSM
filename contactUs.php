<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Link Navigation-->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!--icon sosmed-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--form-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		function validate(){
			var nama = document.getElementById("nama");
			var huruf =  /^[A-Za-z]+$/;
			var errors = false;
			if (nama.value.trim()=="") {
				alert("Isi ki dlu bos kudikolom nama ");
				return false;
			}
			if (nama.value.match(huruf)){
				alert("Betul mi dikolom nama");
			
			if(document.getElementById("nama").val().length() ! = 6){
				errors = true;
				alert("harus minimal 6 karakter");
			}	
			else {
				errors = false;
			}
			if(errors==false){
				document.getElementById("form").submit();
			}
			
				return true;
			}

			else {
				alert("hanya bisa huruf dikolom nama")
				return false;
			}
		}
		
			
		
	</script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- Navigation (Sits on top) -->
<div class="w3-bar w3-black w3-card w3-left-align w3-large">
<a href="home.html" class="w3-bar-item w3-button">SEvenTeen</a>

<!-- Right-sided navbar links. Hide them on small screens -->
  <div class="w3-right w3-hide-small">
	<a href="Home.html" class="w3-bar-item w3-button" >Home</a>
	<a href="About.html" class="w3-bar-item w3-button">About</a>
	<a href="Order.html" class="w3-bar-item w3-button">Order</a>
	<a href="tryit.html" class="w3-bar-item w3-button">Try this</a>
	<a href="contactUs.php" class="w3-bar-item w3-button"style="background-color:lavender;">Contact Us</a>
  </div>
</div>
            <!--Send Us Message-->
            <div class="col-lg-8 info-panel jarakPanel">
                <div class="col">
                    <h3 class="text-center">~~ Contact Us ~~</h3>
                    <!--Form-->
                    <form method="POST" action="prosesInput.php" onsubmit="return validate()">
                        <!--Nama-->
                        <div class="form-group">
                            <label class="font-weight-bold">Nama :</label>
                            <input type="text" name="nama" class="form-control"	placeholder="Nama Lengkap" required>
                        </div>

                        <!--Email-->
                        <div class="form-group">
                            <label class="font-weight-bold">E-mail :</label>
                            <div class="input-group-append">
                                <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required>
                                <span class="input-group-text">@example.com</span>
                            </div>
                        </div>
						
                        <!--Tempat Tanggal Lahir-->
                        <div class="form-group">
                            <label class="font-weight-bold">Tanggal :</label>
                            <input type="date" name="ttl" class="form-control col-lg-3"/>
                        </div>
						
                        <!--Jenis Kelamin-->
                        <div class="form-group">
                            <label class="font-weight-bold">Jenis Kelamin :</label><br>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="gender" class="form-check-input" value="L" required>Laki-Laki
                                </label>
                            </div>
            
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" name="gender" class="form-check-input" value="P" required>Perempuan
                                </label>
                            </div>
                        </div>

                        <!--Pesan-->
                        <div class="form-group">
                            <label class="font-weight-bold">Pesan :</label>
                            <textarea class="form-control" name="pesan" rows="5" placeholder="Tulis Sesuatu"></textarea>
                        </div>

                        <!--Button-->
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
                </div>
            </div>
            <!--End of Send Us Message-->
        </div>
    </div>
    <!--End of 2 Baris Contact dan Send Message-->

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Follow </h4>
  <a class="w3-button w3-large w3-teal" href="https://www.facebook.com" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="https://twitter.com" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="https://www.google.com/" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="https://www.instagram.com" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="https://www.linkedin.com" title="Linkedin"><i class="fa fa-linkedin"></i></a>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">SosialMedia.AR</a></p>

<!-- Akhir Footer -->
</body>

</html>