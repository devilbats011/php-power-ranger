<?php

namespace RandomPowerRanger;

    class RandomPowerRanger {

        public function getRandomPowerRanger() {
            $profiles = file_get_contents(__DIR__.'/data/powerRangerProfiles.json');
            $profiles = json_decode($profiles, true);
            $index = mt_rand(0,count($profiles)-1);
            return $profiles[$index];
        }
       
        public function profile() {
            $this->getRandomPowerRanger();
        } 
        
    }