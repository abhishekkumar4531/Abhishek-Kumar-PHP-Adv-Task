<?php
  require "../vendor/autoload.php";
  use GuzzleHttp\Client;

  class GetData{
    public $data_title = Array();
    public $filed_value = Array();
    public $image_file = Array();
    public $root_link = 'https://ir-dev-d9.innoraft-sites.com/';
    public $title_link = Array();
    function getapiData($url){
      $client = new Client();
      $res = $client->request('GET', $url);

      $apiData = json_decode($res->getBody());

      //return $apiData->data['3']->attributes->title;
      $i = 0;
      $j = 0;
      $k = 0;
      $l = 0;
      foreach($apiData->data as $values){
        if($values->attributes->field_services!=null){
          if($values->attributes->field_secondary_title!=null){
            $this->data_title[$i++] = $values->attributes->field_secondary_title->value;
            $this->filed_value[$j++] = $values->attributes->field_services->value;
            $image_href= $values->relationships->field_image->links->related->href;
            //echo $image_href ."<br>";
            $img_res = $client->request('GET', $image_href);
            $image_url = json_decode($img_res->getBody());
            $this->image_file[$k++] = $this->root_link . $image_url->data->attributes->uri->url;
            $this->title_link[$l++] = $this->root_link . $values->attributes->path->alias;
            //echo $values->attributes->path->alias ."<br>";
          }
          else{
            $this->data_title[$i++] = $values->attributes->title;
            $this->filed_value[$j++] = $values->attributes->field_services->value;
            $image_href= $values->relationships->field_image->links->related->href;
            //echo $image_href ."<br>";
            $img_res = $client->request('GET', $image_href);
            $image_url = json_decode($img_res->getBody());
            $this->image_file[$k++] = $this->root_link . $image_url->data->attributes->uri->url;
            $this->title_link[$l++] = $this->root_link . $values->attributes->path->alias;
          }
        }
      }
      return [$this->data_title, $this->filed_value, $this->image_file, $this->title_link];
    }
  }
?>