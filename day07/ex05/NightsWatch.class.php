<?php

    class NightsWatch implements IFighter {
        public $_fight;

        public function recruit($char) {
            if ($char instanceof IFighter) {
                $_fight = $char->fight();
            }
        }
        public function fight() {
        }
    }

?>