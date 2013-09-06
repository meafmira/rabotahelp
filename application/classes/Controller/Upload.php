<?php
/**
 * Created by JetBrains PhpStorm.
 * User: meafmira
 * Date: 9/6/13
 * Time: 10:51 AM
 * To change this template use File | Settings | File Templates.
 */

class Controller_Upload extends Controller {
    public function action_index() {
        $file = $_FILES['Files'];
        $img = Image::factory($file['tmp_name']);
        if ($img) {
            $img->resize(120, 120, Image::INVERSE);
            $img->crop(120, 120);
            $fn = 'public/upload/'.uniqid('ri_').'.jpg';
            $filename = DOCROOT.$fn;
            $img->save($filename);
            echo json_encode(array('Status' => 'OK', 'filename' => '/'.$fn));
        }
        else {
            echo json_encode(array('Status' => 'error'));
        }
    }
}