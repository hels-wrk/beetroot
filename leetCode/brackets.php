<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */

    function isValid($s)
    {
        $chars = ['[]','()', '{}'];
        $s = str_replace($chars, '', $s);

        if (empty($s)){
            return true;
        } elseif (strripos($s, '{}') || strripos($s, '[]') || strripos($s, '()')) {
            return $this->isValid($s);
        } else {
            return false;
        }

    }
}