<?php
/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * Contributor(s): YetiForce Sp. z o.o.
 * *********************************************************************************** */

class PriceBooks_RelationListView_Model extends Vtiger_RelationListView_Model
{
    /**
     * {@inheritdoc}
     */
    public function getHeaders()
    {
        $headerFields = parent::getHeaders();
        //Added to support List Price
        $field = new Vtiger_Field_Model();
        $field->set('name', 'listprice');
        $field->set('column', 'listprice');
        $field->set('label', 'List Price');
        $field->set('typeofdata', 'N~O');
        $field->set('fromOutsideList', true);
        $headerFields['listprice'] = $field;

        return $headerFields;
    }
}
