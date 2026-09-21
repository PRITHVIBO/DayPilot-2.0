<?php
declare(strict_types=1);

return [
    'app' => [
        'name' => 'DayPilot',
        'base_url' => 'http://localhost:8081',
        'timezone' => 'Asia/Kolkata',
        'cookie_secure' => false,
    ],
    'db' => [
        'host' => getenv('DB_HOST') ?: 'db',
        'port' => (int)(getenv('DB_PORT') ?: 3306),
        'name' => getenv('DB_NAME') ?: 'daypilot',
        'user' => getenv('DB_USER') ?: 'daypilot',
        'pass' => getenv('DB_PASS') ?: 'change-me',
        'charset' => 'utf8mb4',
    ],
    'ai' => [
        'provider' => getenv('AI_PROVIDER') ?: 'auto',
        'api_key' => getenv('GEMINI_API_KEY') ?: '',
        'model' => getenv('GEMINI_MODEL') ?: 'gemini-3.8-flash',
        'embedding_model' => getenv('GEMINI_EMBEDDING_MODEL') ?: 'gemini-embedding-001',
        'rag' => [
            'semantic_queries' => getenv('RAG_SEMANTIC_QUERIES') === '1',
            'max_chunks' => (int)(getenv('RAG_MAX_CHUNKS') ?: 8),
        ],
        'openrouter' => [
            'api_key' => getenv('OPENROUTER_API_KEY') ?: '',
            'site_url' => getenv('OPENROUTER_SITE_URL') ?: '',
            'app_name' => getenv('OPENROUTER_APP_NAME') ?: 'DayPilot',
            'models' => [
                'openrouter/free',
                'cohere/north-mini-code:free',
                'google/gemma-4-26b-a4b:free',
                'google/gemma-4-31b:free',
            ],
        ],
    ],
    'push' => [
        'subject' => getenv('VAPID_SUBJECT') ?: 'mailto:admin@example.com',
        'public_key' => getenv('VAPID_PUBLIC_KEY') ?: '',
        'private_key' => getenv('VAPID_PRIVATE_KEY') ?: '',
    ],
    'google' => [
        'client_id' => getenv('GOOGLE_CLIENT_ID') ?: '',
        'client_secret' => getenv('GOOGLE_CLIENT_SECRET') ?: '',
        'redirect_uri' => getenv('GOOGLE_REDIRECT_URI') ?: '',
    ],
];
