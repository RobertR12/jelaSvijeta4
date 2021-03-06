<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     * @throws
     * @return void
     */
    public function testBasicExample()
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/meals/create')
                ->type('title', 'mahune')
                ->type('slug', 'slugwe')
                ->select('category_id', '35')
                ->type('description', 'descrfsdfsdfsfsdfiption')
                ->select('language_id', '3')
                ->press('Create Meal');
        });


        /*$this->browse(function (Browser $browser) {
            $browser->visit('/meals/create')
                ->assertSee('title');


        });*/
    }
}
