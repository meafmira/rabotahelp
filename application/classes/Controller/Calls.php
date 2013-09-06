<?php

class Controller_Calls extends Controller {
    public function action_index() {
        if (isset($_POST['name'], $_POST['phone'])) {
            DB::insert('calls', array('name', 'phone'))->values(array($_POST['name'], $_POST['phone']))->execute();
            $message = <<<MES
<table>
	<tr>
		<th>Имя:</th>
		<td>$_POST[name]</td>
	</tr>
	<tr>
		<th>Телефон:</th>
		<td>$_POST[phone]</td>
	</tr>
</table>
MES;
            echo mail('b.romanchevskiy@gmail.com', 'Rabotahelp: Call order', $message, "Content-type:text/html; charset=utf-8\nTo: gang7e@gmail.com\n");
        }
    }
}
