<?php

/**
 * Class DB
 */
class DB
{
    const REDIS_HOSTNAME = 'localhost';
    const REDIS_PORT     = 6379;

    const RECENT_NUMBER = 3;

    protected $client = null;

    public function __construct()
    {
        try {
            $this->client = new Predis\Client([
                "scheme" => "tcp",
                "host"   => static::REDIS_HOSTNAME,
                "port"   => static::REDIS_PORT
            ]);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Add array to file
     *
     * @param array $block
     * @param null  $key
     * @param int   $ttl
     * @return string - short key
     */
    public function add($block = [], $key = null, $ttl = 0)
    {
        if (empty($key)) {
            $key = $this->keyGen();
        }
        $this->client->set($key, serialize($block));
        if ($ttl > 0) {
            $this->client->expire($key, $ttl);
        }
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
        $q = $this->client->get($key);

        if (empty($q)) {
            return [];
        } else {
            return unserialize($q);
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

    /**
     * Add recent searches
     *
     * @param $block
     * @param $prefix
     */
    public function addRecent($block, $prefix)
    {
        $recent = $this->find('word:recent:' . $prefix);
        if (empty($recent)) {
            $recent = [];
        }
        if (count($recent) > 2) {
            $recent = array_slice($recent, 1, 2);
        }
        $recent[] = $block;
        $this->add($recent, 'word:recent:' . $prefix);
    }

    /**
     * Return list of recent searches
     *
     * @param $prefix
     * @return mixed
     */
    public function findRecent($prefix)
    {
        return $this->find('word:recent:' . $prefix);
    }
}