<?php
// PHP - Random Quote Generator
//Change the background color to create a dazzling, psychedelic showstopper of wonderment
function backgrounderz(){
    $uno = rand(0,215);
    $dos = rand(0,215);
    $tres = rand(0,215);
    $randomonium = "($uno, $dos, $tres)";
    echo $randomonium;
};
// Create the Multidimensional array of quote elements and name it quotes
// Each inner array element should be an associative array (Yo dawg. I heard you like arrays...)
// Make the quotes interesting for yourself and whoever is reviewing the project
$quotes= [ 
$superQuoteArray1 = [
    "source" => "All Might", 
    "quote" => "If you feel yourself hitting up against your limit, remember for what cause you clench your fists... Remember why you started down this path, and let that memory carry you beyond your limit.", 
    "citation" => "<i>My Hero Academia</i>",
    "year" => 2018,
    "medium" => "Anime",
],
$superQuoteArray2 = [
    "source" => "Darth Vader", 
    "quote" => "Be careful not to choke on your aspirations.", 
    "citation" => "<i>Star Wars: Rogue One</i>",
    "year" => 2016,
    "medium" => "Film",
],
$superQuoteArray3 = [
    "source" => "Master Yoda", 
    "quote" => "Do. Or do not. There is no try.", 
    "citation" => "<i>Star Wars: The Empire Strikes Back</i>",
    "year" => 1980,
    "medium" => "Film",
],
$superQuoteArray4 = [
    "source" => "Niv-Mizzet", 
    "quote" => "Don't just have an idea — have all of them.", 
    "citation" => "<i>Magic the Gathering: Gatecrash</i>",
    "year" => 2013,
    "medium" => "Game",
],
$superQuoteArray5 = [
    "source" => "Batman", 
    "quote" => "I have one power. I never give up.", 
    "citation" => "<i>Justice League: the Animated Series</i>",
    "year" => 2003,
    "medium" => "Cartoon",
],
$superQuoteArray6 = [
    "source" => "Iron Man", 
    "quote" => "What am I even tripping for? Everything's gonna workout exactly the way it's supposed to.", 
    "citation" => "<i>Avengers: Endgame</i>",
    "year" => 2019,
    "medium" => "Film",
],
$superQuoteArray7 = [
    "source" => "The Flash", 
    "quote" => "When you stop trying to force the solution, it'll happen on its own.", 
    "citation" => "<i>Supergirl: World's Finest</i>",
    "year" => 2016,
    "medium" => "Television",
],
$superQuoteArray8 = [
    "source" => "Peter B. Parker", 
    "quote" => "Everyone knows that the best way to learn is under intense, life-threatening pressure!", 
    "citation" => "<i>Spider-Man: Into the Spider-Verse</i>",
    "year" => 2018,
    "medium" => "Film",
],
$superQuoteArray9 = [
    "source" => "Stan Lee", 
    "quote" => "I don’t have inspiration. I only have ideas. Ideas and deadlines.", 
    "citation" => "<i>Interview with the Washington Post</i>",
    "year" => 2011,
    "medium" => "Newspaper",
],
$superQuoteArray10 = [
    "source" => "Bob Ross", 
    "quote" => "Talent is a pursued interest. In other words, anything that you're willing to practice, you can do.", 
    "citation" => "<i>The Joy of Painting</i>",
    "year" => 2019,
    "medium" => "Television",
],
$superQuoteArray11 = [
    "source" => "Mister Rogers", 
    "quote" => "There's no person in the whole world like you; and I like you just the way you are.", 
    "citation" => "<i>US Senate Testimony</i>",
    "year" => 1969,
    "medium" => "Public Record",
],
$superQuoteArray12 = [
    "source" => "Vincent Van Gogh", 
    "quote" => "Try to see what I see. We're so lucky we're still alive to see this beautiful world. ", 
    "citation" => "<i>Doctor Who</i>",
    "year" => 2010,
    "medium" => "Television",
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
    $theVeryBestQuote .= '<p class= "quote">' . $youreTheOneThatIWant["quote"] . "</p>";
    $theVeryBestQuote .= '<p class= "source">' . $youreTheOneThatIWant["source"];
        if ($theVeryBestQuote["citation"]){
            $theVeryBestQuote .= '<span class= "citation">' . $youreTheOneThatIWant["citation"] . '</span>';
        };
        if ($theVeryBestQuote["year"]){
            $theVeryBestQuote .= '<span class= "year">' . $youreTheOneThatIWant["year"] . '</span>';
        };
        if ($theVeryBestQuote["medium"]){
            $theVeryBestQuote .= '<span class= "medium">' . $youreTheOneThatIWant["medium"] . '</span>';
        };
        $theVeryBestQuote .= "</p>";
echo $theVeryBestQuote;
};
?>









