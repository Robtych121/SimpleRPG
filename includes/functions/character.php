<?php
# Gets character stats from db
# Type 1 = Max HP
# Type 2 = Current HP
# Type 3 = Max Energy
# Type 4 = Current Energy
# Type 5 = Max Experience
# Type 6 = Current Experience
# Type 7 = Current Level
# Type 8 = Character ID
# Type 9 = Gold
# Type 10 = Name
function getCharacterStats($input, $type){
    include 'includes/config/db_connection.php';

    if($type == '1'){
        $stmt = $conn->prepare('SELECT max_hp FROM characters WHERE user_id =? AND active = 1 LIMIT 1');
        $stmt -> bind_param('s', $input);
        $stmt -> execute();
        $stmt -> store_result();
        $stmt -> bind_result($output);
        $stmt -> fetch();
        $stmt -> close();
        return $output;
    }

    if($type == '2'){
        $stmt = $conn->prepare('SELECT current_hp FROM characters WHERE user_id =? AND active = 1 LIMIT 1');
        $stmt -> bind_param('s', $input);
        $stmt -> execute();
        $stmt -> store_result();
        $stmt -> bind_result($output);
        $stmt -> fetch();
        $stmt -> close();
        return $output;
    }

    if($type == '3'){
        $stmt = $conn->prepare('SELECT max_energy FROM characters WHERE user_id =? AND active = 1 LIMIT 1');
        $stmt -> bind_param('s', $input);
        $stmt -> execute();
        $stmt -> store_result();
        $stmt -> bind_result($output);
        $stmt -> fetch();
        $stmt -> close();
        return $output;
    }

    if($type == '4'){
        $stmt = $conn->prepare('SELECT current_energy FROM characters WHERE user_id =? AND active = 1 LIMIT 1');
        $stmt -> bind_param('s', $input);
        $stmt -> execute();
        $stmt -> store_result();
        $stmt -> bind_result($output);
        $stmt -> fetch();
        $stmt -> close();
        return $output;
    }

    if($type == '5'){
        $stmt = $conn->prepare('SELECT max_exp FROM characters WHERE user_id =? AND active = 1 LIMIT 1');
        $stmt -> bind_param('s', $input);
        $stmt -> execute();
        $stmt -> store_result();
        $stmt -> bind_result($output);
        $stmt -> fetch();
        $stmt -> close();
        return $output;
    }

    if($type == '6'){
        $stmt = $conn->prepare('SELECT current_exp FROM characters WHERE user_id =? AND active = 1 LIMIT 1');
        $stmt -> bind_param('s', $input);
        $stmt -> execute();
        $stmt -> store_result();
        $stmt -> bind_result($output);
        $stmt -> fetch();
        $stmt -> close();
        return $output;
    }
    if($type == '7'){
        $stmt = $conn->prepare('SELECT level FROM characters WHERE user_id =? AND active = 1 LIMIT 1');
        $stmt -> bind_param('s', $input);
        $stmt -> execute();
        $stmt -> store_result();
        $stmt -> bind_result($output);
        $stmt -> fetch();
        $stmt -> close();
        return $output;
    }

    if($type == '8'){
        $stmt = $conn->prepare('SELECT id FROM characters WHERE user_id =? AND active = 1 LIMIT 1');
        $stmt -> bind_param('s', $input);
        $stmt -> execute();
        $stmt -> store_result();
        $stmt -> bind_result($output);
        $stmt -> fetch();
        $stmt -> close();
        return $output;
    }

    if($type == '9'){
        $stmt = $conn->prepare('SELECT gold FROM characters WHERE user_id =? AND active = 1 LIMIT 1');
        $stmt -> bind_param('s', $input);
        $stmt -> execute();
        $stmt -> store_result();
        $stmt -> bind_result($output);
        $stmt -> fetch();
        $stmt -> close();
        return $output;
    }

    if($type == '10'){
        $stmt = $conn->prepare('SELECT charname FROM characters WHERE user_id =? AND active = 1 LIMIT 1');
        $stmt -> bind_param('s', $input);
        $stmt -> execute();
        $stmt -> store_result();
        $stmt -> bind_result($output);
        $stmt -> fetch();
        $stmt -> close();
        return $output;
    }
}

function updateCharacter($char_id, $current_hp, $current_energy, $current_exp) {
    include 'includes/config/db_connection.php';
    $stmt = $conn->prepare('UPDATE characters SET current_hp= ?, current_energy=?, current_exp=? WHERE id = ?');
    $stmt -> bind_param('ssss', $current_hp, $current_energy, $current_exp, $char_id);
    $stmt -> execute();
    $stmt -> close();
    
}

?>