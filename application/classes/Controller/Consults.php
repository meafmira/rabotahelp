<?php

class Controller_Consults extends Controller {
    public function action_index() {
        var_dump($_POST);
        if (isset($_POST['name'], $_POST['skype'], $_POST['email'])) {
            DB::insert('consults', array('name', 'skype', 'email'))->values(array($_POST['name'], $_POST['skype'], $_POST['email']))->execute();
        }
    }
}