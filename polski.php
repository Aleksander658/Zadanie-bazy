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

$dane = "SELECT * FROM uczen";

$wynik = mysqli_query($polaczenie, $dane);

while($uczen = mysqli_fetch_assoc($wynik)){
    echo "<div id=\"blok\">Nr." . $uczen['ID'] . "<br>Imię: " . $uczen['Imie'] . "<br>Nazwisko: " . $uczen ['Nazwisko'] . "<br>Ocena: " . $uczen['Ocena'] . "</div>";
}
mysqli_close($polaczenie);
?>
<section>
    </main>
    <aside>
        <ul>
            <li><a href="index.php">Matematyka</a></li>
            <li><a href="polski.php">Język Polski</a></li>
            <li>Język Angielski</li>
        </ul>
    </aside>
    <footer>
        <p>ZSZ Bobowa</p>
    </footer>
</body>

</html>