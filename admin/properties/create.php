<?php
require '../../includes/functions.php';
require '../../includes/config/database.php';


// DB Connection
$db = connectDB();

// DB consult
$dbConsult = "SELECT * FROM seller";
$result = mysqli_query($db, $dbConsult);

// validations
$errors = [];

// leave the data already filled in the form
$title = '';
$price = '';
$description = '';
$rooms = '';
$parklot = '';
$bathrooms = '';
$sellerId = '';

// send info to server after user add a property 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $rooms = $_POST['rooms'];
    $parklot = $_POST['parklot'];
    $bathrooms = $_POST['bathroom'];
    $sellerId = $_POST['sellerId'];
    $createdDate = date('Y/m/d');

    // ***empty data validation***
    if (!$title) {
        $errors[] = 'Debes ingresar un titulo a la propiedad';
    }
    ;
    if (!$price) {
        $errors[] = 'Debes ingresar un precio a la propiedad';
    }
    ;
    if (strlen($description) < 50) {
        $errors[] = 'Debes ingresar una descripción a la propiedad y debe contener al menos 50 caracteres';
    }
    ;
    if (!$rooms) {
        $errors[] = 'Debes ingresar la cantidad de habitaciones de la propiedad';
    }
    ;
    if (!$parklot) {
        $errors[] = 'Debes ingresar la cantidad de parqueaderos de la propiedad';
    }
    ;
    if (!$bathrooms) {
        $errors[] = 'Debes ingresar la cantidad de baños de la propiedad';
    }
    ;
    if (!$sellerId) {
        $errors[] = 'Debes seleccionar el vendedor de la propiedad';
    }
    ;
    //***end of data empty validation***
    // echo "<prev>";
    // var_dump($errors);
    // echo "</prev>";
    // exit;

    //verify if errors array is empty
    if (empty($errors)) {

        // Include form data into properties db

        $query = "INSERT INTO properties (title, price, description, rooms, parklot, bathrooms, created_date, seller_id) 
VALUES ('$title', '$price', '$description', '$rooms', '$parklot', '$bathrooms', '$createdDate', '$sellerId' )";

        // echo $query;
        $result = mysqli_query($db, $query);

        if ($result) {
            header("location: ../");
        }

        // if ($result) {
        //     echo "Correct Connection";
        // }
    }
}



templateInclude('header');
?>
<main class="container section">
    <h1>Create</h1>
    <a href="../index.php" class="btn green-btn">Volver</a>
    <?php
    foreach ($errors as $error):
        ?>
        <div class="alert error">
            <?php echo $error; ?>
        </div>
        <?php
    endforeach;
    ?>
    <form class="form" method="POST" action="../properties/create.php">
        <fieldset>
            <legend>Información General</legend>
            <label for="title">Titulo:</label>
            <input type="text" id="title" name="title" placeholder="Titulo Propiedad" value="<?php echo $title; ?>">
            <label for="price">Precio:</label>
            <input type="number" id="price" name="price" placeholder="Valor Propiedad" value="<?php echo $price; ?>">
            <label for="image">Imagen:</label>
            <input type="file" id="image" name="image" accept="image/jpeg, image/png">
            <label for="description">Descripción:</label>
            <textarea name="description" id="description"><?php echo $description; ?></textarea>
        </fieldset>
        <fieldset>
            <legend>Información de la Propiedad</legend>
            <label for="rooms">Habitaciones:</label>
            <input type="Number" id="rooms" name="rooms" placeholder="Cantidad de habitaciones" min="1" max="9"
                value="<?php echo $rooms; ?>" />
            <label for="parklot">Parqueaderos:</label>
            <input type="Number" id="parklot" name="parklot" placeholder="Cantidad de Parqueaderos" min="1" max="9"
                value="<?php echo $parklot; ?>" />
            <label for="bathroom">Baños:</label>
            <input type="Number" id="bathroom" name="bathroom" placeholder="Cantidad de Baños" min="1" max="9"
                value="<?php echo $bathrooms; ?>" />
        </fieldset>
        <fieldset>
            <legend>Vendedor</legend>
            <label for="sellerId">Vendedor:</label>
            <select name="sellerId" id="sellerId">
                <option value="">-- Seleccione --</option>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <option <?php echo $sellerId === $row['id'] ? 'selected' : ''; ?> value="<?php echo $row['id']; ?>">
                        <?php echo $row['seller_name'] . ' ' . $row['seller_lastname']; ?>
                    </option>
                <?php endwhile; ?>
            </select>
        </fieldset>
        <input type="submit" value="Crear Propiedad" class="btn green-btn">
    </form>
</main>
<?php
templateInclude('footer');
?>