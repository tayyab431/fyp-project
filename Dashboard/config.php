<?php

require __DIR__ . '/stripe-php-master/init.php';

$publishableKey="pk_test_51NcQTdK2CtZdKnJ6pXLqMXzLm3QYX8JquGvuMGeKr8qZa69IHniqtpLbS0mT2rT6OsbHiHn9svEcIYLUMzph8ebA004KfJFyni";

$secretKey="sk_test_51NcQTdK2CtZdKnJ69D9AQTFHs6YsNEC145xnxBhpDXfJKZJ9UwwS2Nz5msbGj90ao6LfPiDuqPeNiTsOPqzco12Y00QI8qINuj";

\Stripe\Stripe::setApiKey($secretKey);
?>