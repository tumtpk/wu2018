<?php

class AI
{
    public static function process($text)
    {
        $result = [
            'gender' => self::getGender($text),
            'sentiment' => self::getSentiment($text),
            'rude_words' => self::getRudeWords($text),
            'languages' => self::getLanguages($text),
        ];
        return $result;
    }

    /**
     * @return string 'Male' or 'Female' or 'Unknown'
     */
    public static function getGender($text)
    {
        $male = ["ผม", "ครับ", "ว้าย"];
        $female = ["ฉัน", "คะ"];

        for ($i=0; $i < sizeof($male); $i++) {
            if (stripos($text, $male[$i]) !== false) {
                return 'Male';
            }
        }

        for ($i=0; $i < sizeof($female); $i++) {
            if (stripos($text, $female[$i]) !== false) {
                return 'Female';
            }
        }

        return 'Unknown';

    }

    /**
     * @return string 'Positive' or 'Neutral' or 'Negative'
     */
    public static function getSentiment($text)
    {
        $positive = ["สวย", "น่ารัก", "ดูดี", "สมบูรณ์แบบ", "beautiful", "cute", "perfect"];
        $negative = ["ไม่น่ารัก", "Unlovely"];

        for ($i=0; $i < sizeof($negative); $i++) {
            if (stripos($text, $negative[$i]) !== false) {
                return 'Negative';
            }
        }

        for ($i=0; $i < sizeof($positive); $i++) {
            if (stripos($text, $positive[$i]) !== false) {
                return 'Positive';
            }
        }

        return 'Neutral';
    }

    /**
     * @return array of all rude words in Thai
     */
    public static function getRudeWords($text)
    {
        $rudeWord = ["อี", "ไอ", "มึง", "กู"];
        $word = [];
        for ($i=0; $i < sizeof($rudeWord); $i++) {
            if (stripos($text, $rudeWord[$i]) !== false) {
                array_push($word, $rudeWord[$i]);
            }
        }
        return $word;
    }

    /**
     * @return array of languages (TH, EN)
     */
    public static function getLanguages($text)
    {
        $lang = [];
        if(preg_replace('/[^ก-๙]/ u','',$text)!="") {
            array_push($lang,"TH");
       }

       if(preg_replace('/[^a-z]/ u','',$text)!="") {
            array_push($lang,"EN");
       }

        return $lang;
    }
}
