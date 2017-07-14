<?php

use Phinx\Migration\AbstractMigration;
use Cake\Auth\defaultPasswordHasher;

class CreateBookmarksSeedMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
        $faker = \Faker\Factory::create();
        $populator = new Faker\ORM\CakePHP\Populator($faker);

        $populator->addEntity('Bookmarks', 200, [
            'title' => function() use ($faker) {
                return $faker->sentence($nbWords = 3, $variableNbWords = true);
            },
              'description' => function() use ($faker) {
                return $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
            },
              'url' => function() use ($faker) {
                return $faker->url;
            },
            'created' => function() use ($faker) {
                return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
            },
            'modified' => function() use ($faker) {
                return $faker->dateTimeBetween($startDate = 'now', $endDate = 'now');
            },
            'user_id' => function() {
                return rand(1, 51);
            }
        ]);

        $populator->execute();
    }
}
