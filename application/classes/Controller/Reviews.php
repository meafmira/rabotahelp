<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_Reviews extends Controller {
    public function action_index() {
        if (isset($_POST['name'], $_POST['prof'], $_POST['text'])) {
            DB::insert('reviews', array('name', 'prof', 'review', 'photo'))->values(array($_POST['name'], $_POST['prof'], $_POST['text'], $_POST['photo']))->execute();
        }
        else {
            $this->request->protocol('HTTP/1.0');
            $this->response->protocol('HTTP/1.0');
            $res = DB::select('name', 'prof', 'review', 'photo')->from('reviews')->order_by('id', 'DESC')->limit(10)->as_assoc()->execute();
            $result = array();
            foreach ($res as $r) {
                $result[] = $r;
            }
            echo json_encode($result);
        }
    }
}
