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
    'provider' => 'auto',
    'api_key' => 'GEMINI_API_KEY',
    'model' => 'gemini-3.8-flash',
    'embedding_model' => 'gemini-embedding-001',
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
        'cohere/north-mini-code:free',
        'google/gemma-4-26b-a4b:free',
        'google/gemma-4-31b:free',
      ],
    ],
  ],
  'push' => [
    'subject' => 'mailto:you@example.com',
    'public_key' => 'CHANGE_ME',
    'private_key' => 'CHANGE_ME',
  ],
];
