<?php
include 'layout/header.php';

$usernameValue = $emailValue = $passError = "";
if ($_GET) {
    $usernameValue = $_GET['username'];
    $emailValue = $_GET['email'];
    $passError = $_GET['error'];
}

?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Please fill registration form!</h2>
            <form action="scripts/register.php" method="POST">
                <div class="form-floating my-2">
                    <input type="text" name="username" class="form-control" required
                        value="<?php echo $usernameValue ?>">
                    <label for="username">Username</label>
                </div>
                <div class="form-floating my-2">
                    <input type="email" class="form-control" name="email" required value="<?php echo $emailValue ?>">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating my-2">
                    <input type="password" name="password" class="form-control" required>
                    <label for="password">Password</label>
                </div>
                <div class="form-floating my-2">

                    <input type="password" name="confirmPassword" class="form-control" required>
                    <span class="badge bg-danger"><?php echo $passError ?></span>
                    <label for="confirmPassword">Confirm Password</label>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">Register</button>
            </form>
        </div>
    </div>
</div>

<?php include 'layout/footer.php' ?>

<!-- Sukurkite paveikslėlių galeriją. Naudojame Sample_system (arba kitą savo Bootstrap projektą).
Reikalavimai:
1. Forma su galimybe įkelti 4 paveikslėlius.
2. Paveikslėliai turi turėti pavadinimus kurie bus rodomi prie paveikslėlio. Visi 4 paveikslėliai turi būti įkelti. Validacija per PHP.
3. Formoje turi būti galimybė pasirinkti galerijos puslapio fono spalvą (trys spalvos, spalvas pasirenkate patys).
4. Paveikslėlių galerija turi turėti atskirą puslapį, kuriame bus rodomi paveikslėliai po įkėlimo į formą.
5. Galerijos puslapis turi būti tvarkingai sukurtas su Bootstrap. kaip ir forma.
Bonus:
1. Paveikslėlių galerija veikia visada, nepriklausomai nuo to ar į ją patenkame užpildę formą.  Pavadinimų gali nerodyti.
2. Paveikslėlius galima sukelti tik žinant slaptažodį.
Galutinis variantas turės būti sukeltas į Github.

Sukurkite KMI (Kūno masės indekso) skaičiuoklę. Vartotojui suvedus savo svorį ir ūgį į formą, turėtų parodyti jo KMI.
Reikalavimai:
1. Atskiras puslapis formai. PHP kodas ir atsakymas rodomas tame pačiame puslapyje.
2. Naudojame GET metodą
3. Rezultatas parodomas fone, kuris parodo ar KMI geras ar blogas. Geras - žalias, blogas - Raudonas.
4. KMI formulė - KMI=masė(kg)/(ūgis(m))^2. Optimalus svorio indeksas - nuo 18,5 iki 25. Jei indeksas mažesnis – žmogus per liesas, jei didesnis – turima antsvorio.

Sukurkite matavimo vienetų konverterį. Įvedus bet kurį matavimo vienetą, turi perskaičiuoti kitus.
Reikalavimai:
1. Atskiras puslapis formai. PHP kodas ir atsakymas rodomas tame pačiame puslapyje.
2. Naudojame POST metodą
3. Matavimo vienetus pasirinkti patiems. Temperatūra, atstumas, greitis ir pan.
4. Turi būti bent keturi matavimo vienetai-->