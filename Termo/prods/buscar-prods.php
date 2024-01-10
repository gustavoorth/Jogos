<?php

function get_all_txt_files($dir) {
    $files = array();
    foreach (glob("$dir/*") as $file) {
      if (is_dir($file)) {
        $files = array_merge($files, get_all_txt_files($file));
      } else if (pathinfo($file, PATHINFO_EXTENSION) == "txt") {
        $files[] = [$file,filesize($file)];
      }
    }
    return $files;
  }

  $arquivos = get_all_txt_files('produtos');