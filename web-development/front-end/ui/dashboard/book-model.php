<?php
function fetch_book($id)
{
    if ($id == 1)
        return ['id' => 1, 'title' => 'Let Us C', 'author' => 'Yashwant Kanetkar'];
    else if ($id == 2)
        return ['id' => 2, 'title' => 'Java - The Complete Reference', 'author' => 'Herbert Schildt'];
}