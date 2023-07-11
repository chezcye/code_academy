<?php
// Create a function generateStory with three input parameters: $singular_noun, $verb, $color
function generateStory($singular_noun, $verb, $color, $distance_unit) {
  // Create a variable $story and assign it the last stanza of Robert Frost’s “Stopping by Woods on a Snowy Evening”. Use newlines (\n) to ensure the lines break in the right location. 
  // Within the function, change the $story string so that it parses the $singularNoun variable where the word wood currently is, $verb where the word sleep appears (both locations), and $color where dark appears.
  // Add one more parameter to the function and allow the word miles to be replaced with a $distance_unit when the function is called (both places).
  $story = "\nThe $singular_noun are lovely, $color and deep. \nBut I have promises to keep \nAnd $distance_unit to go before I $verb, 
\nAnd $distance_unit to go before I $verb.\n";
return $story;
}
// Print two separate invocations of generateStory with unique inputs. Use a singular noun, a verb, and a color, as the function parameters describe.
echo generateStory("dog", "dance", "pink", 9);
echo generateStory("teacher", "teaches", "blue", 8);
