<?php

namespace lostteam\funeffects;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener {

    public function onEnable()
{
        $this->getLogger()->info("[FunEffects] Loaded!");
    }



    public function onCommand(CommandSender $sender, Command $command, $label, array $args)
{
        switch($command->getName()){
            case "flash":
                if (isset($args[0])) {
                    $sender->sendMessage("Use /flash");
                }
                else {
                    $effect = Effect::getEffect(1); 
        $effect->setVisible(flase); 
        $effect->setDuration(500); 
                }
      

           case "sick":
           if (isset($args[0])) {
                    $sender->sendMessage("Use /sick");
                }
                else {
                    $effect = Effect::getEffect(9); 
        $effect->setVisible(flase); 
        $effect->setDuration(500); 
                }
         break;

        }

    }




    public function onDisable(){
        $this->getLogger()->info("[FunEffects] Disabled!");

    }

}


