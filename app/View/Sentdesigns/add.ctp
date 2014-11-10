<?php
echo $this->Form->create('Sentdesign',array('type'=>'file'));
echo $this->Form->input('Sentimage.',array('type'=>'file', 'multiple'));
echo $this->Form->input('title');
echo $this->Form->input('description');
echo $this->Form->end('Submit');
?>