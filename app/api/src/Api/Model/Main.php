<?php 

namespace Api\Model;
class Main
{
    protected $param;

    public function __construct($param = 'null')
    {
        $this -> $param = $param;
    }

    public function test()
    {
      return array('test'=>'main');
    }
}

?>