<?php

namespace Facades;
use NamePlugin;
  
class VacanciesList {
    public $api_url;

    public function get($post, $vid = 0) {
      $plugin = new NameApi;
      NameApi.list_vacansies($post, $vid);
    }
}
