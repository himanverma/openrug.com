<div class="contact_main">
    <div class="row">
        <div class="col-sm-6">
            <div class="contact">
                <h3>Contact us</h3>
                <div class="contact_inn">
                    <?php echo $this->Form->create('Contact');
                        echo $this->Form->input('name',array('label'=>FALSE,'div'=>FALSE,'placeholder'=>'Name','required'=>'required'));
                        echo $this->Form->input('email',array('label'=>FALSE,'div'=>FALSE,'placeholder'=>'Email','required'=>'required'));
                        echo $this->Form->input('message',array(
                            'label'=>FALSE,'div'=>FALSE,'placeholder'=>'Message','type'=>'textarea','required'=>'required'));?>
                        <div class="submit">
                            <button type="submit" class="btn_one">Submit</button>
                        </div>
                    <?php echo $this->Form->end();?>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="contact_one">
                <h3>Get in Touch</h3>
                <div class="contact_inn_one">
                    <ul>
                        <li><span class="glyphicon glyphicon-home home"></span><p>5512 Lorem Ipsum Vestibulum Molesqu, Dolor Sit Amet, Egestas 666 69</p>
                        </li>
                        <li><span class="glyphicon glyphicon-envelope envelope"></span><p>Email@compname.com</p></li>
                        <li><span class="glyphicon glyphicon-earphone earphone"></span></span><p>+1 800 450 6935, +1 800 450 6940</p></li>
                        <li><i class="fa fa-building name"></i><p>Company Name</p></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
