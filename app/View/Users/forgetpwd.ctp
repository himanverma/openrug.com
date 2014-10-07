<div class="col-sm-12">
    <div class="row">
        <!--sign in start-->
        <div class="sign_main_in_box">
            <div class="col-lg-12" style="text-align: center !important;">
                <?php echo $this->Session->flash(); ?>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="sign_box_inn">
                    <div class="Sign_box_tittle"><h1>Forget Password</h1></div>
                    <?php echo $this->Form->create('User'); ?>
                    <div class="col-lg-12">
                        <div class="sign_in_user_name">
                            <p>Email</p>
                            <span><?php echo $this->Form->input('email',array('label'=>FALSE,'div'=>FALSE));?></span>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="col-lg-8 padding_right"></div>
                        <div class="col-lg-4 padding_right">
                            <div class="sign_in_button">
                                <input type="submit" value="Submit">
                            </div>
                        </div> 
                    </div>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
        <!--sign in end-->
    </div>
</div>