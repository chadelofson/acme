<?php

use Phinx\Migration\AbstractMigration;

class CreateTestimonialsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     */
    public function up()
    {
        $users = $this->table('testimonials');
        $users->addColumn('title', 'string')
            ->addColumn('testimonial', 'text')
            ->addColumn('user_id', 'integer')
            ->addForeignKey('user_id', 'users', 'id', ['delete' => 'cascade', 'update' => 'cascade'])
            ->addColumn('created_at', 'datetime', ['null' => true])
            ->addColumn('updated_at', 'datetime', ['null' => true])
            ->save();
    }

    public function down()
    {
        $this->dropTable('testimonials');
    }
}
