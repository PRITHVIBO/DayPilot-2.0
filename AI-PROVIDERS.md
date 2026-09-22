# DayPilot AI providers

DayPilot 2.2 removes direct Gemini API usage. The online AI layer uses OpenRouter's OpenAI-compatible chat API. `openrouter/free` dynamically selects an available free model, while the configured list provides additional free endpoints from vendors including NVIDIA and InclusionAI. OpenRouter documents the free router as a $0 route that can select models supporting tool calling.

## Production config

Add the following to server-only `config.local.php` while preserving your existing database and push settings:

```php
'ai' => [
  'provider' => 'openrouter',
  'fallback' => 'local',
  'rag' => [
    'semantic_queries' => false,
    'max_chunks' => 8,
  ],
  'openrouter' => [
    'api_key' => 'YOUR_OPENROUTER_API_KEY',
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
```

## Guaranteed local capabilities

When no online model responds, DayPilot still provides deterministic day planning, end-of-day review, simple note generation, recent-work revision prompts, offline work capture and reminder scheduling.

## Privacy

Free model endpoints can have provider-specific logging/data-use terms. Review the current model page before sending confidential or sensitive work data.
