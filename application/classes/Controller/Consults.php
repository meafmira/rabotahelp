<?php

class Controller_Consults extends Controller {
    public function action_index() {
        var_dump($_POST);
        if (isset($_POST['name'], $_POST['skype'], $_POST['email'])) {
            DB::insert('consults', array('name', 'skype', 'email'))->values(array($_POST['name'], $_POST['skype'], $_POST['email']))->execute();
            $message = <<<MES
<table>
	<tr>
		<th>Имя:</th>
		<td>$_POST[name]</td>
	</tr>
	<tr>
		<th>Skype:</th>
		<td>$_POST[skype]</td>
	</tr>
	<tr>
		<th>E-mail:</th>
		<td>$_POST[email]</td>
	</tr>
</table>
MES;
            echo mail('b.romanchevskiy@gmail.com', 'Rabotahelp: Free Consult', $message, "Content-type:text/html; charset=utf-8\nTo: gang7e@gmail.com\n");
        }
    }
}
