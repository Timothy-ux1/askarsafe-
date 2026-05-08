<?php require_once 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASKAR SAFE  Safety Always</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="hero">
        <div class="container">
            <h1>ASKAR SAFE</h1>
            <p class="tagline">Safety Always</p>
            <a href="#pricing" class="btn">View Hosting Plans</a>
        </div>
    </header>

    <section id="pricing" class="pricing">
        <div class="container">
            <h2 class="section-title">Pricing Plans</h2>
            <div class="pricing-grid">
                <div class="price-card">
                    <h3>Free</h3>
                    <div class="price">UGX 0<span>/mo</span></div>
                    <ul>
                        <li>1 Website</li>
                        <li>500MB Storage</li>
                        <li>Standard Security</li>
                    </ul>
                    <button class="btn-alt">Get Started</button>
                </div>
                <div class="price-card featured">
                    <h3>Basic</h3>
                    <div class="price">UGX 30,000<span>/mo</span></div>
                    <ul>
                        <li>5 Websites</li>
                        <li>10GB SSD Storage</li>
                        <li>Enhanced Safety</li>
                    </ul>
                    <button class="btn">Choose Basic</button>
                </div>
                <div class="price-card">
                    <h3>Pro</h3>
                    <div class="price">UGX 50,000<span>/mo</span></div>
                    <ul>
                        <li>Unlimited Websites</li>
                        <li>100GB NVMe Storage</li>
                        <li>24/7 Priority Support</li>
                    </ul>
                    <button class="btn-alt">Go Pro</button>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section">
        <div class="container">
            <h2 class="section-title">GROUP H MEMBERS FOR THE WSA PROJECT</h2>
            <div class="table-wrapper">
             <table>
                    <tr><th>Name</th><th>Registration Number</th><th>Role</th><th>Subdomain</th></tr>
                    <?php
                    $stmt = $pdo->query("SELECT * FROM members ORDER BY id");
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr><td>{$row['name']}</td><td>{$row['registration_number']}</td><td>{$row['role']}</td><td>{$row['subdomain']}</td></tr>";
                    }
                    ?>
            </table>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2026 ASKAR SAFE. All rights reserved.</p>
    </footer>

</body>
</html>
