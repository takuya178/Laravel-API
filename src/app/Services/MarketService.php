<?php

namespace App\Services;

use App\Traits\ConsumesExternalServices;

class marketService
{
  use ConsumesExternalServices;

  protected $baseUri;

  public function __construct()
  {
    $this->baseUri = config('services.market.base_uri');
  }

  public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
  {

  }

  public function decodeResponse($response)
  {

  }

  public function checkIfErrorResponse($response)
  {
    
  }
}