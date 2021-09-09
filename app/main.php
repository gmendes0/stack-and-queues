<?php
    class Stack {
        public $elements = [];

        public function __construct(int ...$element) {
            $this->elements = array_merge($this->elements, $element);
        }

        public function put(int $element): void
        {
            $this->elements = array_merge([$element], $this->elements);
        }

        public function unstack(): int
        {
            return array_shift($this->elements);
        }

        public function isEmpty(): bool
        {
            return empty($this->elements);
        }
    }

    $stack1 = new Stack(1, 2);
    $stack1->put(3);
    $stack1->put(5);

    var_dump($stack1->unstack(), $stack1->unstack(), $stack1->elements);
    die;