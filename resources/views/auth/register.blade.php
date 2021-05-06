<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>UAllet Management - Criar Conta </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">

</head>

<body class="hold-transition theme-primary bg-gradient-success-dark">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-4 col-md-5 col-12">
						<div class="content-top-agile p-10">
							<h2 class="text-white">UAllet Management</h2>
							<p class="text-white-50">Crie a sua conta</p>							
						</div>
						<div class="p-30 rounded30 box-shadowed b-2 b-dashed">
						    <form method="POST" action="{{ route('register') }}">
                                @csrf
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-white"><i class="ti-user"></i></span>
										</div>
										<input type="text" name="name" id="name" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Nome" required>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-white"><i class="ti-email"></i></span>
										</div>
										<input type="email" name="email" id="email" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Email" required>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-white"><i class="ti-lock"></i></span>
										</div>
										<input type="password" name="password" id="password" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Password" required>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-white"><i class="ti-lock"></i></span>
										</div>
										<input type="password" name="password_confirmation" id="password_confirmation" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Reintroduza Password" required>
									</div>
								</div>
								  <div class="row">
									<div class="col-12">
									  <div class="checkbox text-white">
										<input type="checkbox" id="basic_checkbox_1"  required>
										<label for="basic_checkbox_1">Concordo com os <a href="#" class="text-success"><b>Termos de Uso</b></a></label>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-12 text-center">
									  <button type="submit" class="btn btn-success btn-rounded margin-top-10">CRIAR</button>
									</div>
									<!-- /.col -->
								  </div>
							</form>													

							<div class="text-center text-white">
							  <p class="mt-20"> Criar com </p>
							  <p class="gap-items-2 mb-20">
								  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-facebook"></i></a>
								  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-twitter"></i></a>
								  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-google-plus"></i></a>
								  <a class="btn btn-social-icon btn-round btn-outline btn-white" href="#"><i class="fa fa-instagram"></i></a>
								</p>	
							</div>

							<div class="text-center">
								<p class="mt-15 mb-0 text-white">Já têm conta?<a href="{{ route('login') }}" class="text-success ml-5"> Entrar</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{ asset('backend/js/vendors.min.js') }}"></script>
    <script src="{{ asset('../assets/icons/feather-icons/feather.min.js') }}"></script>	
	
	
</body>
</html>

