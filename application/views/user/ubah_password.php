<?php
$data = $this->session->userdata("nama");
if (!isset($data))
{
    redirect('login');
}
?> 
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Input Anggota</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?=base_url() ?>assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?=base_url() ?>assets/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?=base_url() ?>assets/css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="<?=base_url() ?>assets/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?=base_url() ?>assets/js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="<?=base_url() ?>assets/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->
				<div class="header-main">

						<div class="profile_details w3l">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
												<div class="user-name">
													<p><?php echo $this->session->userdata("nama"); ?></p>
													<span><?php echo $this->session->userdata("level"); ?></span>
												</div>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
												<div class="clearfix"></div>
										</a>
										<ul class="dropdown-menu drp-mnu">
										<?php 
										$password = $this->session->userdata("password");
										$id_user = $this->session->userdata("id_user");
										?>
											<li> <a href=""><i class="fa fa-cog"></i> Ubah Password</a> </li>
											<li> <a href="<?php echo base_url('login/logout'); ?>"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							
				     <div class="clearfix"> </div>	
				</div>

		<!--grid-->
 	<div class="grid-form">
 		<div class="grid-form1">
 		<h2 id="forms-example" class=""><a class="fa fa-group"> Ubah Password</a></h2>
 		<?php foreach ($ambil as $data) {
 		
 		?>
				<form action="<?php echo base_url().'user/update_password'; ?>" method="post">
				  <div class="form-group">
				  <div class="row mb40">
					    <input type="hidden" class="form-control" name="id_user" value="<?php echo $data->id_user; ?>">
					    <input type="hidden" class="form-control" name="password" value="<?php echo $data->password; ?>">
					
					<div class="col-md-7">
						<label for="exampleInputName2"><b>Password Lama</label>
						<input id="password" type="password" class="form-control" name="password_lama">
						<h6 style="float:left;color:blue; margin-left: 10px">&nbsp;Show Password<a id="showme" style="float:left;background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;"><i class="fa fa-eye"></i></a></h6>
					</div>
					<div class="col-md-7">
						<label for="exampleInputName2"><b>Password Baru</label>
					    <input id="password" type="password" class="form-control" name="password_baru">
                                    <h6 style="float:left;color:blue; margin-left: 10px">&nbsp;Show Password<a id="showme" style="float:left;background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;"><i class="fa fa-eye"></i></a></h6>
					</div>
					<div class="col-md-7">
						<label for="exampleInputName2"><b>Konfirmasi Password</label>
					    <input id="password" type="password" class="form-control" name="konfirm_password">
					    <h6 style="float:left;color:blue; margin-left: 10px">&nbsp;Show Password<a id="showme" style="float:left;background-color: Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;outline:none;"><i class="fa fa-eye"></i></a></h6>
					</div>
					<div class="col-md-6">
						<button style="margin-top: 25px;" type="submit" class="btn btn-success">Submit</button>
						<button style="margin-top: 25px;" type="reset" class="btn btn-default">Reset</button>
					</div>
				  </div>


				  
				</form>
				<?php } ?>
	</div>

<!---->
 
  </div>

 	<!--//grid-->

<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2017 Little Dolphin . Sistem Informasi Koperasi | Project by  <a href="http://w3layouts.com/" target="_blank">Rizal Ramli</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
									<li><a href="<?php echo base_url('pinjaman') ?>"><i class="fa fa-pencil" aria-hidden="true"></i>  <span>Pinjaman</span><div class="clearfix"></div></a></li>
									<li id="menu-academico" ><a href="#"><i class="fa fa-money" aria-hidden="true"></i><span> Simpanan</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="<?php echo base_url('simpanan_pokok') ?>"">Simpanan Pokok</a></li>
											<li id="menu-academico-avaliacoes" ><a href="<?php echo base_url('simpanan_wajib') ?>"">Simpanan Wajib</a></li>
											<li id="menu-academico-avaliacoes" ><a href="<?php echo base_url('simpanan_sukarela') ?>"">Simpanan Sukarela</a></li>
										  </ul>
										</li>
									<li><a href="<?php echo base_url('anggota') ?>""><i class="fa fa-group" aria-hidden="true"></i>  <span>Anggota</span><div class="clearfix"></div></a></li>
									<?php if ($this->session->userdata("level")=='admin') {
										?>
									<li><a href="<?php echo base_url('kategori_pinjaman') ?>""><i class="fa fa-sitemap" aria-hidden="true"></i>  <span>Kategori Pinjaman</span><div class="clearfix"></div></a></li>
									<li><a href="<?php echo base_url('kategori_simpanan') ?>""><i class="fa fa-sitemap" aria-hidden="true"></i>  <span>Kategori Simpanan</span><div class="clearfix"></div></a></li>
									<?php } ?>
									<li><a href="<?php echo base_url('user') ?>""><i class="fa fa-user" aria-hidden="true"></i>  <span>Petugas</span><div class="clearfix"></div></a></li>
									<li><a href="<?php echo base_url('rekap') ?>""><i class="fa fa-print" aria-hidden="true"></i>  <span>Rekap</span><div class="clearfix"></div></a></li>
									<li><a href="<?php echo base_url('chart') ?>""><i class="fa fa-bar-chart" aria-hidden="true"></i>  <span>Chart</span><div class="clearfix"></div></a></li>

							       
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="<?=base_url() ?>assets/js/jquery.nicescroll.js"></script>
<script src="<?=base_url() ?>assets/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="<?=base_url() ?>assets/js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
</script>
<script type="text/javascript">
        $('#showme').on('mouseenter',function(){
    
    $('#password').attr('type','text');
  
});

$('#showme').on('mouseleave',function(){
    
    $('#password').attr('type','password');
  
});
    </script>
</body>
</html>