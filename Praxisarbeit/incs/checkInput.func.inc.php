<?php
    function checkInput(array $array){
        $d = true;
        foreach ($array as $key => $value) {
            $d &= !empty($value);
        }
        return $d;
    }
?>