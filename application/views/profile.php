<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
  

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo  workshop" style = "background-image: url('assets/theme/assets/global/img/background.png');background-size:cover;">
        <!-- BEGIN HEADER -->
    <?php $this->load->view('template/header'); ?>
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <?php $this->load->view('template/sidebar'); ?>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEAD-->
                    <div class="page-head">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Profile
                                <small>user account page</small>
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        <!-- BEGIN PAGE TOOLBAR -->
                        <div class="page-toolbar">
                            <!-- BEGIN THEME PANEL -->
                            <div class="btn-group btn-theme-panel">
                                <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-settings"></i>
                                </a>
                                <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <h3>HEADER</h3>
                                            <ul class="theme-colors">
                                                <li class="theme-color theme-color-default active" data-theme="default">
                                                    <span class="theme-color-view"></span>
                                                    <span class="theme-color-name">Dark Header</span>
                                                </li>
                                                <li class="theme-color theme-color-light " data-theme="light">
                                                    <span class="theme-color-view"></span>
                                                    <span class="theme-color-name">Light Header</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-8 col-sm-8 col-xs-12 seperator">
                                            <h3>LAYOUT</h3>
                                            <ul class="theme-settings">
                                                <li> Theme Style
                                                    <select class="layout-style-option form-control input-small input-sm">
                                                        <option value="square">Square corners</option>
                                                        <option value="rounded" selected="selected">Rounded corners</option>
                                                    </select>
                                                </li>
                                                <li> Layout
                                                    <select class="layout-option form-control input-small input-sm">
                                                        <option value="fluid" selected="selected">Fluid</option>
                                                        <option value="boxed">Boxed</option>
                                                    </select>
                                                </li>
                                                <li> Header
                                                    <select class="page-header-option form-control input-small input-sm">
                                                        <option value="fixed" selected="selected">Fixed</option>
                                                        <option value="default">Default</option>
                                                    </select>
                                                </li>
                                                <li> Top Dropdowns
                                                    <select class="page-header-top-dropdown-style-option form-control input-small input-sm">
                                                        <option value="light">Light</option>
                                                        <option value="dark" selected="selected">Dark</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Mode
                                                    <select class="sidebar-option form-control input-small input-sm">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="default" selected="selected">Default</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Menu
                                                    <select class="sidebar-menu-option form-control input-small input-sm">
                                                        <option value="accordion" selected="selected">Accordion</option>
                                                        <option value="hover">Hover</option>
                                                    </select>
                                                </li>
                                                <li> Sidebar Position
                                                    <select class="sidebar-pos-option form-control input-small input-sm">
                                                        <option value="left" selected="selected">Left</option>
                                                        <option value="right">Right</option>
                                                    </select>
                                                </li>
                                                <li> Footer
                                                    <select class="page-footer-option form-control input-small input-sm">
                                                        <option value="fixed">Fixed</option>
                                                        <option value="default" selected="selected">Default</option>
                                                    </select>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END THEME PANEL -->
                        </div>
                        <!-- END PAGE TOOLBAR -->
                    </div>
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BREADCRUMB -->
                    <ul class="page-breadcrumb breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                            <i class="fa fa-circle"></i>
                        </li>
                        <li>
                            <span class="active">User</span>
                        </li>
                    </ul>
                    <!-- END PAGE BREADCRUMB -->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="portlet light profile-sidebar-portlet bordered">
                                    <!-- SIDEBAR USERPIC -->
                                    <div class="profile-userpic" >
                                    <?php if ($marketings[0]["foto"] == '' or $marketings[0]["foto"] == null){?>
                                        <img style = "height :auto !important" src="<?php echo "assets/"; ?>theme/assets/pages/media/profile/profile.png" class="img-responsive" alt=""> </div>
                                    <?php } else{?>
                                        <img style = "height :auto !important" src="<?php echo str_replace("C:/xampp/htdocs/company",base_url(),$marketings[0]["foto"])?>" class="img-responsive" alt=""> </div>
                                    <?php } ?>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"> <?php echo $marketings[0]["nama"]?> </div>
                                        <div class="profile-usertitle-job"> <?php echo $marketings[0]["description"] ?></div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <!-- SIDEBAR BUTTONS -->
                                    <div class="profile-userbuttons">
                                        <button type="button" class="btn btn-circle green btn-sm" onclick="javascript:change_foto(<?php echo $marketings[0]['id']?>)">Ubah Foto</button>
                                    </div>
                                    <!-- END SIDEBAR BUTTONS -->
                                    <!-- SIDEBAR MENU -->
                                    <div class="profile-usermenu">
                                    </div>
                                    <!-- END MENU -->
                                </div>
                                <!-- END PORTLET MAIN -->
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light bordered">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                    <!-- PERSONAL INFO TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                        <form role="form" action="Profile/update" method="post">
                                                            <input type="hidden" id="id" name="id" value="<?php echo $marketings[0]["id"]?>">
                                                            <div class="form-group">
                                                                <label class="control-label">Nama</label>
                                                                <input type="text" value="<?php echo $marketings[0]["nama"]?>" class="form-control" name="nama"/> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">No KTP</label>
                                                                <input type="text" value="<?php echo $marketings[0]["ktp"]?>" class="form-control" name="ktp" /> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Alamat</label>
                                                                <input type="text" value="<?php echo $marketings[0]["alamat"]?>" class="form-control" name="alamat"/> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Hp</label>
                                                                <input type="text" value="<?php echo $marketings[0]["hp"]?>"  class="form-control" name="hp"/> </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Email</label>
                                                                <input type="text" value="<?php echo $marketings[0]["email"]?>"  class="form-control" name="email"/> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Facebook</label>
                                                                <input type="text" value="<?php echo $marketings[0]["fb"]?>"  class="form-control" name="fb"/> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Instagram</label>
                                                                <input type="text" value="<?php echo $marketings[0]["ig"]?>"  class="form-control" name="ig"/> </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Type Marketing</label>
                                                                <input type="text" value="<?php echo $marketings[0]["description"]?>"  class="form-control" name="description" disabled="true"/> 
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label">Reference Code</label>
                                                                <input type="text" value="<?php echo $marketings[0]["referalcode"]?>" style="font-weight:800;" class="form-control" name="referalcode" disabled="true" /> </div>
                                                           <div class="form-group">
                                                                <label class="control-label">Referal Code</label>
                                                                <input type="text" value="<?php echo $marketings[0]["code"]?>" style="font-weight:800;" class="form-control" disabled /> </div>
                                                            </div>
                                                            
                                                            <div class="margiv-top-10">
                                                            <button type="submit" class="btn green"  id="save_changes" name="save_changes">
                                <i class="fa fa-edit">Save</i>
                                                               
							<button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal"><i class="fa fa-close">Close</i></button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    <!-- END PERSONAL INFO TAB -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <div id="change_foto" class="modal fade" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Ubah Foto Profile</h4>
						</div>
						<div class="modal-body">
                            <div class="input-group">
                                <form action="#" class="form-horizontal form-row-seperated" id="confirm_form">
                                <!-- <label class="col-sm-12 control-label" id="label_konfirm" name="label_konfirm"></label> -->
                                <input type="hidden" id="id_marketing" name="id_marketing" value="">
								<div class="form-group">
                                    <label class="col-sm-4 control-label">Upload Foto</label>
                                    <div class="col-sm-6">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="input-group">
                                            <div class="form-control uneditable-input input-fixed" data-trigger="fileinput">
                                                <i class="fa fa-file fileinput-exists"></i>&nbsp;
                                                <span class="fileinput-filename"> </span>
                                            </div>
                                            <span class="input-group-addon btn default btn-file">
                                                <span class="fileinput-new"> Select file </span>
                                                <span class="fileinput-exists"> Change </span>
                                                <input type="file" name="foto" id="foto"> </span>
                                            <a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Cancel</button>
                                    <!-- <button type="button" class="btn green" onclick="javascript:daftar_workshop()">
                                        <i class="fa fa-check">OK</i> -->
                                        <input class="btn green" type="submit" value="Save Change">
                                </div>
                                </form> 
                            </div>
                        </div>
						
				</div>
			</div>	
            <!-- END CONTENT -->
        </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>
            <!-- END QUICK SIDEBAR -->
        </div>
        <!-- END CONTAINER -->
        <div class="quick-nav-overlay"></div>
       
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })

            function change_foto(id){
                document.getElementById("id_marketing").value = id;
                $('#change_foto').modal('show'); 
            }

            $('#confirm_form').submit(function(e){
                    e.preventDefault();
                    $.ajax({
                    url: "Profile/change_foto",
                    type: "POST",
                    data:  new FormData(this),
                    contentType: false,
                            cache: false,
                    processData:false,
                    beforeSend : function()
                    {
                        //$("#preview").fadeOut();
                        $("#err").fadeOut();
                    },
                    success: function(data)
                        {
                            alert(data);
                            $('#edit_modal').modal('hide');
                            location.reload();   
                        
                        },
                        error: function(e) 
                        {
                        console.log($("#err").html(e).fadeIn());
                        }          
                        });
                    });
        </script>
    </body>

</html>