<?php

include "config.php";

$sql = "SELECT * FROM patients ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){

    $status = ($row['status'] == 1) ? "🟢 Active" : "🔴 Inactive";

    echo "
    <tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['age']}</td>
        <td>{$status}</td>
        <td>
            <button class='toggle-btn'
                onclick='toggleStatus({$row['id']})'>
                Toggle
            </button>
        </td>
    </tr>
    ";

}

?>