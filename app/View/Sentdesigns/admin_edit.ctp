<?php
echo $this->Form->create('Sentdesign',array('type'=>'file'));
echo $this->Form->input('title');
echo $this->Form->input('description');
echo $this->Form->input('admin_suggestion');

echo '<div class="select status required"><lable for="UserStatus">Status &nbsp</lable>';
echo $this->Form->select('status', array('1' => 'Active', '0' => 'Deactive'));
echo "</div>";
echo $this->Form->end('Submit');
?>