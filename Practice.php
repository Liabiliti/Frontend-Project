<?php

try {
    $success = $sql->query("DELETE FROM tableName WHERE ID=1");

    if(!$success) {
        $error = "You cannot delete this row";
        throw new Exception($error);
    }
} catch (SqlException $e) {
    if ($e - > getCode() == '547') {
			echo "Can't delete foreign key constraint";
		}
		else if($e - > getCode() == '1062'){
		echo "Can't duplicate primary key";
		}
		else{
			echo $e -> getMessage();
		}

}
?>
