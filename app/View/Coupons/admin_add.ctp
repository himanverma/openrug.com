<?php
echo $this->Form->create('Coupon');
echo $this->Form->input('coupon_code');
echo '<div class="select type required"><lable for="UserType">Type &nbsp</lable>';
echo $this->Form->select('type', array('fixed' => 'In-Fixed', 'pecentage' => 'In-Percentage'));
echo "</div>";
echo $this->Form->input('value');
echo $this->Form->input('valid_title');
echo $this->Form->end('Submit');
?>