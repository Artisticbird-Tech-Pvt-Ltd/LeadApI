# ArtisticBird Lead API

Simple Laravel package to send leads directly to the ArtisticBird CRM.

## Requirements

* PHP 8.1+
* Laravel 9, 10, 11, or 12

---

## Installation

Install the package using Composer:

```bash
composer require artisticbird-tech/lead-api
```

Publish the configuration file:

```bash
php artisan vendor:publish --tag=leadapi-config
```

---

## Configuration

Add your API key to your `.env` file.

```env
LEAD_API_KEY=YOUR_API_KEY
```

> Contact ArtisticBird support to obtain your API key.

---

## Usage

### Basic Example

```php
use ArtisticBird\LeadApi\LeadApi;

$response = LeadApi::store([
    'name' => 'John Doe',
    'email' => 'john@example.com',
    'phone' => '9999999999',
]);
```

### Advanced Example

```php
use ArtisticBird\LeadApi\LeadApi;

$response = LeadApi::store([
    'name' => 'John Doe',
    'email' => 'john@example.com',
    'phone' => '9999999999',
    'source' => 'website',
    'priority' => 'cold',
    'status' => 'new',
    'extra' => [
        'company' => 'Example Ltd',
        'message' => 'Interested in your services',
    ],
]);
```

---

## Supported Fields

| Field    | Type   | Required |
| -------- | ------ | -------- |
| name     | string | Yes      |
| email    | string | No       |
| phone    | string | No       |
| source   | string | No       |
| priority | string | No       |
| status   | string | No       |
| extra    | array  | No       |

---

## Response Example

```php
[
    'status' => 200,
    'success' => true,
    'data' => [
        'success' => true,
        'message' => 'Lead stored successfully',
        'lead_id' => 123
    ]
]
```

---

## Support

For API key requests or technical support, please contact:

[info@artisticbird.com](mailto:info@artisticbird.com)

---

## License

MIT License
