<?php

namespace Core\Download;

class Download
{

    public function __construct($type, $id, $file, $filePath)
    {
        $item = $type->find($id);
        $item = $item->$file;
        if ($item != null) {
            $file = $filePath . $item;
            header('Content-Type: application/octet-stream');
            header('Content-Transfer-Encoding: Binary');
            header('Content-disposition: attachement; filename=' . basename($file) . '');
            echo readfile($file);
        }
    }
}
