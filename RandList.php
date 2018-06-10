<?php

class RandList {

    CONST DEFAULT_SIZE = 10;
    CONST DEFAULT_COUNT = 10;

    /**
     * Returns a Universal Unique Identifier (UUID) 
     * @param $size = size of UUID
     * @param $type in (1 - digit, 2 letter)    
     */
    public static function GenerateUUID($size = self::DEFAULT_SIZE, $type = false)
    {
        $uuid = '';

        $type = ($type === false) ? 2 : $type; 
        for ($i = 0; $i < $size; $i++) {
            
            switch (rand(0,$type)) {
                case 0: $start = ord(0); $end = ord(9); break;
                case 1: $start = ord('a'); $end = ord('z');  break;
                case 2: $start = ord('A'); $end = ord('Z');  break;
                default : $start = ord(0); $end = ord(9); break;
            };

            $uuid .= chr(rand($start, $end));
        }

        return $uuid;
    }

    public static function LitsUUID($count = self::DEFAULT_COUNT, $size = self::DEFAULT_SIZE,  $type = false)
    {
        $codeList = array();

        while (count($codeList) < $count) {
            $codeList[] = self::GenerateUUID($size, $type);
        }

        return $codeList;
    }
}