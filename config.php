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
      'provider' => getenv('AI_PROVIDER') ?: 'openrouter',
      'fallback' => getenv('AI_FALLBACK') ?: 'local',
      'rag' => [
          'semantic_queries' => getenv('RAG_SEMANTIC_QUERIES') === '1',
          'max_chunks' => (int)(getenv('RAG_MAX_CHUNKS') ?: 8),
      ],
      'openrouter' => [
          'api_key' => getenv('OPENROUTER_API_KEY') ?: '',
          'site_url' => getenv('OPENROUTER_SITE_URL') ?: 'https://projects.bhavyagupta.space',
          'app_name' => getenv('OPENROUTER_APP_NAME') ?: 'DayPilot',
          'models' => [
              'openrouter/free',
              'nvidia/nemotron-3-ultra-550b-a55b:free',
              'nvidia/nemotron-3.5-lightning:free',
              'inclusionai/ling-3.0-flash-fin:free',
          ],
          'embedding_model' => getenv('OPENROUTER_EMBEDDING_MODEL') ?: 'liquid/lfm-2.5-embedding-350m:free',
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
