<?php


class UploadFormConstruct {



  public function createUploadForm(){
    $fileInput = $this->fileInput();
    $fileTitle = $this->uploadTitle();
    $fileDescription = $this->uploadDescription();
    $fileButton = $this->uploadButton();

    return "<form action='upload.php' method='POST' enctype='multipart/form-data'>
          $fileInput
          $fileTitle
          $fileDescription
          $fileButton
    </form>";

  }

  private function fileInput(){
    return "<div class='mb-3'>
  <label for='formFile' class='form-label'>File name input</label>
  <input class='form-control' type='file' name='fileInput'>
</div>";
  }
  private function uploadTitle(){
    return "<input class='form-control form-control-lg' type='text' name='fileText' placeholder='Title'>";
  }
  private function uploadDescription(){
    return "<div class='form-floating mt-3'>
  <textarea class='form-control'placeholder='Leave a comment here' id='floatingTextarea2' style='height: 100px' name='inputDescription'></textarea>
  <label for='floatingTextarea2'>Comments</label><br />
</div>";
  }
  private function uploadButton(){
    return "<button  class='btn btn-primary' name='uploadBtn'>Upload</button>";
  }
}
 ?>
