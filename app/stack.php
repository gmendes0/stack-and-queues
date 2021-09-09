<?php
    class Stack {
            public $elements = [];

            public function __construct(?int ...$element) {
                $this->elements = array_merge($this->elements, $element);
            }

            public function put(int $element): void
            {
                $this->elements = array_merge([$element], $this->elements);
            }

            public function unstack(): ?int
            {
                return array_shift($this->elements);
            }

            public function isEmpty(): bool
            {
                return empty($this->elements);
            }
        }