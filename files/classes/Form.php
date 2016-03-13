<?php

    namespace hermas;


    class Form {
        private $name;
        private $type;
        private $value;

        /**
         * Form constructor.
         *
         * @param $name
         * @param $type
         */
        public function __construct($name, $type) {
            $this->name = $name;
            $this->type = $type;
        }

        /**
         * @return mixed
         */
        public function getName() {
            return $this->name;
        }

        /**
         * @param mixed $name
         */
        public function setName($name) {
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function getType() {
            return $this->type;
        }

        /**
         * @param mixed $type
         */
        public function setType($type) {
            $this->type = $type;
        }

        /**
         * @return mixed
         */
        public function getValue() {
            return $this->value;
        }

        /**
         * @param mixed $value
         */
        public function setValue($value) {
            $this->value = $value;
        }

    }