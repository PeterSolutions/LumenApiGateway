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

    /**
     * the secret to be used to consume the author servise
     */
    
    public $secret;

    public function __construct()
    {
        $this->baseUri = config('services.authors.base_uri');
        $this->secret = config('services.authors.secret');
    }

    /**
     * get the full list of authors from the author service
     * @return string
     */
    public function obtaingAuthors()
    {
        return $this->performRequest('GET', '/authors');
    }

    /**
     * create an instance of author usin the author service
     * @return string
     */
    public function createAuthor($data)
    {
        return $this->performRequest('POST', '/autor', $data);
    }

    /**
     * get a single authors from the author service
     * @return string
     */
    public function obtainAuthor($author)
    {
        return $this->performRequest('GET', "/authors/{$author}");
    }

    /**
     * edit and modify authors from the author service
     * @return string
     */
    public function editAuthor($data, $author)
    {
        return $this->performRequest('PUT', "/authors/{$author}", $data);
    }

    /**
     * delete a single instance of author
     * @return string
     */
    public function deleteAuthor($author)
    {
        return $this->performRequest('DELETE', "/authors/{$author}");
    }

}
