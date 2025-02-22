// ... when the user lands on your site from Adcash ...
if (isset($_GET['cid'])) {
    $_SESSION['adcash_cid'] = $_GET['cid']; // Store cid in session
}

// ... after a successful conversion ...
$click_id = $_SESSION['adcash_cid']; // Retrieve cid from session
$revenue = get_order_total($order_id); // Get revenue from your system
$currency = get_currency($order_id);   // Get currency from your system

// ... rest of the postback code as before ...