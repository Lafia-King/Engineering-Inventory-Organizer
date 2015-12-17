<!--
@author Judah Awentemi Lafia-King
@author Judah Awentemi Lafia-King<lafia.king@gmail.com>
-->

<!--
* @method deleteItem()
-->

<!--
@param No parameters
-->

<!--
@return Returns query
-->

<?php
function deleteItem(){
		$no=$_REQUEST['id'];
		$querry="DELETE FROM items WHERE item_number=$no";

		return $this->query($querry);
	}
?>