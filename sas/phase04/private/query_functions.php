<?php

function find_all_salamanders() {
    global $db;
    $sql = "SELECT * FROM salamander ";
    $sql .= "ORDER BY name ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result, $sql);
    return $result;
}

function find_all_salamanders_by_id($id) {
    global $db;
    $sql = "SELECT * FROM salamander ";
    $sql .= "WHERE id='" . $id . "'";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    $salamander = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $salamander;
}

function insert_salamander($salamander_name, $habitat, $description) {
    global $db;
    $sql = "INSERT INTO salamander ";
    $sql .= "(name, habitat, description) ";
    $sql .= "VALUES (";
    $sql .= "'" . $salamander_name ."',";
    $sql .= "'" .$habitat ."',";
    $sql .= "'" .$description."'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    // For INSERT statements, $result is true/false
    if($result) {
        return true;
    }

    else{
        // INSERT failed 
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
}

    function update_salamander($salamander) {
        global $db;
        $sql = "UPDATE salamander SET ";
        $sql .= "name='" . $salamander['names'] . "', ";
        $sql .= "habitat='" . $salamander['habitat'] . "', ";
        $sql .= "description='" . $salamander['description'] . "' ";
        $sql .= "WHERE id='" . $salamander['id'] . "' ";
        $sql .= "LIMIT 1";

        $result = mysqli_query($db, $sql);
        //for UPDATE statements, $result is true/false
        if($result) {
            return true;
        }
    
        else {
            // UPDATE failed 
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
        }
    
    }

function delete_salamander($id){
    global $db;
    $sql = "DELETE FROM salamander ";
    $sql .= "WHERE id ='" . $id . "' ";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);

    //For DELETE statements, $result is true/false
    if($result) {
        return true;
    }
    else {
         // DELETE failed 
         echo mysqli_error($db);
         db_disconnect($db);
         exit;
    }
}
