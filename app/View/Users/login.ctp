<div class="col-sm-12">
    <div class="row">
        <!--sign in start-->
        <div class="sign_main_in_box">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="sign_box_inn">
                    <div class="Sign_box_tittle"><h1>Sign in Here</h1></div>
                    <?php echo $this->Form->create('User'); ?>
                    <div class="col-lg-12">
                        <div class="sign_in_user_name">
                            <p>Username</p>
                            <span><input type="text" name="data[User][username]" /></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="sign_in_user_name">
                            <p>Password</p>
                            <span><input type="password" name="data[User][password]" /></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-8 padding_right">
                            <div class="sign_in_check_boxx">
                                <h1><a href="<?php echo $this->Html->url('/users/forgetpwd'); ?>">Forgot Password</a></h1>
                                <span><input type="checkbox"  class="sign_in_check_in"/></span>
                                <!--<p>Remember me</p>-->
                            </div>
                        </div>
                        <div class="col-lg-4 padding_right">
                            <div class="sign_in_button">
                                <input type="submit" value="Sign in">
                            </div>
                        </div> 
                    </div>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>
        <!--sign in end-->
    </div>
</div>