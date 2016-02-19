<?php
    class RepeatCounter
    {
        function CountRepeat($phrase, $word_to_count)
        {
            $count = 0;
            $words = explode(' ', $phrase);
            $word_to_count = strtolower($word_to_count);

            foreach ($words as $index => $word) {
                $word = strtolower($word);
                $word = preg_replace('/[^a-z]/' , '' , $word);
                if ($word == $word_to_count) {
                    $count++;
                }
            }
            
            return $count;
        }
    }
?>
