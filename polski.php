<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie bazy</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Dziennik</h1>
    </header>
    <main>
        <h3>J.Polski</h3>
       <section>
            <?php
$polaczenie = mysqli_connect('localhost', 'root', '', 'szkola');

$dane = "SELECT * FROM polski";

$wynik = mysqli_query($polaczenie, $dane);

while($polski = mysqli_fetch_assoc($wynik)){
    echo "<div id=\"blok\">Nr." . $polski['ID'] . "<br>Imię: " . $polski['Imie'] . "<br>Nazwisko: " . $polski ['Nazwisko'] . "<br>Ocena: " . $polski['Ocena'] . "</div>";
}
mysqli_close($polaczenie);
?>
<section>
    </main>
    <aside>
        <ul>
            <li><a href="index.php">Matematyka</a></li>
            <li><a href="polski.php">Język Polski</a></li>
            <li><a href="ocena.php">Dodaj ocenę</a></li>
        </ul>
    </aside>
    <footer>
    <p><a href="https://zsz.bobowa.pl/">ZSZ Bobowa</a></p>
    </footer>
</body>
</html>