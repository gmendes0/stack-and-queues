<?php
    require_once('stack.php');

    class Queue {
            public Stack $stack_1;
            public Stack $stack_2;

            public function __construct() {
                $this->stack_1 = new Stack();
                $this->stack_2 = new Stack();
            }

            public function queue(int $element): void
            {
                $this->stack_1->put($element);
            }

            public function get(): ?int
            {
                if ($this->stack_2->isEmpty())
                    while (!$this->stack_1->isEmpty()) {
                        $this->stack_2->put($this->stack_1->unstack());
                    }

                return $this->stack_2->unstack();
            }
        }