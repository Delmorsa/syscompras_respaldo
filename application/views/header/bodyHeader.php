<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
		<title><?php echo basename(FCPATH)?></title>
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="<?php echo base_url()?>/assets/img/LOGO.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="<?php echo base_url()?>/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url()?>/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?php echo base_url()?>/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url()?>/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url()?>/assets/css/jquery.growl.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo base_url()?>/assets/css/fileup.css" rel="stylesheet" type="text/css" />
		<!--<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/flexmonster.css">-->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/webix.css" type="text/css" media="screen" charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/app.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/magnificPopUp.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/pivot.css" />
		<!--end::Global Stylesheets Bundle-->

        <style>
			.webix_view webix_pager{
				display: block !important;
			}
			.webix_pivot_configure_toolbar  {
				display:none !important;
			}

			.webix_cell{
				font-size: 10pt !important;
			}
			#table-responsive-cliente{
				overflow: inherit !important;
			}
			@media (max-width: 767px) {
				.table-responsive .dropdown-menu {
					position: relative !important; /* Sometimes needs !important */
				}
			}
				.background-notif{
			   background-image:url("../assets/media/misc/header-dropdown.png")
			}
			/* Chrome, Safari, Edge, Opera */
			input::-webkit-outer-spin-button,
			input::-webkit-inner-spin-button {
			-webkit-appearance: none;
			margin: 0;
			}

			/* Firefox */
			/*input[type=number] {
			-moz-appearance: textfield;
			}
			

			input[type=number]{
				
				}
				::-webkit-input-placeholder {
				   color: red !important;
				}
			}*/
    
@media (min-width: 576px)
			.modal-dialog-centered {
			    min-height: calc(100% - (1.75rem * 2));
			}
    
			.modal-dialog-centered {
			    display: -webkit-box;
			    display: -ms-flexbox;
			    display: flex;
			    -webkit-box-align: center;
			    -ms-flex-align: center;
			    align-items: center;
			    min-height: calc(90% - (.5rem * 2));
			}

			@media (min-width: 576px)
			#loading {
			    max-width: 500px;
			    margin: 1.75rem auto;
				 z-index: 1000000;
			}


			.mfp-wrap{
				z-index: 1200 !important;
			}

			.mfp-bg{
				z-index: 1200 !important;
			}
    
  </style>

	</head>
