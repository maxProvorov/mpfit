# MPFit Test Project

## Маршруты

1. **Ресурсные маршруты для продуктов**:
   - `GET /products`: Список продуктов.
   - `POST /products`: Создание нового продукта.
   - `GET /products/{id}`: Просмотр конкретного продукта.
   - `PUT/PATCH /products/{id}`: Обновление продукта.
   - `DELETE /products/{id}`: Удаление продукта.
2. **Ресурсные маршруты для заказов**:
   - `GET /orders`: Список заказов.
   - `POST /orders`: Создание нового заказа.
   - `GET /orders/{id}`: Просмотр конкретного заказа.
   - `PUT/PATCH /orders/{id}`: Обновление заказа.
   - `DELETE /orders/{id}`: Удаление заказа.
   - `GET /orders/{order}/complete`: Изменение статуса заказа.
