<?php
    function renderCatCard($breed, $details): void {
        echo "<div class='cat-card'>";
        echo "<h2>$breed</h2>";
        echo "<img src='{$details['image']}' alt='$breed'>";
        echo "<p><strong>Origin:</strong> {$details['origin']}</p>";
        echo "<p><strong>Lifespan:</strong> {$details['lifespan']}</p>";
        echo "</div>";
    }