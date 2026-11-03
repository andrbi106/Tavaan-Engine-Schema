# Tavaan Engine — Schema

> **ساختار دیتابیس** — موتور Schema در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.schema` |
| نام | `Schema` |
| عنوان فارسی | ساختار دیتابیس |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Database\Schema` |
| نوع | `engine` |
| Facade | `Schema` (accessor: `schema`) |

## کلاس‌های اصلی

- `src/Blueprint.php`
- `src/ColumnDefinition.php`
- `src/SchemaBuilder.php`
- `src/SchemaManager.php`
- `src/SchemaServiceProvider.php`

## Service Providerها

- `Tavaan\Engine\Database\Schema\SchemaServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `database`

## پیکربندی

- فایل پیکربندی: `config/schema.php`
- کلید: `schema`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Schema.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Schema`** (این مخزن) | موتور Schema |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
