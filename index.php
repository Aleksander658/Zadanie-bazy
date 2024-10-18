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
        <h3>Matematyka</h3>
        <table border="1">
            <tr>
                <th>Nr</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Ocena</th>
            </tr>
            <?php
$polaczenie = mysqli_connect('localhost', 'root', '', 'szkola');

$dane = "SELECT * FROM matematyka";

$wynik = mysqli_query($polaczenie, $dane);

while($matematyka = mysqli_fetch_assoc($wynik)){
    echo "<tr><td>" . $matematyka['ID'] . "</td><td>" . $matematyka['Imie'] . "</td><td>" . $matematyka['Nazwisko'] . "</td><td>" . $matematyka['Ocena'] . "</td></tr>";
}

mysqli_close($polaczenie);
?>
        </table>
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