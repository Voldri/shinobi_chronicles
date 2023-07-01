<?php

class MapObjectiveLocation {
    public function __construct(
        public string $name,
        public int $map_id,
        public int $x,
        public int $y,
        public string $image,
        public string $action_url = "",
        public string $action_message = "",
    ) {}
}