<?php


use Phinx\Migration\AbstractMigration;

class PhoneBookMigration extends AbstractMigration
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
    public function change()
    {
        $this->table('phone_book')
            ->addColumn('name', 'string')
            ->addColumn('phone_number', 'string')
            ->addColumn('date_of_adding', 'date')
            ->addColumn('additional_notes', 'string')
            ->create();
    }
}
