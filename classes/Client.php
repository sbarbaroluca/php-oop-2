<?php 
    class Client {
        private $name;
        private $surname;
        private $email;
        protected $age;
        protected $sconto = 0;

        function __construct($name, $surname, $email, $age = '')
        {
          $this->name = $name;
          $this->surname = $surname;
          $this->email = $email;
          $this->age = $age;
        }

        public function getSconto() {
          if ($this->age >= 50) {
              $this->sconto += 30;
          }
          return $this->sconto;
        }

    }
?>