
<?php
require 'config.php';

$page_title = 'PawCare | Grooming Hewan';

require 'header.php';
?>

<section class="hero">

    <div>

        <span class="eyebrow">
            CARE • CLEAN • COMFORT
        </span>

        <h1>
            Perawatan terbaik
            <br>
            untuk sahabat berbulu.
        </h1>

        <p>
            Pesan layanan grooming kucing dan anjing dengan mudah.
            Pilih ukuran, jenis layanan, serta jadwal yang sesuai.
        </p>

        <a class="button" href="<?= logged() ? 'booking.php' : 'login.php' ?>">
            Pesan Grooming
        </a>

    </div>

    <div class="hero-art">
        🐱
        <span>✦</span>
        🐶
    </div>

</section>

<section>

    <div class="section-head">

        <div>

            <span class="eyebrow">
                LAYANAN KAMI
            </span>

            <h2>
                Grooming sesuai kebutuhan
            </h2>

        </div>

    </div>

    <div class="cards">

        <article class="card">

            <div class="emoji">🫧</div>

            <h3>Mandi saja</h3>

            <p>
                Membantu menjaga kebersihan dan kesegaran hewan kesayangan.
            </p>

        </article>

        <article class="card">

            <div class="emoji">✂️</div>

            <h3>Full grooming</h3>

            <p>
                Perawatan lebih lengkap untuk tampil bersih, rapi, dan nyaman.
            </p>

        </article>

        <article class="card">

            <div class="emoji">📅</div>

            <h3>Pemesanan mudah</h3>

            <p>
                Pilih jadwal dan pantau status pesanan melalui akun Anda.
            </p>

        </article>

    </div>

</section>

<section class="price-note">

    <div>

        <h2>Harga transparan</h2>

        <p>
            Biaya menyesuaikan jenis hewan, ukuran, dan layanan yang dipilih.
        </p>

    </div>

    <a class="button secondary" href="booking.php">
        Lihat & Pesan
    </a>

</section>

<?php require 'footer.php'; ?>
