<?php
defined('_JEXEC') or die;
foreach ($this->items as $i => $item) : ?>
    <tr>
        <td>
            <?php echo JHtml::_('grid.id', $i, $item->id); ?>
        </td>
        <td>
            <?php echo $item->id; ?>
        </td>
        <td>
            <?php echo $item->title; ?>
        </td>
        <td>
            <?php echo $item->current_amount; ?>
        </td>
        <td>
            <?php echo $item->final_amount; ?>
        </td>        
        <td>
            <?php echo $item->finished; ?>
        </td> 
        <td>
            <?php 
            $db=JFactory::getDbo();
            $query = $db->getQuery(true);
            $fields = array('title');
            $query->select($db->quoteName($fields))
                ->from($db->quoteName('#__content'))
                ->where($db->quoteName('id') . ' = '.$item->link_article);
            $db->setQuery($query);
            $result = $db->loadObjectList();
            echo $result[0]->title;

            ?>
        </td>               
    </tr>
<?php endforeach; ?>