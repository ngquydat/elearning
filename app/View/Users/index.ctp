<h1>User manager</h1>
<p><?php echo $this->Html->link("Add User", array('action' => 'register')); ?></p>

<table class="table">
    <tr>
        <th>id</th>
        <th>username</th>
        <th>password</th>
        <th>created</th>
        <th>modified</th>
        <th>function</th>
    </tr>

<!-- $user配列をループして、投稿記事の情報を表示 -->

<?php foreach ($usersList as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $user['User']['username']; ?>
        </td>
        <td>
            <?php echo $user['User']['password']; ?>
        </td>
        <td>
            <?php echo $user['User']['created']; ?>
        </td>
        <td>
            <?php echo $user['User']['modified']; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Edit', array('action' => 'editUser', $user['User']['id'])); ?>
            <?php echo $this->Html->link('Del', array('action' => 'deleteUser', $user['User']['id'])); ?>
        </td>
    </tr>
<?php endforeach; ?>

</table>

