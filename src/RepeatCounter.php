<?php
    class RepeatCounter
    {
        function CountRepeat($phrase, $word_to_count)
        {
            $count = 0;
            $phrase = explode(' ', $phrase);
            foreach ($phrase as $index => $word) {
                if ($word == $word_to_count) {
                    $count++;
                }
            }
            return $count;
        }
    }
?>
