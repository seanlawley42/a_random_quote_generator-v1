// PHP - Random Quote Generator
<?php
//Change the background color to create a dazzling, psychedelic showstopper of wonderment
function backgrounderz(){
    $uno = rand(0,255);
    $dos = rand(0,255);
    $tres = rand(0,255);
    $randomonium = "($uno, $dos, $tres)";
    echo $randomonium;
};
// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array (Yo dawg. I heard you like arrays...)
// Make the quotes interesting for yourself and whoever is reviewing the project
$quotes= [ 
$superQuoteArray1 = [
    "Source" => "All Might", 
    "Quote" => "If you feel yourself hitting up against your limit, remember for what cause you clench your fists... Remember why you started down this path, and let that memory carry you beyond your limit.", 
    "Originally From" => "<i>My Hero Academia</i>",
    "Year" => 2018,
],
$superQuoteArray2 = [
    "Source" => "Darth Vader", 
    "Quote" => "Be careful not to choke on your aspirations.", 
    "Originally From" => "<i>Star Wars: Rogue One</i>",
    "Year" => 2016,
],
$superQuoteArray3 = [
    "Source" => "Master Yoda", 
    "Quote" => "Do. Or do not. There is no try.", 
    "Originally From" => "<i>Star Wars: The Empire Strikes Back</i>",
    "Year" => 1980,
],
$superQuoteArray4 = [
    "Source" => "Niv-Mizzet", 
    "Quote" => "Don't just have an idea — have all of them.", 
    "Originally From" => "<i>Magic the Gathering: Gatecrash</i>",
    "Year" => 2013,
],
$superQuoteArray5 = [
    "Source" => "Batman", 
    "Quote" => "I have one power. I never give up.", 
    "Originally From" => "<i>Justice League: the Animated Series</i>",
    "Year" => 2003,
],
$superQuoteArray6 = [
    "Source" => "Iron Man", 
    "Quote" => "What am I even tripping for? Everything's gonna workout exactly the way it's supposed to.", 
    "Originally From" => "<i>Avengers: Endgame</i>",
    "Year" => 2019,
],
$superQuoteArray7 = [
    "Source" => "The Flash", 
    "Quote" => "When you stop trying to force the solution, it'll happen on its own.", 
    "Originally From" => "<i>Supergirl: World's Finest</i>",
    "Year" => 2016,
],
$superQuoteArray8 = [
    "Source" => "Peter B. Parker", 
    "Quote" => "Everyone knows that the best way to learn is under intense, life-threatening pressure!", 
    "Originally From" => "<i>Spider-Man: Into the Spider-Verse</i>",
    "Year" => 2018,
],
$superQuoteArray9 = [
    "Source" => "Stan Lee", 
    "Quote" => "I don’t have inspiration. I only have ideas. Ideas and deadlines.", 
    "Originally From" => "<i>Interview with the Washington Post</i>",
    "Year" => 2011,
],
$superQuoteArray10 = [
    "Source" => "Bob Ross", 
    "Quote" => "Talent is a pursued interest. In other words, anything that you're willing to practice, you can do.", 
    "Originally From" => "<i>The Joy of Painting</i>",
    "Year" => 2019,
],
$superQuoteArray11 = [
    "Source" => "Mister Rogers", 
    "Quote" => "There's no person in the whole world like you; and I like you just the way you are.", 
    "Originally From" => "<i>US Senate Testimony</i>",
    "Year" => 1969,
],
$superQuoteArray12 = [
    "Source" => "Vincent Van Gogh", 
    "Quote" => "Try to see what I see. We're so lucky we're still alive to see this beautiful world. ", 
    "Originally From" => "<i>Doctor Who</i>",
    "Year" => 2010,
],
];

// Create the getRandomQuote function and name it getRandomQuote
function getRandomQuote($array){
    return $array[rand(0,11)];
    };
// Create the printQuote funtion and name it printQuote
function printQuote(){
    global $quotes;
    $youreTheOneThatIWant = getRandomQuote($quotes);
    $theVeryBestQuote = "";
    $theVeryBestQuote .= '<p class= "quote">' . $youreTheOneThatIWant["Quote"] . "</p>";
    $theVeryBestQuote .= '<p class= "source">' . $youreTheOneThatIWant["Source"] . "</p>";
        if ($theVeryBestQuote["Originally From"]){
            $theVeryBestQuote .= '<span class= "citation">' . $youreTheOneThatIWant["Originally From"] . '</span>';
        };
        if ($theVeryBestQuote["Year"]){
            $theVeryBestQuote .= '<span class= "year">' . $youreTheOneThatIWant["Year"] . '</span>';
        };
        $theVeryBestQuote .= "</p>";
echo $theVeryBestQuote;
};
?>









