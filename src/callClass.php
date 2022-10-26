<?php
namespace activeHousing;

use Curl\Curl;

require 'vendor/curl/curl/src/Curl/Curl.php';

class callClass
{

    protected $url = 'https://reqres.in/api/users';

    public function single($id = 1)
    {
        $curl = (new Curl())->get($this->url.'/'.$id);
        if ($curl->isSuccess()) {
            return $curl->response;
        }
        $curl->close();
    }


    public function paginated($page = 1)
    {
        $curl = (new Curl())->get($this->url.'?page='.$page);
        if ($curl->isSuccess()) {
            return $curl->response;
        }
        $curl->close();
    }
}
