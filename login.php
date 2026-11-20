
<?php
require 'config.php';

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $s = $pdo->prepare('SELECT * FROM users WHERE email = ?');
    $s->execute([trim($_POST['email'])]);

    $u = $s->fetch();

    if ($u && password_verify($_POST['password'], $u['password'])) {

        session_regenerate_id(true);

        $_SESSION['user'] = [
            'id' => $u['id'],
            'name' => $u['name'],
            'email' => $u['email'],
            'role' => $u['role']
        ];

        header('Location: ' . ($u['role'] === 'admin' ? 'admin.php' : 'index.php'));
        exit;

    } else {
        $error = 'Email atau password salah.';
    }
}

$page_title = 'Masuk';

require 'header.php';
?>

<div class="auth">

    <h1>Selamat datang 👋</h1>

    <p>Masuk ke akun PawCare.</p>

    <?php if (isset($_GET['registered'])): ?>
        <div class="success">
            Pendaftaran berhasil. Silakan masuk.
        </div>
    <?php endif; ?>

    <?php if ($error): ?>
        <div class="alert">
            <?= e($error) ?>
        </div>
    <?php endif; ?>

    <form method="post">

        <label>Email</label>
        <input type="email" name="email" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button class="button full">Masuk</button>

    </form>

    <p>
        Belum punya akun?
        <a href="register.php">Daftar</a>
    </p>

</div>

<?php require 'footer.php'; ?>
