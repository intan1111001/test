<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?><!DOCTYPE html>
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
  
    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo workshop" style = "background-image: url('assets/theme/assets/global/img/background.png');background-size:cover;">
       
    <?php $this->load->view('template/header'); ?>
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <?php $this->load->view('template/sidebar'); ?>
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                    <div class="page-content" >
                    <!-- END PAGE HEAD-->
                    <!-- BEGIN PAGE BASE CONTENT -->
                    <div class="row">
                        <div class="col-md-12">
                            <form class="form-horizontal form-row-seperated" action="#">
                                <div class="portlet">
                                    <div class="portlet-body">
                                        <div class="portlet light bordered">
                                            <div class="portlet-title">
                                                <div class="caption font-dark">
                                                    <i class="icon-settings font-dark"></i>
                                                    <span class="caption-subject bold uppercase"> Marketing</span>
                                                </div>
                                                <div  class="text-align-reverse"  >
                                                                <a id="add_ruang" class="btn sbold green">
                                                                    <i class="fa fa-plus"></i> Tambah Marketing </a>
                                                            </div>
                                            </div>
                                            <div class="portlet-body">
                                                <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                                    <thead>
                                                        <tr>
                                                            <th> No </th>
                                                            <th> No KTP</th>
                                                            <th> Nama</th>
                                                            <th> Alamat</th>
                                                            <th> Email</th>
                                                            <th> Type</th>
                                                            <th> Actions</th>
                                                            <th> Detail</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="upcoming_table_body">
                                                        <?php 
                                                                $start = 0; 
                                                                foreach ($marketings as $marketing) 
                                                                { 
                                                                    ?> 
                                                                    <tr> 
                                                                        <td> 
                                                                            <?php echo ++$start ?> 
                                                                        </td> 
                                                                        <td> 
                                                                            <?php echo $marketing->ktp ?> 
                                                                        </td> 
                                                                        <td> 
                                                                            <?php echo $marketing->nama ?> 
                                                                        </td> 
                                                                        <td> 
                                                                            <?php echo $marketing->alamat ?> 
                                                                        </td>
                                                                        <td> 
                                                                            <?php echo $marketing->email ?> 
                                                                        </td> 
                                                                        <td> 
                                                                            <?php echo $marketing->description ?> 
                                                                        </td> 
                                                                        <td>
                                                                            <div class="btn-group" >
                                                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" onclick="javascript:ubah('Marketing_controller/read/' + <?php echo $marketing->id ?>)"> Edit/Delete
                                                                                </button>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <?php if($marketing->type == 2){?>
                                                                            <div class="btn-group" >
                                                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" onclick="javascript:peserta('<?php echo $marketing->code ?>','<?php echo $marketing->type ?>')"> Show Sales
                                                                                </button>
                                                                            </div>
                                                                            <?php } ?>
                                                                            <?php if($marketing->type == 1){?>
                                                                            <div class="btn-group" >
                                                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" onclick="javascript:peserta('<?php echo $marketing->code ?>','<?php echo $marketing->type ?>')"> Show Team Leader
                                                                                </button>
                                                                            </div>
                                                                            <?php } ?>
                                                                        </td>
                                                                    </tr> 
                                                                    <?php 
                                                                } 
                                                                ?> 
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END PAGE BASE CONTENT -->
                </div>
                <!-- END CONTENT BODY -->
			</div>

            
            </div>
            <div id="edit_modal" class="modal fade" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title" id="label_form_edit">Edit Form</h4>
						</div>
						<div class="modal-body">
                            
							<form action="Marketing_controller/insert" class="form-horizontal form-row-seperated login-form" id = "detail" name="detail" method="post">
                                <div class="alert alert-danger display-hide" style="display: block;" id="errorlog">
                                    <button class="close" data-close="alert"></button>
                                <span id="errormessage"> </span>
                                </div>
                                <input type="hidden" id="id" name="id">
								<div class="form-group">
									<label class="col-sm-4 control-label">Nama (Sesuai KTP)</label>
									<div class="col-sm-8">
                                    <div class="input-group input-medium">
											<span class="input-group-addon">
												<i class="fa fa-check"></i>
											</span>
											<input type="text" id="nama" name="nama" class="form-control" value =""/> </div>
                                    </div>
                                </div>
                                <div class="form-group">
									<label class="col-sm-4 control-label">No KTP</label>
									<div class="col-sm-8">
                                    <div class="input-group input-medium">
											<span class="input-group-addon">
												<i class="fa fa-check"></i>
											</span>
											<input type="text" id="ktp" name="ktp" class="form-control" value =""  onchange="javascript:insertktp()"/> </div>
                                    </div>
                                </div>
                                <div class="form-group">
									<label class="col-sm-4 control-label">Alamat</label>
									<div class="col-md-8">
                                    <div class="input-group input-medium">
											<span class="input-group-addon">
												<i class="fa fa-check"></i>
											</span>
											<input type="text" id="alamat" name="alamat" class="form-control" value =""/> </div>
									</div>
                                </div>
                                <div class="form-group">
									<label class="col-sm-4 control-label">Handphone (WA)</label>
									<div class="col-sm-8">
                                    <div class="input-group input-medium">
											<span class="input-group-addon">
												<i class="fa fa-check"></i>
											</span>
											<input type="text" id="hp" name="hp" class="form-control" value =""/> </div>
                                    </div>
                                </div>
                                <div class="form-group">
									<label class="col-sm-4 control-label">Email</label>
									<div class="col-sm-8">
                                    <div class="input-group input-medium">
											<span class="input-group-addon">
												<i class="fa fa-check"></i>
											</span>
											<input type="text" id="email" name="email" class="form-control" value =""/> </div>
                                    </div>
                                </div>
                                <div class="form-group">
									<label class="col-sm-4 control-label">Facebook</label>
									<div class="col-sm-8">
                                    <div class="input-group input-medium">
											<span class="input-group-addon">
												<i class="fa fa-check"></i>
											</span>
											<input type="text" id="fb" name="fb" class="form-control" value =""/> </div>
                                    </div>
                                </div>
                                <div class="form-group">
									<label class="col-sm-4 control-label">Instagram</label>
									<div class="col-sm-8">
                                    <div class="input-group input-medium">
											<span class="input-group-addon">
												<i class="fa fa-check"></i>
											</span>
											<input type="text" id="ig" name="ig" class="form-control" value =""/> </div>
                                    </div>
                                </div>
                                <div class="form-group">
									<label class="col-sm-4 control-label">Referal Code</label>
									<div class="col-sm-8">
                                    <div class="input-group input-medium">
											<span class="input-group-addon">
												<i class="fa fa-check"></i>
											</span>
											<input type="text" id="referalcode" name="referalcode" class="form-control" value ="<?php echo $this->session->userdata('code')?>" disabled = "true"/> </div>
                                    </div>
                                </div>
                                <div class="form-group">
									<label class="col-sm-4 control-label">Type</label>
									<div class="col-sm-8">
                                    <div class="input-group input-medium">
                                    <select class="bs-select form-control" id="type" name="type">
                                        <!-- <option value="1">Ruang 1</option> -->
                                        <?php
                                        if($type != null){
                                        foreach ($type as $type_marketing) 
                                            { 
                                                ?> 
                                                <option value="<?php echo $type_marketing->code?>"><?php echo $type_marketing->des ?></option>
                                                <?php 
                                            }
                                        } ?>
                                    </select>
                                        </div>
                                    </div>
                                </div>
                            <div class="form-group">
									<label class="col-sm-4 control-label">Username</label>
									<div class="col-sm-8">
                                    <div class="input-group input-medium">
											<span class="input-group-addon">
												<i class="fa fa-check"></i>
											</span>
											<input type="text" id="username" name="username" class="form-control"/> </div>
                                    </div>
                                </div>
                                <div class="form-group">
									<label class="col-sm-4 control-label">Password</label>
									<div class="col-sm-8">
                                    <div class="input-group input-medium">
											<span class="input-group-addon">
												<i class="fa fa-check"></i>
											</span>
											<input type="text" id="password" name="password" class="form-control"/> </div>
                                    </div>
                                </div>
						<div class="modal-footer">
							<button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal"><i class="fa fa-close">Close</i></button>
							<button type="submit" class="btn green"  id="save_changes" name="save_changes">
                                <i class="fa fa-edit">Save</i>
                            <!-- <a href="" class="btn btn-default"> Save changes</a>  -->
                        </button>
							<button type="button" class="btn red" onclick="javascript:delete_marketing()" id="delete_button" name="delete_button" >
								<i class="fa fa-trash"></i> Delete</button>
						</div>
                        
						</form>
					</div>
                </div>
                
			</div>
		</div>
                <div id="detail_modal" class="modal fade" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title" id="label_detail_marketing">Detail Sales</h4>
                            </div>
                            <div class="modal-body">

                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light portlet-fit portlet-datatable bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green"></i>
                                            <span class="caption-subject font-green sbold uppercase" id="label_sub_detail_marketing">Detail Sales</span>
                                        </div>
                                        <div class="actions">
                                            <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                <label class="btn btn-transparent grey-salsa btn-outline btn-circle btn-sm active">
                                                    <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                                <label class="btn btn-transparent grey-salsa btn-outline btn-circle btn-sm">
                                                    <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn red btn-outline btn-circle" href="javascript:;" data-toggle="dropdown">
                                                    <i class="fa fa-share"></i>
                                                    <span class="hidden-xs"> Trigger Tools </span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right" id="sample_3_tools">
                                                    <li>
                                                        <a href="javascript:;" data-action="0" class="tool-action">
                                                            <i class="icon-printer"></i> Print</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" data-action="1" class="tool-action">
                                                            <i class="icon-check"></i> Copy</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" data-action="2" class="tool-action">
                                                            <i class="icon-doc"></i> PDF</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" data-action="3" class="tool-action">
                                                            <i class="icon-paper-clip"></i> Excel</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" data-action="4" class="tool-action">
                                                            <i class="icon-cloud-upload"></i> CSV</a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;" data-action="5" class="tool-action">
                                                            <i class="icon-refresh"></i> Reload</a>
                                                    </li>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-container">
                                            <table class="table table-striped table-bordered table-hover" id="sample_3">
                                            <thead>
                                                <tr>
                                                <th> No </th>
                                                <th> No KTP </th>
                                                <th> Nama </th>
                                                <th> Hp </th>
                                                <th> Email </th>
                                                <th id="detail_sub_sales"> Detail </th>
                                                </tr>
                                            </thead>
                                            <tbody id="bodytablepeserta">
                                        
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>	
            <!-- END CONTENT -->
                </div>
                <div id="detail_sub_modal" class="modal fade" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">List Sales</h4>
                            </div>
                            <div class="modal-body">

                                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                                <div class="portlet light portlet-fit portlet-datatable bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-settings font-green"></i>
                                            <span class="caption-subject font-green sbold uppercase" >List Sales</span>
                                        </div>
                                        <div class="actions">
                                            <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                <label class="btn btn-transparent grey-salsa btn-outline btn-circle btn-sm active">
                                                    <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                                <label class="btn btn-transparent grey-salsa btn-outline btn-circle btn-sm">
                                                    <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn red btn-outline btn-circle" href="javascript:;" data-toggle="dropdown">
                                                    <i class="fa fa-share"></i>
                                                    <span class="hidden-xs"> Trigger Tools </span>
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right" id="sample_3_tools">
                                                    <li>
                                                        <a href="javascript:;" data-action="0" class="tool-action">
                                                            <i class="icon-printer"></i> Print</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" data-action="1" class="tool-action">
                                                            <i class="icon-check"></i> Copy</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" data-action="2" class="tool-action">
                                                            <i class="icon-doc"></i> PDF</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" data-action="3" class="tool-action">
                                                            <i class="icon-paper-clip"></i> Excel</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:;" data-action="4" class="tool-action">
                                                            <i class="icon-cloud-upload"></i> CSV</a>
                                                    </li>
                                                    <li class="divider"> </li>
                                                    <li>
                                                        <a href="javascript:;" data-action="5" class="tool-action">
                                                            <i class="icon-refresh"></i> Reload</a>
                                                    </li>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-container">
                                            <table class="table table-striped table-bordered table-hover" id="sample_3">
                                            <thead>
                                                <tr>
                                                <th> No </th>
                                                <th> No KTP </th>
                                                <th> Nama </th>
                                                <th> Hp </th>
                                                <th> Email </th>
                                                </tr>
                                            </thead>
                                            <tbody id="bodytablepeserta_sub">
                                        
                                            </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn grey-salsa btn-outline" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>	
            <!-- END CONTENT -->
                </div>
        <input type="hidden" id="typereferal" name="typereferal" value="<?php echo $this->session->userdata('type') ?>">
        <!-- END CONTAINER -->
        <?php $this->load->view('template/footer') ?>
        <!-- BEGIN QUICK NAV -->
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <script>
            $('#add_ruang').click(function(event) {
					this.blur(); // Manually remove focus from clicked link.
                        document.getElementById("label_form_edit").innerHTML = 'Tambah Marketing';
                        document.getElementById("nama").value = "";
                        document.getElementById("id").value = "";
                        document.getElementById("alamat").value = "";
                        document.getElementById("ktp").value = "";
                        document.getElementById("hp").value = "";
                        document.getElementById("email").value = "";
                        document.getElementById("fb").value = "";
                        document.getElementById("ig").value = "";
                        document.getElementById("password").value = "";
                        document.getElementById("username").value = "";
                        document.getElementById("password").disabled = false;
                        document.getElementById("username").disabled = false;
                        document.getElementById("save_changes").disabled = true;
                    document.getElementById("errorlog").style.display = 'none';


                    document.getElementById("delete_button").style.display = 'none';
					$("#edit_modal").modal({
						escapeClose: false,
						clickClose: false,
						showClose: false,
                        backdrop: 'static',
                        keyboard: false
					});
                });
                

            function ubah(url){
                $.ajax({
                    url : url ,
                    type : 'get',
                    dataType : 'json',
                    success : function(data)
                    {
                        document.getElementById("label_form_edit").innerHTML = 'Edit Marketing';
                        document.getElementById("id").value = data[0]["id"];
                        document.getElementById("nama").value = data[0]["nama"];
                        document.getElementById("alamat").value = data[0]["alamat"];
                        document.getElementById("ktp").value = data[0]["ktp"];
                        document.getElementById("hp").value = data[0]["hp"];
                        document.getElementById("email").value = data[0]["email"];
                        document.getElementById("fb").value = data[0]["fb"];
                        document.getElementById("ig").value = data[0]["ig"];
                        document.getElementById("type").value = data[0]["type"];
                        document.getElementById("referalcode").value = data[0]["referalcode"];
                        document.getElementById("username").value = data[0]["username"];
                        document.getElementById("password").value = data[0]["password"];
                        document.getElementById("referalcode").disabled = true;
                        document.getElementById("type").disabled = true;
                        document.getElementById("password").disabled = true;
                        document.getElementById("username").disabled = true;
                        document.getElementById("delete_button").style.display = 'none';
                        document.getElementById("errorlog").style.display = 'none';
                        if(document.getElementById("typereferal").value == 4){
                            document.getElementById("delete_button").style.display = '';
                            document.getElementById("referalcode").disabled = false;
                            document.getElementById("type").disabled = false;
                            document.getElementById("password").disabled = false;
                            document.getElementById("username").disabled = false;
                        }
                        $("#edit_modal").modal({
						escapeClose: false,
						clickClose: false,
						showClose: false,
                        backdrop: 'static',
                        keyboard: false
					});
                    },
                    error : function(res)
                    {
                        show_message('Gagal',(res.responseText));
                    }
                });
            }

            function delete_marketing(){
            //     var nolaporan = document.getElementById("id_user_edit").value;
            var id = document.getElementById("id").value;
                $.get("<?php echo base_url();?>Marketing_controller/delete/"+id, function( data ) {
                    // $.get(base_url+"welcome/read/"+id, function( data ) {
                   
                    $('#edit_modal').modal('hide');
                    location.reload();
                });
            }

            function peserta(id,type){
                if(type == 1){                    
                    document.getElementById("label_detail_marketing").innerHTML = 'List Team Leader';
                    document.getElementById("label_sub_detail_marketing").innerHTML = 'List Team Leader';
                    document.getElementById("detail_sub_sales").style.display = 'block';
                    type = 2;
                    $.get("<?php echo base_url();?>Marketing_controller/read_code/"+id+"/"+type, function( data ) {
                        $("#bodytablepeserta").html("");
                    // $.get(base_url+"welcome/read/"+id, function( data ) {                   
                    for(var i = 0; i<data.length; i++){
                        $("#bodytablepeserta").append('<tr><th> '+ (i+1) + ' </th><th> '+data[i].ktp+' </th><th> '+data[i].nama+' </th><th> '+data[i].hp+'  </th><th> '+data[i].email+'  </th> <th><button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" onclick="javascript:show_sales('+data[i].id+')"> Show Sales</button></th></tr>');
                    }
                });
                }else{               
                    document.getElementById("label_detail_marketing").innerHTML = 'List Sales';
                    document.getElementById("label_sub_detail_marketing").innerHTML = 'List Sales';
                    document.getElementById("detail_sub_sales").style.display = 'none';
                    type = 3;
                    $.get("<?php echo base_url();?>Marketing_controller/read_code/"+id+"/"+type, function( data ) {
                        $("#bodytablepeserta").html("");
                    // $.get(base_url+"welcome/read/"+id, function( data ) {                   
                    for(var i = 0; i<data.length; i++){
                        $("#bodytablepeserta").append('<tr><th> '+ (i+1) + ' </th><th> '+data[i].ktp+' </th><th> '+data[i].nama+' </th><th> '+data[i].hp+'  </th><th> '+data[i].email+'  </th></tr>');
                    }
                    });
                }
                $("#detail_modal").modal({
						escapeClose: false,
						clickClose: false,
						showClose: false,
                        backdrop: 'static',
                        keyboard: false
					});
            }

            function show_sales(id){
                $.get("<?php echo base_url();?>Marketing_controller/get_sales/"+id, function( data ) {
                        $("#bodytablepeserta_sub").html("");
                    // $.get(base_url+"welcome/read/"+id, function( data ) {                   
                    for(var i = 0; i<data.length; i++){
                        $("#bodytablepeserta_sub").append('<tr><th> '+ (i+1) + ' </th><th> '+data[i].ktp+' </th><th> '+data[i].nama+' </th><th> '+data[i].hp+'  </th><th> '+data[i].email+'  </th></tr>');
                    }
                    });
                    
                $("#detail_sub_modal").modal({
						escapeClose: false,
						clickClose: false,
						showClose: false,
                        backdrop: 'static',
                        keyboard: false
					});
            }

            function insertktp(){
                $id = document.getElementById("id").value;
                if( $id == null || $id == ""){
                    $id = "null";
                }
                if(document.getElementById("ktp").value != ""){
                    $.get("<?php echo base_url();?>Marketing_controller/getktp/"+document.getElementById("ktp").value+"/"+$id+"/Marketing", function( data ) {
                        if(data[0].count == "0"){
                                document.getElementById("save_changes").disabled = false;
                                document.getElementById("errorlog").style.display = 'none';
                        }else{
                                document.getElementById("save_changes").disabled = true;
                                document.getElementById("errorlog").style.display = 'block';
                                document.getElementById("errormessage").innerHTML = 'Nomor KTP Sudah terdaftar';
                        }
                    });
                }else{
                    document.getElementById("errorlog").style.display = 'block';
                    document.getElementById("errormessage").innerHTML = 'Mohon Isi Nomor KTP';
                    document.getElementById("save_changes").disabled = true;
                }
            }

        </script>
    </body>

</html>