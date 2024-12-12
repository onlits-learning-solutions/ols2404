<?php
function fetch_member($id)
{
    if ($id == 1)
        return ['id' => 1, 'name' => 'Sachin Kumar', 'email' => 'sachin.kumar@onlits.com'];
    else if ($id == 2)
        return ['id' => 2, 'name' => 'Ankit Kumar', 'email' => 'ankit.kumar@onlits.com'];
}