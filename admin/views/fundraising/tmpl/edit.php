<?php
defined('_JEXEC') or die;
 
JHtml::_('bootstrap.tooltip');
JHtml::_('formbehavior.chosen', 'select');
JHtml::_('behavior.formvalidation');
$params = $this->form->getFieldsets('params');
?>
<script type="text/javascript">
    Joomla.submitbutton = function(task) {
        if (task == 'fundraising.cancel' || document.formvalidator.isValid(document.id('fundraising-form'))) {
            Joomla.submitform(task, document.getElementById('fundraising-form'));
        }
    }
</script>
<form action="<?php echo JRoute::_('index.php?option=com_fundraising&layout=edit&id='.(int)$this->item->id); ?>" method="post" name="adminForm" id="fundraising-form" class="form-validate">
    <div class="row-fluid">
        <div class="span12 form-horizontal">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#general" data-toggle="tab"><?php echo JText::_('COM_FUNDRAISING_FUNDRAISING_DETAILS');?></a></li>
                <?php foreach ($params as $name => $fieldset): ?>
                    <li><a href="#params-<?php echo $name;?>" data-toggle="tab"><?php echo JText::_($fieldset->label);?></a></li>
                <?php endforeach; ?>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="general">
                    <fieldset class="adminform">
                        <?php foreach ($this->form->getFieldset('details') as $field): ?>
                        <div class="control-group form-inline">

                            <div class="control-label"><?php echo $field->label; ?></div>
                            <div class="controls"><?php echo $field->input; ?></div>

                        </div>
                        <?php endforeach; ?>
                    </fieldset>
                </div>

                <?php foreach ($params as $name => $fieldset): ?>
                    <div class="tab-pane" id="params-<?php echo $name;?>">
                        <?php if (isset($fieldset->description) && trim($fieldset->description)): ?>
                            <p class="tip"><?php echo $this->escape(JText::_($fieldset->description));?></p>
                        <?php endif;
                        foreach ($this->form->getFieldset($name) as $field) : ?>
                            <div class="control-group">
                                <?php echo $field->label; ?>
                                <div class="controls">
                                    <?php echo $field->input; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div>
            <input type="hidden" name="task" value="fundraising.edit" />
            <?php echo JHtml::_('form.token'); ?>
        </div>
    </div>
</form>