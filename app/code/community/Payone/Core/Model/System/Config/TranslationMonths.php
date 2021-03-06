<?php
/**
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the GNU General Public License (GPL 3)
 * that is bundled with this package in the file LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Payone_Core to newer
 * versions in the future. If you wish to customize Payone_Core for your
 * needs please refer to http://www.payone.de for more information.
 *
 * @category        Payone
 * @package         Payone_Core_Model
 * @subpackage      System
 * @copyright       Copyright (c) 2015 <kontakt@fatchip.de> - www.fatchip.com
 * @author          Robert M�ller <robert.mueller@fatchip.de>
 * @license         <http://www.gnu.org/licenses/> GNU General Public License (GPL 3)
 * @link            http://www.fatchip.com
 */
class Payone_Core_Model_System_Config_TranslationMonths extends Payone_Core_Model_System_Config_Abstract
{

    /**
     * @return array
     */
    public function toArray()
    {
        return array(
            'month1' => Mage::helper('payone_core')->__('January'),
            'month2' => Mage::helper('payone_core')->__('Febuary'),
            'month3' => Mage::helper('payone_core')->__('March'),
            'month4' => Mage::helper('payone_core')->__('April'),
            'month5' => Mage::helper('payone_core')->__('May'),
            'month6' => Mage::helper('payone_core')->__('June'),
            'month7' => Mage::helper('payone_core')->__('July'),
            'month8' => Mage::helper('payone_core')->__('August'),
            'month9' => Mage::helper('payone_core')->__('September'),
            'month10' => Mage::helper('payone_core')->__('October'),
            'month11' => Mage::helper('payone_core')->__('November'),
            'month12' => Mage::helper('payone_core')->__('December'),
        );
    }
}