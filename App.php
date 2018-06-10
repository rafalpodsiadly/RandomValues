<?php

class App {

    public function __construct(Type $var = null) 
    {
        $this->var = $var;
    }

    public function runConsole(Array $options)
    {
        $round = new RandList();

        $count = !empty($options['count']) ? $options['count'] : 10;
        $size = !empty($options['size']) ? $options['size'] : RandList::DEFAULT_SIZE; 
        $type = !empty($options['type']) ? $options['type'] : false;
        $block = !empty($options['block']) ? $options['block'] : false;

        return $round->LitsUUID($count, $size, $type, $block); //
    }

    public function runWeb(Array $options)
    {
        # code ..
    }
    
}