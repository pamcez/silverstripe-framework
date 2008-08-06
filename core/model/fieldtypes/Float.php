<?php
/**
 * Represents a floating point field.
 * @package sapphire
 * @subpackage model
 */
class Float extends DBField {
	
	function requireField() {
		DB::requireField($this->tableName, $this->name, "float");
	}
	
	function Nice() {
		return number_format($this->value, 2);
	}
	
	public function scaffoldFormField($title = null) {
		return new NumericField($this->name, $title);
	}
}
?>