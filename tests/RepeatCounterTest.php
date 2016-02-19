<?php
    require_once __DIR__ . '/../src/RepeatCounter.php';

    class ClassTest extends PHPUnit_Framework_TestCase
    {
        function test_countRepeat_oneWordNoMatch()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $phrase = 'cat';
            $word_to_count = 'dog';

            // Act
            $result = $test_RepeatCounter->CountRepeat($phrase, $word_to_count);

            // Assert
            $this->assertEquals( 0 , $result);
        }
        function test_countRepeat_oneWordOneMatch()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $phrase = 'cat';
            $word_to_count = 'cat';

            // Act
            $result = $test_RepeatCounter->CountRepeat($phrase, $word_to_count);

            // Assert
            $this->assertEquals( 1 , $result);
        }
        function test_countRepeat_simpleSentence()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $phrase = 'This cat is a special cat';
            $word_to_count = 'cat';

            // Act
            $result = $test_RepeatCounter->CountRepeat($phrase, $word_to_count);

            // Assert
            $this->assertEquals( 2 , $result);
        }
        function test_countRepeat_simpleSentenceCaseInsensitive()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $phrase = 'Cat food is f-ing expensive!';
            $word_to_count = 'cat';

            // Act
            $result = $test_RepeatCounter->CountRepeat($phrase, $word_to_count);

            // Assert
            $this->assertEquals( 1 , $result);
        }
        function test_countRepeat_specialCharacters()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $phrase = 'When i say "cat", you say "Cat!".';
            $word_to_count = 'cat';

            // Act
            $result = $test_RepeatCounter->CountRepeat($phrase, $word_to_count);

            // Assert
            $this->assertEquals( 2 , $result);
        }
        function test_countRepeat_noPartialMatches()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $phrase = 'There are four cats in the cathedral, but none of them are my cat.';
            $word_to_count = 'cat';

            // Act
            $result = $test_RepeatCounter->CountRepeat($phrase, $word_to_count);

            // Assert
            $this->assertEquals( 1 , $result);
        }
    }
 ?>
