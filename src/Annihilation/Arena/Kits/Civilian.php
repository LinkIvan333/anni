<?php

namespace Annihilation\Arena\Kits;

use pocketmine\Player;
use Annihilation\Arena\Arena;
use pocketmine\item\Item;
use pocketmine\utils\TextFormat;

class Civilian implements Kit{
    
    public $plugin;
    public $players;
    public $name;
    
    public function __construct(Arena $arena){
        $this->plugin = $arena;
        $this->name = 'civilian';
    }
    
    public static function give(Player $p){
        /** @var Item[] $items */
        $items = [Item::get(268, 0, 1), Item::get(274, 0, 1), Item::get(275, 0, 1), Item::get(58, 0, 1), Item::get(345, 0, 1)];
        foreach ($items as $i => $item){
            $item->setCustomName(TextFormat::GOLD."SoulBound");
            $p->getInventory()->setItem($i, $item);
        }
        for($i = 0; $i < 7; $i++){
            $p->getInventory()->setHotbarSlotIndex($i, $i);
        }

        return $items;
    }
}