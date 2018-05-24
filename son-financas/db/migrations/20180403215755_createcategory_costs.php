<?php

use Phinx\Migration\AbstractMigration;

class CreatecategoryCosts extends AbstractMigration
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
     *
     * @executemigrations: vendor/bin/phinx.bat migrate
     * @rollback: vendor/bin/phinx.bat rollback;
     *
     * @parametros:
     * -t=0 retorna para posicao 0 da migração;
     * -e definem em qual ambiente sera executado a migracao
     */
//    public function change()
//    {
//
//    }

    /**
     * @Metodo up e para criar e alterar banco de dados
     *
     */

    public function up()
    {
        $this->table('category_costs')
            ->addColumn('name','string')
            ->addColumn('create_at','datetime')
            ->addColumn('update_at','datetime')
            ->save();
    }

    /**
     * @Metodo down volta verçoes do banco
     *
     */

    public function down()
    {
        $this->dropTable('category_costs');
    }


}
