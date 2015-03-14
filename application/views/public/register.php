<?php $this->load->view('public/templates/header'); ?> 
<div class="container">

    <div class="row">

        <div class="span9">
            <div class="register">

                <div class="titleHeader clearfix">
                    <h3>Create New Account</h3>
                </div><!--end titleHeader-->

                <form method="post" action="<?php echo base_url('public/registers/process/add'); ?>" class="form-horizontal">

                    <legend>&nbsp;&nbsp;&nbsp;&nbsp;1. Personal Informations</legend>

                    <div class="control-group">
                        <label class="control-label" for="inputUserName">Username: <span class="text-error">*</span></label>
                        <div class="controls">
                            <input type="text" id="inputUserName" name="user_name" placeholder="Username" value="<?php echo set_value('user_name'); ?>">
                            <span class="help-inline"><?php echo form_error('user_name'); ?></span>
                        </div>
                    </div><!--end control-group-->

                    <div class="control-group">
                        <label class="control-label" for="inputEmailAddress">E-Mail Address: <span class="text-error">*</span></label>
                        <div class="controls">
                            <input type="text" id="inputEmailAddress" name="user_email" placeholder="example@example.com" value="<?php echo set_value('user_email'); ?>">
                            <span class="help-inline"><?php echo form_error('user_email'); ?></span>
                        </div>
                    </div><!--end control-group-->

                    <div class="control-group">
                        <label class="control-label" for="inputTele">Phone Number: <span class="text-error">*</span></label>
                        <div class="controls">
                            <input type="text" id="inputTele" name="user_phone" placeholder="(02)-1598-548" value="<?php echo set_value('user_phone'); ?>">
                            <span class="help-inline"><?php echo form_error('user_phone'); ?></span>
                        </div>
                    </div><!--end control-group-->

                    <legend>&nbsp;&nbsp;&nbsp;&nbsp;2. Delivery Informations</legend>

                    <div class="control-group">
                        <label class="control-label" for="inputFirstAdd">First Address: <span class="text-error">*</span></label>
                        <div class="controls">
                            <input type="text" id="inputFirstAdd" name="first_address" placeholder="First Address" value="<?php echo set_value('first_address'); ?>">
                            <span class="help-inline"><?php echo form_error('user_phone'); ?></span>
                        </div>
                    </div><!--end control-group-->

                    <div class="control-group">
                        <label class="control-label" for="inputSecondAdd">Second Address:</label>
                        <div class="controls">
                            <input type="text" id="inputSecondAdd" name="second_address" placeholder="Second Address" value="<?php echo set_value('second_address'); ?>">
                        </div>
                    </div><!--end control-group-->

                    <div class="control-group">
                        <label class="control-label" for="inputCity">City: <span class="text-error">*</span></label>
                        <div class="controls">
                            <input type="text" id="inputCity" name="user_city" placeholder="City" value="<?php echo set_value('user_city'); ?>">
                            <span class="help-inline"><?php echo form_error('user_city'); ?></span>
                        </div>
                    </div><!--end control-group-->

                    <div class="control-group">
                        <label class="control-label" for="inputPostCode">Post Code: <span class="text-error">*</span></label>
                        <div class="controls">
                            <input type="text" id="inputPostCode" name="user_zip" placeholder="Zip Code" value="<?php echo set_value('user_zip'); ?>">
                            <span class="help-inline"><?php echo form_error('user_zip'); ?></span>
                        </div>
                    </div><!--end control-group-->

                    <div class="control-group">
                        <div class="control-label">Country: <span class="text-error">*</span></div>
                        <div class="controls">
                            <?php echo form_dropdown('id_country', $country_list, set_value('id_country')); ?>
                            <span class="help-inline"><?php echo form_error('id_country'); ?></span>
                        </div>
                    </div><!--end control-group-->

                    <div class="control-group">
                        <div class="control-label">Region/States: <span class="text-error">*</span></div>
                        <div class="controls">
                            <?php echo form_dropdown('id_state', $states_list, set_value('id_state')); ?>
                            <span class="help-inline"><?php echo form_error('id_state'); ?></span>
                        </div>
                    </div><!--end control-group-->

                    <legend>&nbsp;&nbsp;&nbsp;&nbsp;3. Set Your Password</legend>

                    <div class="control-group">
                        <label class="control-label" for="inputPass">Password: <span class="text-error">*</span></label>
                        <div class="controls">
                            <input type="password" id="inputPass" name="user_password" placeholder="**********" value="<?php echo set_value('user_password'); ?>">
                            <span class="help-inline"><?php echo form_error('user_password'); ?></span>
                        </div>
                    </div><!--end control-group-->

                    <div class="control-group">
                        <label class="control-label" for="inputConPass">Re-Type Password: <span class="text-error">*</span></label>
                        <div class="controls">
                            <input type="password" id="inputConPass" name="confirm_password" placeholder="**********" value="<?php echo set_value('confirm_password'); ?>">
                            <span class="help-inline"><?php echo form_error('confirm_password'); ?></span>
                        </div>
                    </div><!--end control-group-->
                    <hr>
                    <!--                    <div class="control-group">
                                            <label class="control-label" for="inputConPass">Newslatter: <span class="text-error">*</span></label>
                                            <div class="controls">
                                                <label class="radio inline">
                                                    <input type="radio" value="1" name="sub"> Subscribe
                                                </label>
                                                <label class="radio inline">
                                                    <input type="radio" value="2" name="sub"> Unsubscribe
                                                </label>
                                            </div>
                                        </div>end control-group-->

                    <div class="control-group">
                        <div class="controls">
                            <label class="checkbox">
                                <input type="checkbox" value="1" name="user_agree"> I'v read and agreed on <a href="#">Terms &amp; Condations</a>
                                <span class="help-inline"><?php echo form_error('user_agree'); ?></span>
                            </label>
                            <br>
                            <button type="submit" class="btn btn-primary">Register</button>
                            <button type="reset" class="btn btn-primary">Reset</button>
                        </div>
                    </div><!--end control-group-->

                </form><!--end form-->

            </div><!--end register-->
        </div><!--end span9-->


        <div class="span3">
            <div class="titleHeader clearfix">
                <h3>Categories</h3>
            </div><!--end titleHeader-->
            <ul class="unstyled my-account">
                <li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> Login or Register</a></li>
                <li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> Forget my Password</a></li>
                <li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> My Account</a></li>
                <li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> My wishlist</a></li>
                <li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> Order History</a></li>
                <li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> Downloads</a></li>
                <li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> Returns</a></li>
                <li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> TRANSACTIONS</a></li>
                <li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> Newlatters</a></li>
            </ul>
        </div><!--end span3-->

    </div><!--end row-->

</div><!--end conatiner-->
<?php $this->load->view('public/templates/footer'); ?>