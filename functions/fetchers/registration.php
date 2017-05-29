<?php
/**
 * Created by PhpStorm.
 * User: ddemeshko
 * Date: 04.02.15
 * Time: 14:43
 */

class Fetcher_Registration extends ProRMFormFetcher{
    protected $formSubject = array(
        'en' => 'registration-en',
        'de' => 'registration-de',
    );

    public function __construct($source)
    {
        parent::__construct($source);
    }
} 