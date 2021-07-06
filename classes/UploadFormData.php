<?php

      class UploadFormData {
        public $videoArray,$title,$description;

        public function __construct($videoArray,$title,$description){

          $this->videoArray = $videoArray;
          $this->title = $title;
          $this->description = $description;
        }
      }


 ?>
