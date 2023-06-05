<?php

class Process
{
    public $data;
    
    /* Placeholder. If you need to communicate with data, like INSERT, UPDATE,
       DELETE, etc., put here. */

    public function read()
    {
        return $this->data;
    }

    public function insert()
    {
        // this->db->insert...

        // This is an example, after the data successfully fetched from DB.
        $this->data = 73244;
    }

    public function update()
    {
        // this->db->update...
    }

    public function delete()
    {
        // this->db->delete...
    }
}

?>