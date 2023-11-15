<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Informacje o użytkowniku i komponentach</h1>

    <form method="get" action="">
        <fieldset>
            <h2>Informacje o użytkowniku</h2>
            <h5>wszystkie pola w tej sekcji są wymagane.</h5>
            <label for="uname">Nazwa Użytkownika: </label>
            <input type="text" name="uname" id="uname" required>
            <br><br>
            <label for="pwd">Hasło: </label>
            <input type="password" name="pwd" id="pwd" required>
            <br><br>
            <label for="mail">E-mail: </label>
            <input type="mail" name="mail" id="mail" required>
            <br><br>
            <label for="color">Ulubiony kolor: </label>
            <input type="color" name="color" id="color" >
            <br><br>
            <fieldset>
            <p>Płeć:</p>
            <input type="radio" name="gender" id="male"  value="male">
            <label for="male">Mężczyzna</label>
            <br>
            <input type="radio" name="gender" id="female" value="female"  >
            <label for="female">Kobieta</label>
        </fieldset>
            

        </fieldset>
        <br>
        <fieldset>
            <h2>Informacje o komponentach komputera</h2>
            <label for="mtb">Model Płyty Głownej: </label>
            <input type="text" name="mtb" id="mtb">
            <br><br>
            <label for="cpu">Model Procesora: </label>
            <input type="text" name="cpu" id="cpu">
            <br><br>
            <label for="ram">Model Pamięci RAM: </label>
            <input type="text" name="ram" id="ram">
            <br><br>
            <label for="disc">Model Dysku: </label>
            <input type="text" name="disc" id="disc" >
            <br><br>
            <label for="gpu">Model Karty Graficznej: </label>
            <input type="text" name="gpu" id="gpu" >


        </fieldset>
        <br>
        <fieldset>
            <h2>Urządzeniach Peryferyjnych</h2>
            <label for="monitor">Monitor: </label>
            <input type="text" name="monitor" id="monitor">
            <br><br>
            <label for="Mouse">Mysz Komputerowa: </label>
            <input type="text" name="Mouse" id="Mouse">
            <br><br>
            <label for="keyb">Klawiatura: </label>
            <input type="text" name="keyb" id="keyb">
            <br><br>
            <label for="printr">Drukarka: </label>
            <input type="text" name="printr" id="printr" >
            <br><br>
            <label for="scnr">Skaner: </label>
            <input type="text" name="scnr" id="scnr" >


        </fieldset>
        <br><br>
        <input type="submit" value="Potwierdź">
        
    </form>
</body>
<!Formularz powinien zawierać informacje o użytkowniku oraz o komponentach
 komputera(procesorze, pamięci RAM, dysku, płycie głównej itp.)
  oraz urządzeniach peryferyjnych (monitor, drukarka, skaner, mysz itp.) 
Pogrupuj pola formularza wg. pozyskiwanych informacji (jw.)
Wykorzystaj wszystkie rodzaje pół formularza, 
szczególnie różne typy pól input 
(tekstowe, liczbowe, hasło, mail, wielokrotnego i jednokrotnego wyboru, 
kolor itp.)-->
</html>

