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
                                                    <span class="caption-subject bold uppercase"> Marketing </span>
                                                </div>
                                                <div  class="text-align-reverse"  >
                                                                <a id="add_ruang" class="btn sbold green">
                                                                    <i class="fa fa-plus"></i> Add New </a>
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
                                                            <th> Actions</th>
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
                                                                            <div class="btn-group" >
                                                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" onclick="javascript:ubah('Marketing_controller/read/' + <?php echo $marketing->id ?>)"> Edit/Delete
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

            <div id="edit_modal" class="modal fade" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Edit Modal</h4>
						</div>
						<div class="modal-body">
							<form action="Marketing_controller/insert" class="form-horizontal form-row-seperated" id = "detail" name="detail" method="post">
                                <input type="hidden" id="id" name="id">
								<div class="form-group">
									<label class="col-sm-4 control-label">Nama</label>
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
											<input type="text" id="ktp" name="ktp" class="form-control" value =""/> </div>
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
									<label class="col-sm-4 control-label">Handphone</label>
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
											<input type="text" id="referalcode" name="referalcode" class="form-control" value =""/> </div>
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
        <input type="hidden" id="id_workshop" name="id_workshop" value="">
        <input type="hidden" id="id_pendaftaran" name="id_pendaftaran" value="">
        <!-- END CONTAINER -->
        <?php $this->load->view('template/footer') ?>
        <!-- BEGIN QUICK NAV -->
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <script>
            $('#add_ruang').click(function(event) {
					this.blur(); // Manually remove focus from clicked link.
                    document.getElementById("nama").value = "";
                        document.getElementById("alamat").value = "";
                        document.getElementById("ktp").value = "";
                        document.getElementById("hp").value = "";
                        document.getElementById("email").value = "";
                        document.getElementById("fb").value = "";
                        document.getElementById("ig").value = "";
                        document.getElementById("type").value = "";
                        document.getElementById("referalcode").value = "";
                    document.getElementById("delete_button").style.display = 'none';
					$("#edit_modal").modal({
						escapeClose: false,
						clickClose: false,
						showClose: false
					});
                });
                

            function ubah(url){
                $.ajax({
                    url : url ,
                    type : 'get',
                    dataType : 'json',
                    success : function(data)
                    {
                        document.getElementById("id").value = data["id"];
                        document.getElementById("nama").value = data["nama"];
                        document.getElementById("alamat").value = data["alamat"];
                        document.getElementById("ktp").value = data["ktp"];
                        document.getElementById("hp").value = data["hp"];
                        document.getElementById("email").value = data["email"];
                        document.getElementById("fb").value = data["fb"];
                        document.getElementById("ig").value = data["ig"];
                        document.getElementById("type").value = data["type"];
                        document.getElementById("referalcode").value = data["referalcode"];
                    document.getElementById("delete_button").style.display = '';
                        console.log(data);
                        $("#edit_modal").modal({
						escapeClose: false,
						clickClose: false,
						showClose: false
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
        </script>
    </body>

</html>