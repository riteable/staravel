<?php

namespace App\Models\Traits;

use Hidehalo\Nanoid\Client;

trait HasNanoid
{
    /**
     * Nanoid client
     *
     * @var \Hidehalo\Nanoid\Client
     */
    private $nanoidClient;

    protected function getNanoidClient()
    {
        return $this->nanoidClient;
    }

    protected function setNanoidClient(Client $client)
    {
        $this->nanoidClient = $client;
    }

    /**
     * Generates a new Nanoid.
     *
     * @param int $size Length of the generated ID
     * @return string The generated Nanoid
     */
    public function nanoid()
    {
        $client = $this->getNanoidClient();
        return $client->generateId(21, Client::MODE_DYNAMIC);
    }

    /**
     * Called when model is initialized.
     *
     * @return void
     */
    public function initializeHasNanoid()
    {
        $this->setIncrementing(false);
        $this->setKeyType('string');
        $this->setNanoidClient(new Client());
    }

    /**
     * Called when model is booted.
     *
     * @return void
     */
    public static function bootHasNanoid()
    {
        static::creating(function ($model) {
            if ($model->id) {
                return null;
            }

            $model->id = $model->nanoid();
        });
    }
}
