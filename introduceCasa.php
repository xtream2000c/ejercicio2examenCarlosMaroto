<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu principal</title>
    <meta author = "Carlos Maroto Castaño">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1> Inmobiliaria NOVENDONUNCANA S.A. </h1>
    </header>

    <nav class="navegador"> 
        <ul>
            <li><a href="introduceCasa.php">Introducir vivienda</a></li>
            <li><a href="consultaCasa.php">Consultar viviendas</a></li>
        </ul>
    </nav>
    
    <h3>Introducir una nueva vivienda</h3>

    <p>Introduzca los datos de la vivienda</p>

    <table>
    <form action="self" method="post">
        <tr>
            <td>
                <label for="tipo">Tipo de vivienda: </label>
            </td>
            <td>
                <select id="tipo" required>
                    <option value="piso"> Piso </option>
                    <option value="adosado"> Adosado </option>
                    <option value="chalet"> Chalet </option>
                    <option value="casa"> Casa </option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="zona">Zona: </label>
            </td>
            <td>
                <select id="zona" required>
                    <option value="centro"> Centro </option>
                    <option value="nervion"> Nervion </option>
                    <option value="triana"> Triana </option>
                    <option value="aljarafe"> Aljarafe </option>
                    <option value="aljarafe"> Macarena </option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="direccion">Direcion: </label>
            </td>
            <td>
                <input type="text" name="direccion" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="dormitorios">Numero de dormitorios: </label>
            </td>
            <td>
                <input type="radio" name="dormitorios">1</input>
                <input type="radio" name="dormitorios">2</input>
                <input type="radio" name="dormitorios" checked>3</input>
                <input type="radio" name="dormitorios">4</input>
                <input type="radio" name="dormitorios">5</input>
            </td>
        </tr>
        <tr>
            <td>
                <label for="precio">Precio: </label>
            </td>
            <td>
                <input type="number" name="precio" required> €</input>
            </td>
        </tr>
        <tr>
            <td>
                <label for="tamano">Tamaño: </label>
            </td>
            <td>
                <input type="number" name="tamano" required> metros cuadrados</input>
            </td>
        </tr>
        <tr>
            <td>
                <label for="extra">Extras (Marque los que procedan): </label>
            </td>
            <td>
                <input type="checkbox" name="extra[]" value="piscina"> Piscina</input>
                <input type="checkbox" name="extra[]" value="jardin"> Jardin</input>
                <input type="checkbox" name="extra[]" value="garage"> Garage</input>
            </td>
        </tr>
        <tr>
            <td>
                <label for="foto">Foto: </label>
            </td>
            <td>
            <input type="file" name="foto" accept="image/png, image/jpeg" class="input-100">
            </td>
        </tr>
        <tr>
            <td>
                <label for="observaciones">Observaciones: </label>
            </td>
            <td>
            <textarea name="observaciones" cols="30" rows="10"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit">
            </td>
        </tr>

    </table>





    </form>
</body>
</html>