<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
foreach ($users as $user) {
    echo "<tr>";
    echo "<th>$user->ID</th>";
    echo "<td>$user->name</td>";
    echo "<td>$user->email</td>";
    echo "<td>$user->Password</td>";
    echo "<td>
    <button>Xem</button>
    <button>Sua</button>
    <button>Xoa</button>
    </td>";
    echo "</tr>";
}
?>
    </tbody>
</table>
