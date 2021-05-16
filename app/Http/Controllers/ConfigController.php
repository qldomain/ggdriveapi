<?php

namespace App\Http\Controllers;
use Storage;

$googleDriveStorage = Storage::disk('google_drive');

// Đường dẫn tới thư mục muốn liệt kê nội dung
$dir = '/';
// Hoặc có thể liệt kê trong một sub-folders
// $dir = '/path-to-sub-folder'

// Có đọc nội dung bên trong các sub-folder của $dir hay không?
// Nên đặt là false để tránh phải liệt kê qua nhiều khi thư mục có nhiều file & sub-folders
$recursive = false;

$contents = collect($googleDriveStorage->listContents($dir, $recursive));

dd($contents);

/*
Output

Illuminate\Support\Collection^ {#790
  #items: array:2 [
    0 => array:10 [
      "name" => "test.txt"
      "type" => "file"
      "path" => "1IRoI-_ploHPDHHCk8ap6EgDyoLTo0aBb"
      "filename" => "test"
      "extension" => "txt"
      "timestamp" => 1588994857
      "mimetype" => "text/plain"
      "size" => 12
      "dirname" => ""
      "basename" => "1IRoI-_ploHPDHHCk8ap6EgDyoLTo0aBb"
    ]
    1 => array:9 [
      "name" => "images"
      "type" => "dir"
      "path" => "1Y4pnI75f9d-KGT4tYRaLRMu9fxG4SBdB"
      "filename" => "images"
      "extension" => ""
      "timestamp" => 1588995638
      "size" => 0
      "dirname" => ""
      "basename" => "1Y4pnI75f9d-KGT4tYRaLRMu9fxG4SBdB"
    ]
  ]
}
*/
