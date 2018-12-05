<?php
$string = file_get_contents("nw.json");
$data = json_decode($string, true);

echo $data($string);

class Dijkstra
{
    /** @var integer[][] The graph, where $graph[node1][node2]=cost */
    protected $graph;
    /** @var int[] Distances from the source node to each other node */
    protected $distance;
    /** @var string[][] The previous node(s) in the path to the current node */
    protected $previous;
    /** @var int[] Nodes which have yet to be processed */
    protected $queue;

    /**
     * @param integer[][] $graph
     */
    public function __construct($graph)
    {
        $this->graph = $graph;
    }
}
