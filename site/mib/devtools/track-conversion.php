<?php
/**
 * Endpoint para Tracking de Conversões A/B
 * Recebe dados de conversão via AJAX
 */

// Configurar headers para CORS
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Incluir configurações
require_once __DIR__ . '/../includes/ab-testing-implementation.php';

// Verificar se é uma requisição POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Método não permitido']);
    exit;
}

// Obter dados JSON
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Validar dados
if (!$data || !isset($data['test_id']) || !isset($data['variant']) || !isset($data['goal'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Dados inválidos']);
    exit;
}

// Preparar dados para salvamento
$conversion_data = [
    'test_id' => $data['test_id'],
    'variant' => $data['variant'],
    'goal' => $data['goal'],
    'page_url' => $data['page_url'] ?? $_SERVER['HTTP_REFERER'] ?? '',
    'user_agent' => $data['user_agent'] ?? $_SERVER['HTTP_USER_AGENT'] ?? '',
    'ip_address' => $_SERVER['REMOTE_ADDR'] ?? '',
    'timestamp' => date('Y-m-d H:i:s'),
    'user_id' => session_id() ?: uniqid('user_', true)
];

// Salvar dados de conversão
try {
    $result = save_conversion_data($conversion_data);
    
    if ($result) {
        // Resposta de sucesso
        echo json_encode([
            'success' => true,
            'message' => 'Conversão registrada com sucesso',
            'conversion_id' => uniqid('conv_', true)
        ]);
        
        // Log da conversão (opcional)
        error_log("A/B Test Conversion: {$data['test_id']} - {$data['variant']} - {$data['goal']}");
        
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Erro ao salvar conversão']);
    }
    
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Erro interno do servidor: ' . $e->getMessage()]);
}
?>
