<?php
echo $this->Form->create('Coupon');
echo $this->Form->input('coupon_code');
echo '<div class="select type required"><lable for="UserType">Type &nbsp</lable>';
echo $this->Form->select('type', array('In-Fixed' => 'In-Fixed', 'In-Percentage' => 'In-Percentage'));
echo "</div>";
echo $this->Form->input('value');
echo $this->Form->input('valid_title');
echo '<div class="select status required"><lable for="UserStatus">Status &nbsp</lable>';
echo $this->Form->select('status', array('1' => 'Active', '0' => 'Deactive'));
echo "</div>";
echo $this->Form->end('Submit');
?>