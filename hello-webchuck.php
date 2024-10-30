<?php
/*
Plugin Name: Hello Webchuck
Plugin URI: https://gitlab.com/webpunks-wordpress/hello-webchuck
Description: This is just a simple plugin. When activated you will randomly see a quote from Chuck Norris in the upper right of your admin screen.
Author: webpunks
Author URI: https://www.webpunks.co
Version: 1.0.0
*/

function hello_webchuck_get_quote() {
	/** Some random quotes form Chuck Norris */
	$quotes = "Chuck Norris ist so männlich, dass seine Brusthaare Haare haben.
    Wenn Chuck Norris von einer Kugel getroffen wird, blutet nicht er, sondern die Kugel.
    Sie wollten Chuck Norris auf Mount Rushmore abbilden, aber der Granitfels war nicht hart genug für seinen Bart.
    Wenn Chuck Norris dividiert, dann bleibt kein Rest.
    Chuck Norris sucht nicht - er findet.
    Wer Angst vor dem Tod hat, kennt Chuck Norris nicht.
    Es gibt keine globale Erwärmung. Chuck Norris war kalt, also hat er die Sonne höher gedreht.
    Chuck Norris kennt die letzte Ziffer von Pi.
    Chuck Norris schläft nicht, er erhält seine Kampfkraft.
    Chuck Norris hat unter seinem Bart kein Kinn, sondern eine dritte Faust.
    Chuck Norris schaut nicht in den Spiegel, denn selbst Chuck Norris hat Angst vor Chuck Norris.
    Chuck Norris trinkt immer mit Strohhalm - er kann das Glas nicht greifen, weil er dazu seine Faust öffnen müsste.
    Chuck Norris duscht nicht. Niemals. Denn nicht einmal Schmutz wagt sich an ihn heran.
    Wenn Chuck Norris Liegestütze macht, stützt er sich nicht ab, er drückt die Erde nach unten.
    Chuck Norris ist so schnell, dass er einmal um die Welt rennen kann, um sich selbst gegen den Hinterkopf zu hauen.
    Chuck Norris hat einmal russisches Roulette mit einem komplett geladenen Colt gespielt - und gewonnen!
    Chuck Norris hat zwei Geschwindigkeiten: Laufen und Töten.
    Chuck Norris braucht weder Maus noch Tastatur. Er steckt einfach seinen rechten Zeigefinger in einen USB-Anschluss.
    Chuck Norris ist nicht Gott, denn Gott kennt Gnade.
    Chuck Norris kann einen Stuhl hochheben, auf dem er selber sitzt.
    Am siebten Tag machte Gott eine Pause, weil Chuck Norris seine Ruhe haben wollte.
    Chuck Norris kann deine Gedanken mit einem Löffel verbiegen.
    Einmal rupfte sich Chuck Norris ein Barthaar aus und spießte damit drei Männer auf.
    Chuck Norris sucht nicht bei Google. Google fragt Chuck Norris.
    Chuck Norris denkt nicht, er weiß.
    Chuck Norris ist gestern gestorben. Heute geht es ihm schon wieder besser.
    Wenn Chuck Norris ein Ei essen will, pellt er ein Huhn.
    Chuck Norris kann Fische ertränken.
    Chuck Norris läuft die 100 Meter in einer Sekunde. Er kennt eine Abkürzung.
    Kinder tragen nachts Superman-Schlafanzüge. Superman trägt nachts einen Chuck-Norris-Schlafanzug.
    Chuck Norris kann eine Drehtür zuschlagen.
    Chuck Norris isst keinen Honig, er kaut Bienen.
    Chuck Norris ist der Grund, weshalb sich das Universum ständig ausdehnt. Es will vor ihm fliehen.
    Chuck Norris ist so cool, dass es hinter ihm schneit.
    Die Evolutionstheorie ist falsch. Es gibt bloß eine Liste von Tierarten, denen Chuck Norris erlaubt, zu leben.
    Das Auto von Chuck Norris braucht kein Benzin. Es fährt aus Respekt.
    Chuck Norris kann ein Zweieck zeichnen.
    Wenn Chuck Norris mal Hunger auf Salat verspürt, isst er einen Vegetarier.
    Was geht den Opfern von Chuck Norris als letztes durch den Kopf? Sein Fuß!
    Wenn Kleine Kinder ins Bett gehen, schauen sie nach, ob Monster unter ihrem Bett sind. Wenn Monster ins Bett gehen, schauen sie, ob Chuck Norris unter ihrem Bett ist.
    Chuck Norris läuft bei Super Mario Land nach links.
    Chuck Norris spendet regelmäßig Blut, aber nie sein eigenes.
    Chuck Norris bracht keine Sonnenbrille. Die Sonne braucht eine Chuck-Norris-Brille.
    Gott sprach: 'Es werde Licht!' Chuck Norris antwortete: 'Sag bitte!'
    Chuck Norris war einmal in eine Messerstecherei verwickelt. Das Messer hat verloren.
    Chuck Norris spaltete das Universum mit einem Roundhouse-Kick.
    Wenn Chuck Norris in den Himmel blickt, schwitzen die Wolken vor Angst. Wir kennen das als Regen.
    Chuck Norris kann durch Null teilen.
    Chuck Norris hat alle Farben erfunden. Außer Rosa! Tom Cruise hat Rosa erfunden.
    Wenn Chuck Norris ins Wasser geht, wird er nicht nass. Das Wasser wird Chuck Norris.
    Hinter jedem erfolgreichen Mann steht eine Frau. Hinter jedem toten Mann steht Chuck Norris.
    Chuck Norris hat beim Schwimmen Amerika entdeckt.
    Chuck Norris hat keinen Schatten, die Wand möchte nur so aussehen wie er.
    Chuck Norris weiß, warum da Stroh liegt.
    Chuck Norris fährt ein Cabrio mit Dachgepäckträger.
    Es gibt feinliche Aliens. Sie warten nur, bis Chuck Norris tot ist, damit sie angreifen können.
    Chuck Norris schläft bei eingeschaltenem Licht. Aber nicht, weil Chuck Norris Angst vor der Dunkelheit hat, sondern weil die Dunkelheit Angst vor Chuck Norris hat.
    Chuck Norris braucht für einen Zahnstocher einen Waffenschein.
    Chuck Norris ist so cool, er hat mal einen Big Mac bei Burger King bestellt und ihn auch bekommen.
    MacGyver kann ein Flugzeug aus Gummi, Papier und Bindfaden bauen, aber Chuck Norris kann ihn töten und das Flugzeug nehmen.
    Selbst Chuck Norris kann nicht unter Wasser atmen. Er macht es trotzdem.
    Chuck Norris reiste in die Vergangenheit und zeugte sich selbst.
    Chuck Norris liest keine Bücher. Er starrt sie so lange an, bis ihm freiwillig sagen, was er wissen will.
    Chuck Norris schläft mit einem Kopfkissen unter seiner Waffe.
    Wenn Bruce Banner wütend ist, wird er zum Hulk. Wenn der Hulk wütend ist, wird er zu Chuck Norris.
    Chuck Norris trägt keine Uhr. Er entscheidet selbst, wie spät es ist.
    Chuck Norris und MacGyver können beide mit einer Lupe Feuer machen. Chuck Norris kann das aber auch bei absoluter Dunkelheit.
    Chuck Norris hat Nostradamus vorhergesehen.
    Legenden leben ewig. Chuck Norris lebt länger.
    Wenn Chuck Norris Dopingmittel nimmt, steigert sich die Leistung der Dopingmittel, nicht die von Chuck Norris.
    Chuck Norris benutzt den Aufzug auch im Brandfall.
    Wenn Chuck Norris umzieht, geht er nicht in eine andere Stadt, die Stadt kommt zu Chuck Norris.
    Chuck Norris wird nicht krank. Er bietet Viren einen Unterschlupf.
    Chuck Norris braucht keine Waschmaschine. Der Dreck verschwindet freiwillig von seinen Klamotten.
    Das Einzige, das Chuck Norris nicht kann, ist einen würdigen Gegner zu finden.
    Chuck Norris hat alle Pokemons gefangen - mit einem Festnetz-Telefon.
    Chuck Norris verwählt sich niemals - du gehst dort ans Telefon, wo er anruft.";

	// Here we split it into lines
	$q = explode( "\n", $quotes );

	// And then randomly choose a line
	return wptexturize( $q[ mt_rand( 0, count( $q ) - 1 ) ] );
}

// This method will retrieve and echo the quote
function hello_webchuck() {
    $quote = hello_webchuck_get_quote();
    $img = "../wp-content/plugins/hello-webchuck/admin/images/webchuck.jpg";
	echo "<div class='notice'><img class='webchuck-img' src='$img'><p id='webchuck'>$quote</p></div>";
}

// Now we set that function up to execute when the admin_notices action is called
add_action( 'admin_notices', 'hello_webchuck' );
// Additional we also add a shortcode to display it within posts
add_shortcode( 'shortcode_webchuck', 'hello_webchuck' );

// We add some css to position the container
function add_webchuck_css() {
	echo "<style type='text/css'>
	#webchuck {
        font-size: 12px;
		padding-left: 5px;
		padding-top: 5px;		
    }
    .webchuck-img {
        float:left;
        width:30px;
        height:30px;
        margin-right: 5px;
        margin-top: 3px;
    }
	</style>";
}

// Set the function to execute when the admin_head action is called
add_action( 'admin_head', 'add_webchuck_css' );

?>
