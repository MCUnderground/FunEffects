<?php

/*
 _              _  _____                    
| |    ___  ___| ||_   _|__  __ _ _ __ ___  
| |   / _ \/ __| __|| |/ _ \/ _` | '_ ` _ \ 
| |__| (_) \__ \ |_ | |  __/ (_| | | | | | |
|_____\___/|___/\__||_|\___|\__,_|_| |_| |_|
 */     
  
namespace lostteam\funeffects;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {
	
    public function onEnable(){
        $this->getLogger()->info("[FunEffects] Loaded!");
    }
	
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        switch($command->getName()){
            case "flash":
                if(!isset($args[0])) {
                    $sender->sendMessage("Use /flash");
                }
                else {
                    $effect = Effect::getEffect(1); 
				    $effect->setVisible(false); 
                    $effect->setDuration(500); 
                    $sender->sendPopup("Fast mode on!");
                }
      
           case "sick":
           if (!isset($args[0])) {
                    $sender->sendMessage("Use /sick");
                }
                else {
                    $effect = Effect::getEffect(9); 
					$effect->setVisible(false); 
					$effect->setDuration(500); 
       			    $sender->sendPopup("Seems like you're getting a cold!");
                }
           case "heal":
           if (!isset($args[0])) {
                    $sender->sendMessage("Use /heal");
                }
                else {
                    $effect = Effect::getEffect(10); 
					$effect->setVisible(false);
					$effect->setDuration(500); 
        			$sender->sendPopup("You've been healed.");
                }
                case "hulk":
           		if(!isset($args[0])) {
                    $sender->sendMessage("Use /hulk");
                }
                else {
                      $effect = Effect::getEffect(5); 
			          $effect->setVisible(false);
			          $effect->setDuration(500); 
		        $sender->sendPopup("You're strong like hulk!");
                }
                case "snail":
           		if(!isset($args[0])){
                    $sender->sendMessage("Use /snail");
				}
				else {
				$effect = Effect::getEffect(2);
				$effect->setVisible(false);
				$effect->setDuration(500);
		        $sender->sendPopup("You're a pretty slow snail!");
			}
            break;
        }
    }
    public function onDisable(){
        $this->getLogger()->info("[FunEffects] Disabled, did the server stop?");
    }
}
