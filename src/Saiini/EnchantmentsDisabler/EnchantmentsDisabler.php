<?php
declare(strict_types = 1);

#  _____  ____  ____  ____   ____
# / ___/ /    ||    ||    \ |    |
#(   \_ |  o  | |  | |  _  | |  |
# \__  ||     | |  | |  |  | |  |
# /  \ ||  _  | |  | |  |  | |  |
# \    ||  |  | |  | |  |  | |  |
# \___||__|__||____||__|__||____|

namespace Saiini\EnchantmentsDisabler;

use DaPigGuy\PiggyCustomEnchants\Main;
use pocketmine\plugin\PluginBase;

class EnchantmentsDisabler extends PluginBase{

	public function onEnable(){
		$this->saveDefaultConfig();

		/** @var Main $ce */
		$ce = $this->getServer()->getPluginManager()->getPlugin("PiggyCustomEnchants");

		foreach((array) $this->getConfig()->get("ids") as $id){
			$ce->unregisterEnchantment($id);
		}
	}
}
