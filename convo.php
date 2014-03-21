<?php
class Conversation {

    // Property to hold name
    public $name = '';

    // Allow name to be set on instantiation
    function __construct($name = '')
    {
        $this->name = $name;
    }
    // Method to say hello to name
    function say_hello($new_line = FALSE) 
    {
        // Set the greeting name
        $greeting = "Hello {$this->name}";

        // Return the greeting, checking for newline
        return $new_line == TRUE ? "$greeting\n" : $greeting;
    }
}
// Create a new instance of Conversation
$chat = new Conversation('Codeup');
$talk = new Conversation('Barry');
$convo = new Conversation('Ben');
$speech = new Conversation();

var_dump($chat);
var_dump($talk);
var_dump($convo);
var_dump($speech);

// Output greeting to $name
echo $chat->say_hello();