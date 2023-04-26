<?php
function saveUsuario($nombre, $email, $password)
{
    $db = getDatabase();
    $statement = $db->prepare("INSERT INTO usu(nombre, email, password) VALUES (?, ?, ?)");
    return $statement->execute([$nombre, $email, $password]);
}

function savePet($name, $description, $image, $precio, $cantidad)
{
    $db = getDatabase();
    $statement = $db->prepare("INSERT INTO pets(name, description, image, precio,  cantidad) VALUES (?, ?, ?, ?, ?)");
    return $statement->execute([$name, $description, $image, $precio,  $cantidad]);
}

function getPetsId($id)
{
    $db = getDatabase();
    $statement = $db->prepare("SELECT id, name, description, image, precio,  cantidad FROM pets WHERE id = ?");
    $statement->execute([$id]);
    return $statement->fetchObject();
}


function getPets()
{
    $db = getDatabase();
    $statement = $db->query("SELECT id, name, description, image, precio,  cantidad FROM pets");
    return $statement->fetchAll();
}
function deletePet($id)
{
    $db = getDatabase();
    $statement = $db->prepare("DELETE FROM pets WHERE id = ?");
    return $statement->execute([$id]);
}

function getDatabase()
{
    $password = getVarFromEnvironmentVariables("MYSQL_PASSWORD");
    $user = getVarFromEnvironmentVariables("MYSQL_USER");
    $dbName = getVarFromEnvironmentVariables("MYSQL_DATABASE_NAME");
    $database = new PDO('mysql:host=localhost;dbname=' . $dbName, $user, $password);
    $database->query("set names utf8;");
    $database->setAttribute(PDO::ATTR_EMULATE_PREPARES, FALSE);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    return $database;
}
function getVarFromEnvironmentVariables($key)
{
    if (defined("_ENV_CACHE")) {
        $vars = _ENV_CACHE;
    } else {
        $file = "env.php";
        if (!file_exists($file)) {
            throw new Exception("The environment file ($file) does not exists. Please create it");
        }
        $vars = parse_ini_file($file);
        define("_ENV_CACHE", $vars);
    }
    if (isset($vars[$key])) {
        return $vars[$key];
    } else {
        throw new Exception("The specified key (" . $key . ") does not exist in the environment file");
    }
}
