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
                                                    <span class="caption-subject bold uppercase"> Marketing</span>
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
                                                                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" onclick="javascript:peserta('<?php echo $marketing->code ?>')"> Show Sales
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
							<h4 class="modal-title">Edit Modal</h4>
						</div>
						<div class="modal-body">
							<form action="Marketing_controller/insert" class="form-horizontal form-row-seperated" id = "detail" name="detail" method="post">
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
							<h4 class="modal-title">Detail Sales</h4>
						</div>
						<div class="modal-body">

                             <!-- BEGIN EXAMPLE TABLE PORTLET-->
                             <div class="portlet light portlet-fit portlet-datatable bordered">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-settings font-green"></i>
                                        <span class="caption-subject font-green sbold uppercase">Detail Sales</span>
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
                        document.getElementById("id").value = "";
                        document.getElementById("alamat").value = "";
                        document.getElementById("ktp").value = "";
                        document.getElementById("hp").value = "";
                        document.getElementById("email").value = "";
                        document.getElementById("fb").value = "";
                        document.getElementById("ig").value = "";


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
                        document.getElementById("referalcode").disabled = true;
                        document.getElementById("type").disabled = true;
                        document.getElementById("delete_button").style.display = 'none';
                        if(document.getElementById("typereferal").value == 4){
                            document.getElementById("delete_button").style.display = '';
                            document.getElementById("referalcode").disabled = false;
                            document.getElementById("type").disabled = false;
                        }
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

            function peserta(id){
                $.get("http://localhost/company/Marketing_controller/read_code/"+id, function( data ) {
                        $("#bodytablepeserta").html("");
                    // $.get(base_url+"welcome/read/"+id, function( data ) {                   
                    for(var i = 0; i<data.length; i++){
                        $("#bodytablepeserta").append('<tr><th> '+ (i+1) + ' </th><th> '+data[i].ktp+' </th><th> '+data[i].nama+' </th><th> '+data[i].hp+'  </th><th> '+data[i].email+'  </th></tr>');
                    }
                    console.log(data);
                });
                $('#detail_modal').modal('show'); 
            }

        </script>
    </body>

</html>