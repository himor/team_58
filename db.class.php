<?php

/**
 * Class DB
 */
class DB
{
    const DB_FILE = 'db.txt';

    /**
     * Add array to file
     *
     * @param array $block
     * @return string - short key
     */
    public function add($block = [])
    {
        $key   = $this->keyGen();
        $block = ['_key' => $key] + $block;
        file_put_contents(static::DB_FILE, serialize($block) . PHP_EOL, FILE_APPEND);
        return $key;
    }

    /**
     * Find array by short key
     *
     * @param $key
     * @return mixed
     */
    public function find($key)
    {
        $file = file(static::DB_FILE);
        foreach ($file as $line) {
            $line = unserialize(trim($line));
            if ($line['_key'] == $key) {
                unset($line['_key']);
                return $line;
            }
        }
    }

    /**
     * Generate short key
     *
     * @return string
     */
    protected function keyGen()
    {
        return substr(md5(microtime(true)), 0, 6);
    }
}