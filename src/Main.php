<?php

declare(strict_types=1);

namespace YourName\PluginName;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {
   
   public function onLoad() :void {
     $this->getLogger()->info("Loading...");
   }
   
   public function onEnable() :void {
     $this->getLogger()->info("Enabled...");
   }
   
   public function onDisable() :void {
     $this->getLogger()->info("Disabled...");
   }
   
}
