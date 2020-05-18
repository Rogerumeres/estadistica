<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


 <div id="login-box" class="login-box visible widget-box no-border">
                                    <div class="widget-body">
                                        <div class="widget-main">

      
       
			<h4 class="header red lighter bigger">
					   <?= validation_errors() ?>
				</h4>
		

                                            <div class="space-6"></div>

                                            <?= form_open('User/ingresar', array('id'=>'miformulario')); ?>
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="text" id="username" name="username" class="form-control" placeholder="Nombre de Usuario" />
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-right">
                                                            <input type="password" 
                                                           id="password" name="password" class="form-control" placeholder="Password" />
                                                            <i class="ace-icon fa fa-lock"></i>
                                                        </span>
                                                    </label>

                                                    <div class="space"></div>

                                                    <div class="clearfix">
                                                        

                                                        
                                                        <div class="form-group">
					                                            <input type="submit" class="btn btn-primary" value="Ingresar"> 
				                                            </div>
                                                    </div>

                                                    <div class="space-4"></div>
                                                </fieldset>
                                            </form>

                                            <div class="social-or-login center">
                                                <span class="bigger-110">Ingresar con</span>
                                            </div>

                                            <div class="space-6"></div>

                                            <div class="social-login center">
                                                <a class="btn btn-primary">
                                                    <i class="ace-icon fa fa-facebook"></i>
                                                </a>

                                                <a class="btn btn-info">
                                                    <i class="ace-icon fa fa-twitter"></i>
                                                </a>

                                                <a class="btn btn-danger">
                                                    <i class="ace-icon fa fa-google-plus"></i>
                                                </a>
                                            </div>
                                        </div><!-- /.widget-main -->

                                        
                                    </div><!-- /.widget-body -->
                                </div><!-- /.login-box -->