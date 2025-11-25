<?php
// Simple PHP API endpoint
header('Content-Type: application/json');
echo json_encode([
    'status' => 'success',
    'message' => 'PHP is working on Vercel!',
    'time' => date('Y-m-d H:i:s')
]);
