<?php
    class Makanan {
        protected $type;
        protected $rasa;

        protected function __construct($type, $rasa) {
            $this->type = $type;
            $this->rasa = $rasa;
        }

        protected function getInfo() {
            echo "Jenis Makanan: " . $this->type . "<br>";
            echo "Rasa Makanan: " . $this->rasa . "<br>";
        }
    }

    class Mie_Ayam extends Makanan {
        public $asal;

        public function __construct($type, $rasa, $asal) {
            parent::__construct($type, $rasa);
            $this->asal = $asal;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Asal Makanan: " . $this->asal . "<br>";
        }
    }

    class Sushi extends Makanan {
        public $asal;

        public function __construct($type, $rasa, $asal) {
            parent::__construct($type, $rasa);
            $this->asal = $asal;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Asal Makanan: " . $this->asal . "<br>";
        }
    }

    class Pizza extends Makanan {
        public $asal;

        public function __construct($type, $rasa, $asal) {
            parent::__construct($type, $rasa);
            $this->asal = $asal;
        }

        public function getInfo() {
            parent::getInfo();
            echo "Asal Makanan: " . $this->asal . "<br>";
        }
    }


?>