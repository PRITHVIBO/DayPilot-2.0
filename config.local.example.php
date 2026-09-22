<?php
return [
  'app' => [
    'base_url' => 'https://projects.bhavyagupta.space',
    'cookie_secure' => true,
  ],
  'db' => [
    'host' => 'localhost',
    'port' => 3306,
    'name' => 'hostinger_db',
    'user' => 'hostinger_user',
    'pass' => 'CHANGE_ME',
  ],
  'ai' => [
    'provider' => 'openrouter',
    'fallback' => 'local',
    'rag' => [
      'semantic_queries' => false,
      'max_chunks' => 8,
    ],
    'openrouter' => [
      'api_key' => 'OPENROUTER_API_KEY',
      'site_url' => 'https://projects.bhavyagupta.space',
      'app_name' => 'DayPilot',
      'models' => [
        'openrouter/free',
        'nvidia/nemotron-3-ultra-550b-a55b:free',
        'nvidia/nemotron-3.5-lightning:free',
        'inclusionai/ling-3.0-flash-fin:free',
      ],
      'embedding_model' => 'liquid/lfm-2.5-embedding-350m:free',
    ],
  ],
  'push' => [
    'subject' => 'mailto:you@example.com',
    'public_key' => 'CHANGE_ME',
    'private_key' => 'CHANGE_ME',
  ],
];
