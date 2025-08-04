<!DOCTYPE html>
<html>
    <head>
        <title>User Manager</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="container mt-5">
                    <h2 class="mb-4">Add New User</h2>

                    <form action="save.php" method="POST" class="mb-5">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" name="name" required class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="age" class="form-label">Age:</label>
                            <input type="number" name="age" required class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Save User</button>
                    </form>

                    <h3>Saved Users</h3>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Age</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $file = 'data.json';
                            if (file_exists($file)) {
                                $users = json_decode(file_get_contents($file), true);
                                $count = 1;
                                foreach ($users as $user) {
                                    echo "<tr>
                                <td>{$count}</td>
                                <td>{$user['name']}</td>
                                <td>{$user['age']}</td>
                              </tr>";
                                    $count++;
                                }
                            } else {
                                echo "<tr><td colspan='3'>No users found.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>

