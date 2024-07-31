<?php

namespace App\Table;

use Core\Table\Table;

class EventTable extends Table
{
    public function EventDESCDate()
    {
        return $this->query("SELECT * FROM events
        WHERE date >= CURDATE()
        ORDER BY date ASC");
    }
}
