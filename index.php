<!-- - 
    è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 

movies: spiderman, avengers, iron man
-->

<?
class Movie{
    public $length;
    public $genre;
    public $name;

    // Costruttore
    public function __construct($_length, $_genre, $_name){
        $this->length = $_length;
        $this->genre = $_genre;
        $this->name = $_name;
    }

    public function printMovie(){
        echo "<h1>Il nome del film è: {$this->name}</h1>";
        echo "<h5>Il genere è: {$this->genre}</h5>";
        echo "<p>La durata è di: {$this->length} ore.</p>";
    }
}

    $firstMovie = new Movie(2, 'Fantascienza', 'Spiderman');
    $secondMovie = new Movie(3, 'Fantascienza', 'Avengers');
    $thirdMovie = new Movie(2.5, 'Fantascienza', 'Iron Man');

?>


<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <!-- Boostrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" href="./style.css">
</head>
<body class="container mt-5">

    Print statico ☺

    <h1>
        Il nome del primo film è:
        <?
            echo $firstMovie->name = 'Spiderman';
        ?>
    <h1>
    <h5>
        Il genere è:
        <?
            echo $firstMovie->genre = 'Fantascienza';
        ?>
    </h5>
    <p>
        La durata è di: <? echo $firstMovie->length = 2?> ore.
    </p>

    <h1>
        Il nome del secondo film è:
        <?
            echo $secondMovie->name = 'Avengers';
        ?>
    <h1>
    <h5>
        Il genere è:
        <?
            echo $secondMovie->genre = 'Fantascienza';
        ?>
    </h5>
    <p>
        La durata è di: <? echo $secondMovie->length = 3?> ore.
    </p>

    <h1>
        Il nome del terzo film è:
        <?
            echo $thirdMovie->name = 'Iron Man';
        ?>
    <h1>
    <h5>
        Il genere è:
        <?
            echo $thirdMovie->genre = 'Fantascienza';
        ?>
    </h5>
    <p>
        La durata è di: <? echo $thirdMovie->length = 2.5?> ore.
    </p>

   
    <div id="divider" class="text-center">
        ---
    </div>

    Print dinamico con funzione ☺
    <?
        $firstMovie->printMovie()
    ?>

    <?
        $secondMovie->printMovie()
    ?>
    <?
        $thirdMovie->printMovie()
    ?>



</body>
</html>