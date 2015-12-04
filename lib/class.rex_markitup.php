<?php
	class rex_markitup {
		
		public static function insertProfile ($name, $description = '', $type = '', $markitupButtons = '') {
			$sql = rex_sql::factory();
			$sql->setTable(rex::getTablePrefix().'markitup_profiles');
			$sql->setValue('name', $name);
			$sql->setValue('description', $description);
			$sql->setValue('type', $type);
			$sql->setValue('markitup_buttons', $markitupButtons);
			
			try {
				$sql->insert();
				return $sql->getLastId();
			} catch (rex_sql_exception $e) {
				return $e->getMessage();
			}
		}
	}
?>