<?php
$page = $_SERVER['PHP_SELF'];
//$sec = "10"; //this is the refresh time in seconds; for automatic email use a CronJob, disable this line and do not publish this file.
?>
<!DOCTYPE html>
<html>

<head>
<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
<style>
h1 {
    border-bottom: 3px solid #cc9900;
    color: #996600;
    font-size: 30px;
}
table, th , td {
    border: 1px solid grey;
    border-collapse: collapse;
    padding: 5px;
}
table tr:nth-child(odd) {
    background-color: #f1f1f1;
}
table tr:nth-child(even) {
    background-color: #ffffff;
}
</style>
</head>

<body>

<h1>Pokemon Spawn Coordinates</h1>
&#169; <?php echo date("Y");?> <a href="mailto:cronos_80@hotmail.com">Carlos Y. V&#233;lez</a> All Rights Reserved
<br><br>

<?php
$allPossible = array("", "Bulbasaur", "Ivysaur", "Venusaur", "Charmander", "Charmeleon", "Charizard", "Squirtle", "Wartortle", "Blastoise", "Caterpie", "Metapod", "Butterfree", "Weedle", "Kakuna", "Beedrill", "Pidgey", "Pidgeotto", "Pidgeot", "Rattata", "Raticate", "Spearow", "Fearow", "Ekans", "Arbok", "Pikachu", "Raichu", "Sandshrew", "Sandslash", "Nidoran♀", "Nidorina", "Nidoqueen", "Nidoran♂", "Nidorino", "Nidoking", "Clefairy", "Clefable", "Vulpix", "Ninetales", "Jigglypuff", "Wigglytuff", "Zubat", "Golbat", "Oddish", "Gloom", "Vileplume", "Paras", "Parasect", "Venonat", "Venomoth", "Diglett", "Dugtrio", "Meowth", "Persian", "Psyduck", "Golduck", "Mankey", "Primeape", "Growlithe", "Arcanine", "Poliwag", "Poliwhirl", "Poliwrath", "Abra", "Kadabra", "Alakazam", "Machop", "Machoke", "Machamp", "Bellsprout", "Weepinbell", "Victreebel", "Tentacool", "Tentacruel", "Geodude", "Graveler", "Golem", "Ponyta", "Rapidash", "Slowpoke", "Slowbro", "Magnemite", "Magneton", "Farfetch'd", "Doduo", "Dodrio", "Seel", "Dewgong", "Grimer", "Muk", "Shellder", "Cloyster", "Gastly", "Haunter", "Gengar", "Onix", "Drowzee", "Hypno", "Krabby", "Kingler", "Voltorb", "Electrode", "Exeggcute", "Exeggutor", "Cubone", "Marowak", "Hitmonlee", "Hitmonchan", "Lickitung", "Koffing", "Weezing", "Rhyhorn", "Rhydon", "Chansey", "Tangela", "Kangaskhan", "Horsea", "Seadra", "Goldeen", "Seaking", "Staryu", "Starmie", "Mr. Mime", "Scyther", "Jynx", "Electabuzz", "Magmar", "Pinsir", "Tauros", "Magikarp", "Gyarados", "Lapras", "Ditto", "Eevee", "Vaporeon", "Jolteon", "Flareon", "Porygon", "Omanyte", "Omastar", "Kabuto", "Kabutops", "Aerodactyl", "Snorlax", "Articuno", "Zapdos", "Moltres", "Dratini", "Dragonair", "Dragonite", "Mewtwo", "Mew", "Chikorita", "Bayleef", "Meganium", "Cyndaquil", "Quilava", "Typhlosion", "Totodile", "Croconaw", "Feraligatr", "Sentret", "Furret", "Hoothoot", "Noctowl", "Ledyba", "Ledian", "Spinarak", "Ariados", "Crobat", "Chinchou", "Lanturn", "Pichu", "Cleffa", "Igglybuff", "Togepi", "Togetic", "Natu", "Xatu", "Mareep", "Flaaffy", "Ampharos", "Bellossom", "Marill", "Azumarill", "Sudowoodo", "Politoed", "Hoppip", "Skiploom", "Jumpluff", "Aipom", "Sunkern", "Sunflora", "Yanma", "Wooper", "Quagsire", "Espeon", "Umbreon", "Murkrow", "Slowking", "Misdreavus", "Unown", "Wobbuffet", "Girafarig", "Pineco", "Forretress", "Dunsparce", "Gligar", "Steelix", "Snubbull", "Granbull", "Qwilfish", "Scizor", "Shuckle", "Heracross", "Sneasel", "Teddiursa", "Ursaring", "Slugma", "Magcargo", "Swinub", "Piloswine", "Corsola", "Remoraid", "Octillery", "Delibird", "Mantine", "Skarmory", "Houndour", "Houndoom", "Kingdra", "Phanpy", "Donphan", "Porygon2", "Stantler", "Smeargle", "Tyrogue", "Hitmontop", "Smoochum", "Elekid", "Magby", "Miltank", "Blissey", "Raikou", "Entei", "Suicune", "Larvitar", "Pupitar", "Tyranitar", "Lugia", "Ho-Oh", "Celebi", "NidoranF", "NidoranM");

$wishList = array("Articuno", "Zapdos", "Moltres", "Mewtwo", "Mew", "Quilava", "Typhlosion", "Feraligatr", "Pichu", "Cleffa", "Igglybuff", "Togepi", "Bellossom", "Politoed", "Jumpluff", "Unown", "Forretress", "Steelix", "Granbull", "Scizor", "Delibird", "Houndoom", "Kingdra", "Donphan", "Porygon2", "Smeargle", "Tyrogue", "Hitmontop", "Smoochum", "Elekid", "Magby", "Miltank", "Blissey", "Raikou", "Entei", "Suicune", "Larvitar", "Tyranitar", "Lugia", "Ho-Oh", "Celebi"); //this are the only pokemons that you are interested in getting

$rawFile = file_get_contents("http://www.pokesniper.org/newapiman.txt");
$removePrefix = substr($rawFile, 1,-3);	
$poke = explode('{',$removePrefix);
$badCount = count($poke);
$count = $badCount - 1;

$to = "your10digitmobilenumber@tmomail.net";
$subject = "Pokemon";

echo "<table>\n";
echo "\t<tr>";
echo "\n\t\t<th>Picture</th>";
echo "\n\t\t<th>Number</th>";
echo "\n\t\t<th>Name</th>";
echo "\n\t\t<th>Latitude</th>";
echo "\n\t\t<th>Longitude</th>";
//echo "\n\t\t<th>IV</th>";
echo "\n\t</tr>";

$x = 0;
foreach($poke as $pokemon) {
	$poke2[$x] = $pokemon . "<br>";
$x++;
}

$x=1;
while($x <= $count) {
	$params = preg_split("/(:|,)/", $poke2[$x]);
	if(in_array(substr($params[1],1,-1), $wishList, true) && substr($params[4],0,-1) > -74 && substr($params[4],0,-1) < -72) { //delimintations for Central Park, NY
//	if(in_array(substr($params[1],1,-1), $wishList, true)) { //no coordinates delimitation
//	if(in_array(substr($params[1],1,-1), $allPossible, true)) { //showing all pokemons
		echo "\n\t<tr>";
		if(array_search(substr($params[1],1,-1), $allPossible) == 252) { //parsing weird error
			echo "\n\t\t";
			echo '<td><img src="images/29.png" style="width:50px;height:50px;"></td>';
			echo "\n\t\t<td>29</td>";
			echo "\n\t\t<td>Nidoran♀</td>";
			echo "\n\t\t<td>" . round(substr($params[3],1),6) . "</td>";
			echo "\n\t\t<td>" . round(substr($params[4],0,-1),6) . "</td>";
		} elseif(array_search(substr($params[1],1,-1), $allPossible) == 253) { //parsing weird error
			echo "\n\t\t";
			echo '<td><img src="images/32.png" style="width:50px;height:50px;"></td>';
			echo "\n\t\t<td>32</td>";
			echo "\n\t\t<td>Nidoran♂</td>";
			echo "\n\t\t<td>" . round(substr($params[3],1),6) . "</td>";
			echo "\n\t\t<td>" . round(substr($params[4],0,-1),6) . "</td>";
		} else {
			echo "\n\t\t";
			echo '<td><img src="images/' . array_search(substr($params[1],1,-1), $allPossible) . '.png" style="width:50px;height:50px;"></td>';
			echo "\n\t\t<td>" . array_search(substr($params[1],1,-1), $allPossible) . "</td>";
			echo "\n\t\t<td>" . substr($params[1],1,-1) . "</td>";
			echo "\n\t\t<td>" . round(substr($params[3],1),6) . "</td>";
			echo "\n\t\t<td>" . round(substr($params[4],0,-1),6) . "</td>";
		}
		//echo "\n\t\t<td>" . substr($params[6],1,-2) . "</td>";
		echo "\n\t</tr>";
		
		$from = substr($params[1],1,-1) . "@yourdomain.com"; //emails will be arriving from each pokemonName@yourdomain.com
		$headers = "From:" . $from;
		
		mail($to,$subject . " " . array_search(substr($params[1],1,-1), $allPossible),round(substr($params[3],1),6) . "\n" . round(substr($params[4],0,-1),6), $headers);
	}
	$x++;
}
echo "\n</table>";
?>
<br>
Data taken from:<br><a href="http://www.pokesniper.org">http://www.pokesniper.org</a>
</body>
</html>
