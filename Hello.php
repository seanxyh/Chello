<?php
namespace CHello;

Class Hello extends Base
{

    /**
     * @return Hello
     */
    public static function instance()
    {
        return parent::Instance();
    }

    public function sayHello()
    {
        return 'Say Hello';
    }

}