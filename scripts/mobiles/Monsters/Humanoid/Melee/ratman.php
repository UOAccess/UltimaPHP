<?php

/**
 * Ultima PHP - OpenSource Ultima Online Server written in PHP
 * Version: 0.1 - Pre Alpha
 */

class Ratman extends Mobile {
    public function summon() {
        $this->name            = "ratman";
        $this->body            = 42;
        $this->type            = "";
        $this->flags           = 0x00;
        $this->color           = 0x00;
        $this->basesoundid     = 0;
        $this->str             = rand(96, 120);
        $this->dex             = rand(81, 100);
        $this->int             = rand(36, 60);
        $this->maxhits         = rand(58, 72);
        $this->hits            = $this->maxhits;
        $this->damage          = 4;
        $this->damageMax       = 5;
        $this->resist_physical = rand(25, 30);
        $this->resist_fire     = rand(10, 20);
        $this->resist_cold     = rand(10, 20);
        $this->resist_poison   = rand(10, 20);
        $this->resist_energy   = rand(10, 20);
        $this->karma           = -1500;
        $this->fame            = 1500;
        $this->virtualarmor    = 28;
        $this->walkSpeedFactor = 2;
    }
}