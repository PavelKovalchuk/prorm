<?php
/**
 * Created by PhpStorm.
 * User: ddemeshko
 * Date: 04.02.15
 * Time: 14:43
 */

class Fetcher_MsbscFur20Benutzer extends ProRMFormFetcher{
    protected $formSubject = array(
        'de' => 'MSBSC-für-20-benutzer',
        'en' => 'MSBSC-für-20-benutzer',
    );

    public function __construct($source)
    {
        parent::__construct($source);
    }
} 