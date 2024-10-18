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
        <h3>Dodaj ocenę</h3>
        <form action="ocena.php" method="post">
        <div>
            <label for="imie">Imię:</label>
            <input type="text" id="imie" name="imie">
        </div>
        <div>
            <label for="nazwisko">Nazwisko:</label>
            <input type="text" id="nazwisko" name="nazwisko">
        </div>
        <div>
            <label for="ocena">Ocena:</label>
            <input type="number" id="ocena" name="ocena">
        </div>
        <button onclick="zapisz()">Zapisz</button>
        </form>
        <?php
        if (isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['ocena'])) {
            $polaczenie = mysqli_connect('localhost', 'root', '', 'szkola');
            $imie = $_POST['imie'];
            $nazwisko = $_POST['nazwisko'];
            $ocena = $_POST['ocena'];

            $dane = "INSERT INTO matematyka (Imie, Nazwisko, Ocena) VALUES ('$imie', '$nazwisko', '$ocena')";
            $wynik = mysqli_query($polaczenie, $dane);
            mysqli_close($polaczenie);
        }
        ?>
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