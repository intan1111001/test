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
  
    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo workshop">
       
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
                                                    <span class="caption-subject bold uppercase"> Potensial Customer</span>
                                                </div>
                                                <div  class="text-align-reverse"  >
                                                                <a id="add_ruang" class="btn sbold green">
                                                                    <i class="fa fa-plus"></i> Tambah Customer </a>
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
                                                            <th> Referal</th>
                                                            <th> Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="upcoming_table_body">
                                                        <?php 
                                                                $start = 0; 
                                                                foreach ($customers as $customer) 
                                                                { 
                                                                    ?> 
                                                                    <tr> 
                                                                        <td> 
                                                                            <?php echo ++$start ?> 
                                                                        </td> 
                                                                        <td> 
                                                                            <?php echo $customer->ktp ?> 
                                                                        </td> 
                                                                        <td> 
                                                                            <?php echo $customer->nama ?> 
                                                                        </td> 
                                                                        <td> 
                                                                            <?php echo $customer->alamat ?> 
                                                                        </td>
                                                                        <td> 
                                                                            <?php echo $customer->email ?> 
                                                                        </td> 
                                                                        <td> 
                                                                            <?php if($customer->type == 4 ){ 
                                                                                 echo $customer->nama_referal ."/". $customer->nama_referal ."/". $customer->nama_referal;
                                                                            } if($customer->type == 3 ){
                                                                                 echo $customer->nama_referal  .'/'. $customer->nama_referal1 .'/'. $customer->nama_referal2;
                                                                            } if($customer->type == 2 ){
                                                                                 echo $customer->nama_referal  .'/'.  $customer->nama_referal .'/'. $customer->nama_referal1;
                                                                            } if($customer->type == 1 ){
                                                                                 echo $customer->nama_referal .'/'. $customer->nama_referal .'/'. $customer->nama_referal;
                                                                            } ?> 
                                                                        </td> 
                                                                        <td>
                                                                            <div class="btn-group" >
                                                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" onclick="javascript:ubah('Potensial_customer/read/' + <?php echo $customer->id ?>)"> Edit/Delete
                                                                                </button>
                                                                            </div>
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
							<h4 class="modal-title" id="label_form_edit">Edit</h4>
						</div>
						<div class="modal-body">
							<form action="Potensial_customer/insert" class="form-horizontal form-row-seperated login-form" id = "detail" name="detail" method="post">
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
											<input type="text" id="ktp" name="ktp" class="form-control" value ="" onchange="javascript:insertktp()"/> </div>
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
									<label class="col-sm-4 control-label">Keterangan</label>
									<div class="col-sm-8">
                                    <div class="input-group input-medium">
											<span class="input-group-addon">
												<i class="fa fa-check"></i>
											</span>
                                            <textarea class="form-control"  rows="7" cols="28" id="keterangan" name="keterangan"></textarea>
                                            </div>
                                    </div>
                                </div>
                            <div class="form-group">
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
                
           
        <input type="hidden" id="typereferal" name="typereferal" value="<?php echo $this->session->userdata('type') ?>">
        <!-- END CONTAINER -->
        <?php $this->load->view('template/footer') ?>
        <!-- BEGIN QUICK NAV -->
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <script>
            $('#add_ruang').click(function(event) {
					this.blur(); // Manually remove focus from clicked link.
                    document.getElementById("nama").value = "";
                        document.getElementById("label_form_edit").innerHTML = 'Tambah Customer';
                        document.getElementById("id").value = "";
                        document.getElementById("alamat").value = "";
                        document.getElementById("ktp").value = "";
                        document.getElementById("hp").value = "";
                        document.getElementById("email").value = "";
                        document.getElementById("fb").value = "";
                        document.getElementById("ig").value = "";
                        document.getElementById("delete_button").style.display = 'none';
                        document.getElementById("errorlog").style.display = 'none';
                        document.getElementById("save_changes").disabled = true;
					$("#edit_modal").modal({
						escapeClose: false,
						clickClose: false,
						showClose: false,
                        backdrop: 'static',
                        keyboard: false
					});
                });
                

            function ubah(url,id){
                $.ajax({
                    url : url ,
                    type : 'get',
                    dataType : 'json',
                    success : function(data)
                    {
                        document.getElementById("label_form_edit").innerHTML = 'Edit Customer';
                        document.getElementById("id").value = data["id"];
                        document.getElementById("nama").value = data["nama"];
                        document.getElementById("alamat").value = data["alamat"];
                        document.getElementById("ktp").value = data["ktp"];
                        document.getElementById("hp").value = data["hp"];
                        document.getElementById("email").value = data["email"];
                        document.getElementById("fb").value = data["fb"];
                        document.getElementById("ig").value = data["ig"];
                        document.getElementById("referalcode").value = data["referalcode"];
                        document.getElementById("keterangan").value = data["keterangan"];
                        document.getElementById("referalcode").disabled = true;
                        document.getElementById("delete_button").style.display = 'none';
                        document.getElementById("errorlog").style.display = 'none';
                        if(document.getElementById("typereferal").value == 4){
                            document.getElementById("delete_button").style.display = '';
                            document.getElementById("referalcode").disabled = false;
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

            function insertktp(){
                $id = document.getElementById("id").value;
                if( $id == null || $id == ""){
                    $id = "null";
                }

                if(document.getElementById("ktp").value != ""){
                    $.get("http://localhost/company/Marketing_controller/getktp/"+document.getElementById("ktp").value+"/"+$id + "/Customer", function( data ) {
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