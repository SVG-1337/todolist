<?php
function getDatabaseConnexion() {
    try { 
        $user = 'id17592468_crud_app_evaluation';
        $password = '9wHl{XPQ^>QP?eHF';
        $pdo = new PDO('mysql:host=localhost;port=3306;dbname=id17592468_todo', $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch(PDOException $e) {
        print "erreur : " . $e->getMessage() . "<br/>";
        die();
    };
};


function getTasks() {
    $connexion = getDatabaseConnexion();
    $request = 'SELECT * FROM tasks';
    $tasks = $connexion->query($request);
    return $tasks;
}

function createTask($name, $status) {
    try {
        $connexion = getDatabaseConnexion();
        $request = "INSERT INTO tasks (nom, statusTask)
                    VALUES ('$name', '$status')";
        $connexion->exec($request);
    } catch (PDOException $e) {
        echo $request . '<br/>' . $e->getMessage();
    }
}

function readTask($id) {
    $connexion = getDatabaseConnexion();
    $request = "SELECT * from tasks where id = '$id'";
    $stmt = $connexion->query($request);
    $task = $stmt->fetchAll();
		if (!empty($task)) {
			return $task[0];
		}
}

function updateTask($id, $name, $status) {
    try {
        $connexion = getDatabaseConnexion();
        $request = "UPDATE tasks set 
                    nom = '$name',
                    statusTask = '$status'
                    where id = '$id'";
        $stmt = $connexion->query($request);
    }
    catch (PDOException $e) {
        echo $stmt . '<br>' . $e->getMessage();

    }
}

function deleteTask($id) {
    try {
        $connexion = getDatabaseConnexion();
        $request = "DELETE from tasks where id = '$id'";
        $stmt = $connexion->query($request);
    }
    catch (PDOException $e) {
        echo $stmt . "<br>" . $e->getMessage();
    }
}


function getNewTask() {
    $task['id'] = "";
    $task['nom'] = "";
    $task['statusTask'] = "";
}
?>