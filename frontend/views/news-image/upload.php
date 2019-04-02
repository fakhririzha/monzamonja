<?= \kato\DropZone::widget([
       'options' => [
       		'url' => 'index.php?r=news-image/upload',
            'maxFilesize' => '2',
       ],
       'clientEvents' => [
            'complete' => "function(file){console.log(file)}",
            'removedfile' => "function(file){alert(file.name + ' is removed')}"
       ],
   ]);
?> 

<form action="/file-upload"
      class="dropzone"
      id="my-awesome-dropzone"></form>