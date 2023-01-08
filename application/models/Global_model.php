<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Global_model extends CI_Model
{
    public function findRowInArray($condition, $array) {
      foreach ($array as $key => $val) {
          if ($condition) {
              return $val;
          }
      }
      return null;
    }
}