<?php

    use Joomla\Registry\Registry;

    /**
     * Created by PhpStorm.
     * User: Ironman
     * Date: 8/19/2015
     * Time: 2:46 PM
     */
    
    trait Sp4kAppsBraintreeTrait
    {
        /** @var  Sp4kTablesBase | Sp4kTablesNestedbase
        protected $_table = false; */
        
        protected $_key = 'id';
        
        
        
        /**
         * @return bool|\Sp4kTablesBase
         */
        public function getTable()
        {
            return false;
            return
                $this->_table
                    ?
                    $this->_table
                    :
                    $this->_table = new Sp4kTablesBase('#__sp4k_braintree_items','id');
        }
        
        public static function getInstance( Registry $state = null)
        {
            return new self($state);
        }
        
        /**
         * @param Registry | null $state
         *
         * @return Sp4kAppsBraintreeItem
         *
         */
        public function getItemInstance( Registry $state = null)
        {
            return Sp4kAppsBraintreeItem::getInstance( $state );
        }
        
        /**
         * @param   Registry $state
         *
         * @return Sp4kAppsBraintreeItems
         */
        public function getItemsInstance( Joomla\Registry\Registry $state = NULL )
        {
            return Sp4kAppsBraintreeItems::getInstance($state);
        }
        
        /**
         * @return  Registry
         */
        protected function getState()
        {
            return Registry::getInstance($this->_statekey);
        }
    }