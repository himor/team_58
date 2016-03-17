<?php

class DB
{


    public function add($block = [])
    {
        $key = $this->keyGen();
        $block = ['_key' => $key] + $block;

        

        return $key;
    }

    public function find($key)
    {

    }

    protected function keyGen()
    {
        return substr(md5(microtime(true)), 0, 6);
    }
}