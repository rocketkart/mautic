<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

?>
<?php echo $view['form']->start($form); ?>
<?php echo $view['form']->errors($form) ?>
<?php echo $view['form']->row($form['publishUp']); ?>
<?php echo $view['form']->row($form['publishDown']); ?>
<?php echo $view['form']->end($form); ?>