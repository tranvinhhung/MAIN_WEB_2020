<!DOCTYPE html>
<html>
<head>

	
	<title> Đăng nhập - YaMe.vn</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Import Boostrap css, js, font awesome here -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link href="./css/style.css" rel="stylesheet">
	<link href="./jquery.js" rel="stylesheet">
	<!--favicon-->
	<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">

		<div class="container-fluid">
			<a class="navbar-branch" href="index.html">
				<img src="./images/logo.png" height="65">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" 
				data-target="#navbarResponsive">
				<span class="navbar-toggler-icon "></span>
			</button>
			
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto ">
					
					<li class="nav-item">
						<a class="nav-link" href="#">BÁN CHẠY</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">SALE TẠI CỬA HÀNG</a>
					</li>
					<li class="nav-item">
					
						<div class="dropdown">
							<!-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
							  ÁO
							</button> -->
							
							<a class="nav-link" href="#" data-toggle="dropdown" > ÁO </a>
							<ul class="dropdown-menu">
								<a class="dropdown-item" href="#">Áo thun </a>
								<a class="dropdown-item" href="#">Áo khoác </a>
								<a class="dropdown-item" href="#">Áo sơ mi</a>
								
							</ul>
						
						</div>
					</li>
					<li class="nav-item">
						<div class="dropdown">
							<!-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
							  ÁO
							</button> -->
							<a class="nav-link" href="" data-toggle="dropdown" >QUẦN</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Quần jean</a>
								<a class="dropdown-item" href="#">Quần tây</a>
							</div>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">BA LÔ      </a>
					</li>
					<li>
						<div class="dropdown show">
							<a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-search"></i>
							</a>
						  
							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							 <from> <input type="text"name="search">
							</from>
							</div>
						</div>
					</li>
					<li>
						<a href="dangnhap.html" class="w3-padding w3-large w3-text-white"><i class="fa fa-user"></i></a>
					</li>
					<li>
						<a href="#" class="w3-padding w3-large w3-text-white"><i class="fa fa-shopping-bag"></i></a>
					</li>
						
					   </div>
				</ul>
			</div>
			
				
			
		</div>
	</nav>
	


<body>
    <div class="container-fluid bg">
        <div class="row justify-content-center">
            <div class="col-md-3 col-sm-6 col-xs-12 row-container">
                <form>
                    <h1> <text-align><center>Đăng nhập</center></text-align></h1>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                        <p class="emailError"></p>
                    </div>
                    <div class="form-group">
                        <label for="password" class="label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                        <p class="passwordError"></p>
                    </div>
                    
                    <button type="submit" class="btn btn-success btn-block my-3" href="index.php">Login</button>
                </form>
            </div>
        </div>
    </div>


</body>
</html>

<div class="container-fluid padding">	
	<div class="row text-center padding">
		<div class="col-12">
			<h2>FOLLOW US</h2>
		</div>
		<div class="col-12 social padding">
			<a href="https://www.facebook.com/www.YaMe.vn/"><i class="fab fa-facebook"></i></a>
			<a href="https://www.instagram.com/yame_vn/?fbclid=IwAR3dkgxQ0J4FNLJgtp4ouf2XQKaUEsfhytOV6Chf6ThiTjTQtAtFIVEYeBg"><i class="fab fa-instagram"></i></a>
			<a href="https://www.youtube.com/channel/UCi0jrGCcWZBymVWleyWcz4Q"><i class="fab fa-youtube"></i></a>
		</div>
	</div>
</div>
<footer>
    <div class="container-fluid padding">
        <div class="row text-center">
            <div class="col-md-4">
                <img src="./images/logo.png" style="height: 70px;" />
                
                <br />
                <h4>Thông tin</h4>
                <ul class="list-unstyled">
                    <li><a href="gioithieu.html">Giới thiệu về YaMe.vn</a></li>
                    
                </ul>
            </div>
            <div class="col-md-4">                
                <div class="left-aligned">
                    <div class="left-aligned">
                        <br />
                        <p style="margin-bottom: 0;">Đặt hàng và thu tiền tận nơi toàn quốc</p>
                        <h5 class="boxed-content-title">(028) 7307 1441</h5>
                    </div>
                    <br />
                    <h5>CSKH</h5>
                    <ul class="list-unstyled">
                        <li><a href="cskh.html"
						   target="bg-light">Than phiền/Chăm sóc khách hàng</a>
						   </li>
						</ul>
                </div>
                <br />
                <h4>FAQ</h4>
                <ul class="list-unstyled">
                    <li><a href="vanchuyen.html">Vận chuyển</a></li>
                    <li><a href="doitra.html">Chính sách đổi trả</a></li>
                    <li><a href="baohanh.html">Chính sách bảo hành</a></li>
                    <li><a href="vip.html">Khách hàng VIP</a></li>
                    

                </ul>
            </div>
            
        </div>
        

		<div class="row">
			<div class="col-sm-10  col-xs-12">
				<hr style="margin: 10px 0;" />
				<p style="margin-bottom: 0;">&copy; 2020 - CÔNG TY TNHH YAME VN</p>
				<p style="margin-bottom: 0; font-size: 9px;">Giấy CNĐKDN: 0310874914 – Ngày cấp: 25/11/2011 - Cơ quan cấp: Phòng Đăng Ký Kinh Doanh – Sở Kế Hoạch và Đầu Tư TP.HCM</p>
				<p style="margin-bottom: 0; font-size: 9px;">Địa chỉ đăng ký kinh doanh: 766/3B-3C Sư Vạn Hạnh (Nối dài), Phường 12, Quận 10, TP.HCM - Điện thoại: 028 3868 4857 - Email: cskh@yame.vn</p>
			</div>
			<div class="col-sm-2 col-xs-12">
				<p href="http://online.gov.vn/CustomWebsiteDisplay.aspx?DocId=1848" target="_blank">
					<img src="./images/dathongbao.png" alt="" style="width: 100%;height: 100%; max-width:200px; margin-top:15px;" />
				</p>
			</div>
</div>
</div>
</footer>

