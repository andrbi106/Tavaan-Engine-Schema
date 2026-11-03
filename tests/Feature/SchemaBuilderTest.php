<?php

declare(strict_types=1);

namespace Tavaan\Engine\Database\Schema\Tests\Feature;

use PHPUnit\Framework\TestCase;
use Tavaan\Engine\Database\Schema\SchemaBuilder;
use Tavaan\Engine\Database\Schema\SchemaBuilderServiceProvider;
use Tavaan\Core\Contracts\Config\RepositoryInterface;

/**
 * تست‌های Feature برای موتور SchemaBuilder.
 *
 * هر سناریوی T-NN از مستندات باید به یک متد testTNN_* تبدیل شود.
 */
final class SchemaBuilderTest extends TestCase
{
    private SchemaBuilder $engine;

    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->createMock(RepositoryInterface::class);
        $config->method('get')->willReturn(null);
        $this->engine = new SchemaBuilder($config);
    }

    /**
     * T-01: همهٔ انواع ستون → DDL درست در ۳ درایور
     */
    public function test_t01_____ddl___(): void
    {
        // TODO: پیاده‌سازی سناریوی T-01 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-01 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-02: foreign key + onDelete
     */
    public function test_t02_foreign_key__on_delete(): void
    {
        // TODO: پیاده‌سازی سناریوی T-02 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-02 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-03: index/unique/fullText
     */
    public function test_t03_indexuniquefull_text(): void
    {
        // TODO: پیاده‌سازی سناریوی T-03 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-03 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-04: `table()` (ALTER) با after
     */
    public function test_t04_table_alter__after(): void
    {
        // TODO: پیاده‌سازی سناریوی T-04 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-04 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-05: enum در ۳ درایور
     */
    public function test_t05_enum___(): void
    {
        // TODO: پیاده‌سازی سناریوی T-05 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-05 هنوز پیاده‌سازی نشده است.');
    }

    /**
     * T-06: introspect
     */
    public function test_t06_introspect(): void
    {
        // TODO: پیاده‌سازی سناریوی T-06 مطابق مستندات.
        $this->markTestIncomplete('سناریوی T-06 هنوز پیاده‌سازی نشده است.');
    }

}