# Tests for Count Word

## By *Joe Karasek*

---

### About this file

_The following specs are written to test the functionality of CountRepeat, a method of the class RepeatCounter. This method is intended to take a phrase and count the instances of a given word appearing in that string.

This assignment is part of the week 2 code review for Level 2 PHP at Epicodus Code School._

---

### Specs for method CountRepeat

Test Number | Input Phrase | Input Word to Find| Output | Reason for Test
-|-|-|-
1 | "cat" | "dog" | 0 | Simplest case, one word with no special characters, does not match.
 2 | "cat" | "cat" | 1 | Next simplest case, one word with no special characters that does match.
 3 | "This cat is a special cat" | "cat" | 2 | Next simplest case, two words in a sentence with no special characters or case sensitivity.
 4 | "Cat food is really f-ing expensive" | "cat" | 1 | Testing case sensitivity, should catch the matching first word "Cat".
 5 | "When I say 'cat', you say 'Cat'!" | "cat" | 2 | Testing handling of special characters, should ignore quotes. Should also ignore quotes while still properly handling case sensitivity.
 6 | "There are four cats in the cathedral, but none of them are my cat." | "cat" | 1 | Testing if partial matches are ignored ( _cat_ -hedral and cat -s ).
