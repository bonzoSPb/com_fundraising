<?php
 defined('_JEXEC') or die; 
 jimport('joomla.application.component.view');

 class FundRaisingViewFundRaisings extends JViewLegacy{
     protected $items;
     protected $pagination;
 
     public function display($tpl = null){
         try{
             $this->items = $this->get('Items');
 
             $this->pagination = $this->get('Pagination');
 
             $this->addToolBar();
             $this->sidebar = JHtmlSidebar::render();
             parent::display($tpl);
 
         }
         catch (Exception $e){
             throw new Exception($e->getMessage());
         }
     }
     protected function addToolBar(){
         JToolBarHelper::title(JText::_('COM_FUNDRAISING_MANAGER_FUNDRAISINGS'), 'fundraising');
         JToolBarHelper::addNew('fundraising.add');
         JToolBarHelper::editList('fundraising.edit');
         JToolBarHelper::divider();
         JToolBarHelper::deleteList('', 'fundraisings.delete');
     }
 }