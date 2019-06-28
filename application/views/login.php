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
    

    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index.html">
                <img src="../assets/pages/img/logo-big.png" alt="" /> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="Login/cek" method="post">
                <h3 class="form-title font-green">Sign In</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter any username and password. </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
                <div class="form-actions">
                    <button type="submit" class="btn green uppercase">Login</button>
                    <label class="rememberme check mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="remember" value="1" />Remember
                        <span></span>
                    </label>
                    <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                </div>
                <div class="create-account">
                    <p>
                        <a href="javascript:;" id="register-btn" class="uppercase">Create an account</a>
                    </p>
                </div>
            </form>
            <!-- END LOGIN FORM -->
            <!-- BEGIN FORGOT PASSWORD FORM -->
            <form class="forget-form" action="index.html" method="post">
                <h3 class="font-green">Forget Password ?</h3>
                <p> Enter your e-mail address below to reset your password. </p>
                <div class="form-group">
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                <div class="form-actions">
                    <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
                    <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
                </div>
            </form>
            <!-- END FORGOT PASSWORD FORM -->
            <!-- BEGIN REGISTRATION FORM -->
            <form class="register-form" action="Login/insert" method="post">
                <h3 class="font-green">Sign Up</h3>
                <div class="alert alert-danger display-hide" style="display: none;" id="errorlog">
                    <button class="close" data-close="alert"></button>
                <span id="errormessage"> </span>
                </div>
                <p class="hint"> details referal: </p>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Referal Code</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Referal Code" id="referalcode"  name="referalcode" onchange="javascript:change_code()" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Nama Referal</label>
                    <input class="form-control placeholder-no-fix" type="text" disabled="true" id="namareferal" name="namareferal" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Status</label>
                    <input class="form-control placeholder-no-fix" type="text" disabled="true"  id="statusreferal"  name="statusreferal" /> </div>
                
                <p class="hint"> Enter your personal details below: </p>    
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Nama</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Nama" name="nama" /> </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">No KTP</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="No KTP" id="ktp"  name="ktp" onchange="javascript:change_ktp()"/> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Alamat</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Alamat" name="alamat" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">HP</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="HP" name="hp" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Email</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Email" name="email" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Facebook</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Facebook" name="fb" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Instagram</label>
                    <input class="form-control placeholder-no-fix" type="text" placeholder="Instagram" name="ig" /> </div>
                
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Type Marketing</label>
                    <select class="bs-select form-control" id="type" name="type" onchange="javascript:change_type()">
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
                                    </select></div>
                
                <div id="keterangan_cus" style="display:none;">
                    <div class="form-group">
                            <label class="control-label visible-ie8 visible-ie9">Keterangan</label>
                            <textarea class="form-control placeholder-no-fix" rows="7" cols="28" id="keterangan" name="keterangan" placeholder="Keterangan" style="height:100px;"></textarea> </div>
                </div>
                <div id="divusername" >
                <p class="hint"> Enter your account details below: </p>
                    <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">Username</label>
                        <input class="form-control placeholder-no-fix" type="text" placeholder="Username" name="username" /> </div>
                    <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">Password</label>
                        <input class="form-control placeholder-no-fix" type="password" id="register_password" placeholder="Password" name="password" /> </div>
                    <div class="form-group">
                        <label class="control-label visible-ie8 visible-ie9">Re-type Your Password</label>
                        <input class="form-control placeholder-no-fix" type="password" placeholder="Re-type Your Password" name="rpassword" /> </div>
                </div>
                <div class="form-group margin-top-20 margin-bottom-20">
                    <label class="mt-checkbox mt-checkbox-outline">
                        <input type="checkbox" name="tnc" /> I agree to the
                        <a href="javascript:;">Terms of Service </a> &
                        <a href="javascript:;">Privacy Policy </a>
                        <span></span>
                    </label>
                    <div id="register_tnc_error"> </div>
                </div>
                <div class="form-actions">
                    <button type="button" id="register-back-btn" class="btn green btn-outline">Back</button>
                    <button type="submit" id="register-submit-btn" class="btn btn-success uppercase pull-right">Submit</button>
                </div>
            </form>
            <!-- END REGISTRATION FORM -->
        </div>
        <div class="copyright"> 2014 © Metronic. Admin Dashboard Template. </div>
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            });

            function change_code(){
                $.get("http://localhost/company/Login/read_code/"+document.getElementById("referalcode").value, 
                    function( data ) {
                                console.log(data);
                    document.getElementById("namareferal").value = data[0]["nama"];
                    document.getElementById("statusreferal").value = data[0]["description"];
                    id="2-5";
                    if(data[0]["type"] == 2){                            
                       id = "3-5"; 
                    }

                    $.get("http://localhost/company/Login/readtype/"+id, 
                            function( datatype ) {
                                console.log(datatype);
                                if(datatype.length > 0){                               
                                    $("#type").html("");                          
                                    for(var i = 0; i<datatype.length; i++){
                                        $("#type").append("<option value="+datatype[i].code+">"+datatype[i].des+"</option>");
                                    }
                                }else{              
                                    $("#nama_undangan").html("");                             
                                }
                            });
                    });

            }

            function change_type(){
                    jenis = "Marketing";
                    if(document.getElementById("type").value == "5"){
                        document.getElementById("keterangan_cus").style.display = "";
                        document.getElementById("divusername").style.display = "none";
                        jenis = "Customer";
                    }else{
                        document.getElementById("keterangan_cus").style.display = "none";
                        document.getElementById("divusername").style.display = "";
                        jenis = "Marketing";
                    }

                    $id = "null";
                    if(document.getElementById("ktp").value != ""){
                        $.get("http://localhost/company/Marketing_controller/getktp/"+document.getElementById("ktp").value+"/"+$id + "/" +  jenis, function( data ) {
                        if(data[0].count == "0"){
                                    document.getElementById("register-submit-btn").disabled = false;
                                    document.getElementById("errorlog").style.display = 'none';
                            }else{
                                    document.getElementById("register-submit-btn").disabled = true;
                                    document.getElementById("errorlog").style.display = 'block';
                                    document.getElementById("errormessage").innerHTML = 'Nomor KTP Sudah terdaftar';
                            }

                            console.log(data);
                        });
                    }else{
                        document.getElementById("errorlog").style.display = 'block';
                        document.getElementById("errormessage").innerHTML = 'Mohon Isi Nomor KTP';
                        document.getElementById("register-submit-btn").disabled = true;
                    }
            }

            function change_ktp(){
                    $id = "null";
                    jenis = "Marketing";
                    if(document.getElementById("ktp").value != ""){
                        $.get("http://localhost/company/Marketing_controller/getktp/"+document.getElementById("ktp").value+"/"+$id + "/" +  jenis, function( data ) {
                        if(data[0].count == "0"){
                                    document.getElementById("register-submit-btn").disabled = false;
                                    document.getElementById("errorlog").style.display = 'none';
                            }else{
                                    document.getElementById("register-submit-btn").disabled = true;
                                    document.getElementById("errorlog").style.display = 'block';
                                    document.getElementById("errormessage").innerHTML = 'Nomor KTP Sudah terdaftar';
                            }

                            console.log(data);
                        });
                    }else{
                        document.getElementById("errorlog").style.display = 'block';
                        document.getElementById("errormessage").innerHTML = 'Mohon Isi Nomor KTP';
                        document.getElementById("register-submit-btn").disabled = true;
                    }
            }
        </script>
    </body>

</html>