<?php

declare(strict_types=1);

namespace Leeto\MoonShine\Tests\Fields;

use Leeto\MoonShine\Fields\Select;
use Leeto\MoonShine\Tests\TestCase;

class SelectTest extends TestCase
{
    public function test_make()
    {
        $field = Select::make('Select');

        $this->assertEquals('select', $field->field());
        $this->assertEquals('select', $field->name());
        $this->assertEquals('select', $field->id());
        $this->assertEquals('Select', $field->label());
    }

    public function test_multiple()
    {
        $field = Select::make('Select')->multiple();

        $this->assertEquals('select', $field->field());
        $this->assertEquals('select[]', $field->name());
        $this->assertEquals('select', $field->id());
        $this->assertEquals('Select', $field->label());
    }
}
