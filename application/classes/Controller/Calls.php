<?php

class Controller_Calls extends Controller {
    public function action_index() {
        if (isset($_POST['name'], $_POST['phone'])) {
            DB::insert('calls', array('name', 'phone'))->values(array($_POST['name'], $_POST['phone']))->execute();
        }
    }
}