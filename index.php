<?php

abstract class Vertebrates {
    protected function printSpecialization() {
        echo "Sono un animale Vertebrato\n";
    }
}

abstract class WarmBlooded extends Vertebrates {
    protected function printSpecialization() {
        parent::printSpecialization();
        echo "Sono un animale a sangue caldo\n";
    }
}

abstract class ColdBlooded extends Vertebrates {
    protected function printSpecialization() {
        parent::printSpecialization();
        echo "Sono un animale a sangue freddo\n";
    }
}

// Sangue Caldo

class Mammals extends WarmBlooded {
    public function __construct() {
        $this->printSpecialization();
    }

    protected function printSpecialization() {
        parent::printSpecialization();
        echo "Roarrrr\n";
    }
}

class Birds extends WarmBlooded {
    public function __construct() {
        $this->printSpecialization();
    }

    protected function printSpecialization() {
        parent::printSpecialization();
        echo "Vooolareeee oooooh oh\n";
    }
}

// Sangue Freddo

class Fish extends ColdBlooded {
    public function __construct() {
        $this->printSpecialization();
    }

    protected function printSpecialization() {
        parent::printSpecialization();
        echo "Splash!\n";
    }
}

class Reptiles extends ColdBlooded {
    public function __construct() {
        $this->printSpecialization();
    }

    protected function printSpecialization() {
        parent::printSpecialization();
        echo "Posso parlare il serpentese!\n";
    }
}

class Amphibians extends ColdBlooded {
    public function __construct() {
        $this->printSpecialization();
    }

    protected function printSpecialization() {
        parent::printSpecialization();
        echo "Cra cra!\n";
    }
}

// $simba = new Mammals();
// $hawk = new Birds();
$magikarp = new Fish();
// $snake = new Reptiles();
// $frog = new Amphibians();

?>