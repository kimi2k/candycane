<span id="attachments_fields">
  <?php echo $form->input('attachments_file.1', array('name'=>'attachments_file[1]', 'type'=>'file', 'size'=>30, 'div'=>false, 'label'=>false)); ?><?php echo $form->input('attachments_description.1.', array('name'=>'attachments_description[1]', 'size'=>60, 'div'=>false, 'label'=>false)); ?>
  <em><?php __('Optional description'); ?></em>
</span>
<br />
<small><?php echo $html->link(__('Add another file',true), '#', array('onclick'=>'addFileField(); return false;')); ?>
(<?php __('Maximum size'); ?>: <?php echo $number->toReadableSize($Settings->attachment_max_size*1024); ?>)
</small>
