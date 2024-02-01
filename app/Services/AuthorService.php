<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class AuthorService
{
    use ConsumesExternalService;

    /**
     * The base uri to be used to consume the author service
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.authors.base_uri');
    }

    /**
     * get the full list of authors from the author service
     * @return string
     */
    public function obtaingAuthors()
    {
        return $this->performRequest('GET', '/authors');
    }

}
