<?php

namespace App\Libraries;

use RuntimeException;

/**
 * Comprime imágenes utilizando la API de Tinify.
 */
class ImageCompressor
{
    private static $instance;

    private function __construct()
    {
        try {
            \Tinify\setKey(env('TINIFY_API_KEY'));
            \Tinify\validate();
        } catch (\Tinify\Exception $e) {
            throw new RuntimeException($e->getMessage());
        }
    }

    // Singleton.
    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Comprime una imagen.
     */
    public static function run(string $source)
    {
        \Tinify\fromFile($source)->toFile($source);
    }
}
