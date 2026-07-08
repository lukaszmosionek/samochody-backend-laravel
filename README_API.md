# Dokumentacja API

## Endpoints

### GET /api/cars
Zwraca listę samochodów.

Przykład odpowiedzi:

```json
{
  "data": [
    {
      "id": 1,
      "make": "Toyota",
      "model": "Corolla",
      "year": 2020,
      "price": "65000.00",
      "mileage": 45000,
      "location": "Warszawa",
      "description": "Dobry stan",
      "status": "available",
      "created_at": "2026-07-08T10:31:59.000000Z",
      "updated_at": "2026-07-08T10:31:59.000000Z"
    }
  ],
  "links": {
    "first": "http://127.0.0.1:8000/api/cars?page=1",
    "last": "http://127.0.0.1:8000/api/cars?page=1",
    "prev": null,
    "next": null
  },
  "meta": {
    "current_page": 1,
    "per_page": 10,
    "total": 1
  }
}
```

### POST /api/cars
Tworzy nowe ogłoszenie samochodu.

Body:

```json
{
  "make": "Toyota",
  "model": "Corolla",
  "year": 2020,
  "price": 65000,
  "mileage": 45000,
  "location": "Warszawa",
  "description": "Dobry stan",
  "status": "available"
}
```

Wymagane pola:
- `make`
- `model`
- `year`
- `price`
- `mileage`

### GET /api/cars/{id}
Zwraca jedno ogłoszenie po ID.

### PUT /api/cars/{id}
Aktualizuje ogłoszenie po ID.

### DELETE /api/cars/{id}
Usuwa ogłoszenie po ID.

## Pola samochodu

- `id` - numer ogłoszenia
- `make` - marka
- `model` - model
- `year` - rok produkcji
- `price` - cena
- `mileage` - przebieg
- `location` - lokalizacja
- `description` - opis
- `status` - status (`available` lub `sold`)
- `created_at` - data utworzenia
- `updated_at` - data aktualizacji

## Przykład uruchomienia

```bash
php artisan serve
```

Następnie wywołaj:

```bash
curl http://127.0.0.1:8000/api/cars
```
