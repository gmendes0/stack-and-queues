<?php
    require_once ('queue.php');

    /**
     * s1 = [2, 1]
     * s2 = []
     * 
     * s1 = [1]
     * s2 = [2]
     * 
     * s1 = []
     * s2 = [1, 2]
     */

    $queue = new Queue();

    for ($i = 1; $i <= 5; $i++) {
        $queue->queue($i);
    }


    var_dump($queue->stack_1);

    echo "<br />";

    var_dump($queue->get());
    var_dump($queue->get());
    var_dump($queue->get());

    for ($i = 10; $i <= 15; $i++) {
        $queue->queue($i);
    }

    echo "<br />";

    var_dump($queue->get());
    var_dump($queue->get());
    var_dump($queue->get());

    echo "<br />";

    var_dump($queue->stack_2);
    die;