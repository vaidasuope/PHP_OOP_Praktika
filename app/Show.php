<?php

namespace Vehicle;

class Show
{
    static public function ShowData($data){//negalima naudoti $this, nes nera kuriamas naujas objektas
        foreach ($data as $item){
            echo "<td>$item</td>";
        }
    }
}