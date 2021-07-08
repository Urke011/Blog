

<?php
      class VideoProcessor{
        private $sizeLimit = 500000000;
        private $allowedTypes = array("mp4","avi","webm");
        public function upload($uploadFormData){
          //path gde se cuva fajl
          $targetDir = "classes/uploads/videos";
          //cuvanje video fajla u varijabli
          $videoData = $uploadFormData->videoArray;
          //pravljenje privremenog video fajla
          $tmpFilePath = $targetDir . uniqid() .
          //uzima ime od fajla
           basename($videoData['name']);
          //ako je sve ok onda uploading
          //echo $tmpFilePath;
          $isValidUpload = $this->dataProcess($videoData,$tmpFilePath);
//napraviti if else da prkine izvrsenje ako validacija noje dobra
//validacija radi al uploaduje i sa greskama jbg
          if(!$isValidUpload){
            echo "something is wrong!";
          }elseif(move_uploaded_file($videoData['tmp_name'],$tmpFilePath)) {

            echo "File is Uploaded";
          }




      }

      private function dataProcess($videoData,$tmpFilePath){
        $videoType = pathInfo($tmpFilePath, PATHINFO_EXTENSION);

        if(!$this->videoUploadType($videoType)){
          echo "Invalid file type". "<br>";
                  return false;
        }elseif (!$this->videoUploadSize($videoData)) {
          echo "File is to large! <br />";
          return false;
        }return true;
        //bitan deo: kad se cela logika izvrti i nema greske
        //vraca se true

      }
      private function videoUploadType($tmpFilePath){
        return in_array($tmpFilePath, $this->allowedTypes);
      }
      private function videoUploadSize($videoData){
        return $videoData['size'] <= $this->sizeLimit;
      }

    }
 ?>
