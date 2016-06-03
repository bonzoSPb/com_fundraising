<?php
defined('_JEXEC') or die;
 
jimport('joomla.application.component.view');

class FundRaisingViewFundRaising extends JViewLegacy{
    protected $item;
    protected $form;

    public function display($tpl = null){
        try{
           
            $this->form = $this->get('Form');
            $this->item = $this->get('Item');
            $this->addToolBar();
            parent::display($tpl);
        }
        catch (Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    protected function addToolBar(){
        JFactory::getApplication()->input->set('hidemainmenu', true);
        $isNew = ($this->item->id == 0);
 
        JToolBarHelper::title($isNew ? JText::_('COM_FUNDRAISING_MANAGER_FUNDRAISING_NEW') : JText::_('COM_FUNDRAISING_MANAGER_FUNDRAISING_EDIT'), 'fundraising');
        JToolBarHelper::apply('fundraising.apply', 'JTOOLBAR_APPLY');
        JToolBarHelper::save('fundraising.save');
        JToolBarHelper::cancel('fundraising.cancel', $isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE');
    }
}