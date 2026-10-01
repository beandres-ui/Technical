<section class="page-heading">
    <p class="eyebrow">ACCOUNT DIRECTORY</p>
    <h1>User Accounts</h1>
    <p>Sample staff records and their roles.</p>
</section>

<section class="card">
    <h2>Staff Members</h2>
    <p><?= count($users) ?> sample records</p>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th scope="col">Username</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Role</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?= esc($user['username']) ?></td>
                        <td><?= esc($user['full_name']) ?></td>
                        <td><?= esc($user['role']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>