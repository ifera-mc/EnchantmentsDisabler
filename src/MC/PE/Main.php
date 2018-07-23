<?php
namespace MC\PE;
use pocketmine\utils\config;
use pocketmine\plugin\PluginBase;

/**
 * S a i n i 1 4
 */
/**
 * Class Main
 * @package MC\PE
 */
class Main extends PluginBase
{
	/**@var config */
	public $cfg;
	public function onEnable()
	{
		if (!is_dir($this->getDataFolder())) {
			mkdir($this->getDataFolder());
		}
		$this->saveDefaultConfig();
		/** @var \PiggyCustomEnchants\Main $ce */
		$ce = $this->getServer()->getPluginManager()->getPlugin("PiggyCustomEnchants");
		$ids = $this->getConfig()->get("ids");
		foreach ($ids as $id) {
			$ce->unregisterEnchantment($id);
		}
	}
}
