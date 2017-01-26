<?php
namespace Application\Block\Importc56;
use Concrete\Core\Block\BlockController;
use Core;
//use Database;
//use Concrete\Core\Database\Connection\Connection;
class Controller extends BlockController {
	public function getBlockTypeDescription() {
		return t("Importer des utilisateurs de l'ancien cms concrete5.6");
	}
	public function getBlockTypeName() {
		return t("Importc56");
	}
	public static function view(){

	}
}
?>
