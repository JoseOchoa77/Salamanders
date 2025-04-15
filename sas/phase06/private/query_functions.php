<?php
include_once("initialize.php");

function find_all_salamanders() {
    global $db;
    $sql = "SELECT * FROM salamander ";
    $sql .= "ORDER BY name ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function find_salamander_by_id($id) {
    global $db;
    // Validate that $id is numeric
    if (!is_numeric($id)) {
        return null; // Return null if $id is not valid
    }

    // Use a prepared statement
    $sql = "SELECT * FROM salamander WHERE id = ? LIMIT 1";
    $stmt = mysqli_prepare($db, $sql);

    // Bind the parameter (i = integer)
    mysqli_stmt_bind_param($stmt, 'i', $id);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Get the result
    $result = mysqli_stmt_get_result($stmt);

    // Fetch the salamander record
    $salamander = mysqli_fetch_assoc($result);

    // Free the result and close the statement
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);

    return $salamander ? $salamander : null; // Return null if no record is found
}

function find_all_salamanders_by_id($id) {
    global $db;
    // Validate that $id is numeric
    if (!is_numeric($id)) {
        return null; // Return null if $id is not valid
    }

    // Use a prepared statement
    $sql = "SELECT * FROM salamander WHERE id = ? LIMIT 1";
    $stmt = mysqli_prepare($db, $sql);

    // Bind the parameter (i = integer)
    mysqli_stmt_bind_param($stmt, 'i', $id);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Get the result
    $result = mysqli_stmt_get_result($stmt);

    // Fetch the salamander record
    $salamander = mysqli_fetch_assoc($result);

    // Free the result and close the statement
    mysqli_free_result($result);
    mysqli_stmt_close($stmt);

    return $salamander ? $salamander : null; // Return null if no record is found
}
function validate_salamander($salamander) {
    $errors = [];

    // salamander name
    if(is_blank($salamander['name'])) {
      $errors[] = "Name cannot be blank.";
    } elseif(!has_length($salamander['name'], ['min' => 2, 'max' => 255])) {
      $errors[] = "Name must be between 2 and 255 characters.";
    }
    // salamander Desc.
    if(is_blank($salamander['description'])) {
        $errors[] = "Description cannot be blank.";
      } elseif(!has_length($salamander['description'], ['min' => 2, 'max' => 255])) {
        $errors[] = "Description must be between 2 and 255 characters.";
      }

      // salamander Habitat
      if(is_blank($salamander['habitat'])) {
        $errors[] = "Habitat cannot be blank.";
      } elseif(!has_length($salamander['habitat'], ['min' => 2, 'max' => 255])) {
        $errors[] = "Habitat must be between 2 and 255 characters.";
      }
    return $errors;
  }

function insert_salamander($salamander) {
   global $db;

   // Validate the salamander data
   $errors = validate_salamander($salamander);
   if (!empty($errors)) {
       return $errors;
   }

   // Use a prepared statement
   $sql = "INSERT INTO salamander (name, habitat, description) VALUES (?, ?, ?)";
   $stmt = mysqli_prepare($db, $sql);

   // Bind the parameters (s = string)
   mysqli_stmt_bind_param($stmt, 'sss', $salamander['name'], $salamander['habitat'], $salamander['description']);

   // Execute the statement
   $result = mysqli_stmt_execute($stmt);

   // Check the result
   if ($result) {
       return true;
   } else {
       echo mysqli_error($db);
       db_disconnect($db);
       exit();
   }

   // Close the statement
   mysqli_stmt_close($stmt);
}

function update_salamander($salamander) {
    global $db;

     // Validate the salamander data
     $errors = validate_salamander($salamander);
     if (!empty($errors)) {
         return $errors;
     }
 
     // Use a prepared statement
     $sql = "UPDATE salamander SET name = ?, habitat = ?, description = ? WHERE id = ? LIMIT 1";
     $stmt = mysqli_prepare($db, $sql);
 
     // Bind the parameters (s = string, i = integer)
     mysqli_stmt_bind_param($stmt, 'sssi', $salamander['name'], $salamander['habitat'], $salamander['description'], $salamander['id']);
 
     // Execute the statement
     $result = mysqli_stmt_execute($stmt);
 
     // Check the result
     if ($result) {
         return true;
     } else {
         echo mysqli_error($db);
         db_disconnect($db);
         exit();
     }
 
     // Close the statement
     mysqli_stmt_close($stmt);
 }

function delete_salamander($id) {
    global $db;
    // Validate that $id is numeric
    if (!is_numeric($id)) {
        return false; // Return false if $id is not valid
    }

    // Use a prepared statement
    $sql = "DELETE FROM salamander WHERE id = ? LIMIT 1";
    $stmt = mysqli_prepare($db, $sql);

    // Bind the parameter (i = integer)
    mysqli_stmt_bind_param($stmt, 'i', $id);

    // Execute the statement
    $result = mysqli_stmt_execute($stmt);

    // Check the result
    if ($result) {
        return true;
    } else {
        echo mysqli_error($db);
        db_disconnect($db);
        exit();
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
   