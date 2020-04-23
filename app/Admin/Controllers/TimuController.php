<?php

namespace App\Admin\Controllers;

use App\Models\Timu;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TimuController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\Timu';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Timu());

        $grid->column('id', __('Id'));
        $grid->column('a1_11', __('A1 11'));
        $grid->column('a1_12', __('A1 12'));
        $grid->column('a1_13', __('A1 13'));
        $grid->column('a1_2', __('A1 2'));
        $grid->column('a1_3', __('A1 3'));
        $grid->column('a2', __('A2'));
        $grid->column('a3', __('A3'));
        $grid->column('a4', __('A4'));
        $grid->column('a5', __('A5'));
        $grid->column('a6_1', __('A6 1'));
        $grid->column('a6_2', __('A6 2'));
        $grid->column('a6_3', __('A6 3'));
        $grid->column('a6_4', __('A6 4'));
        $grid->column('a7', __('A7'));
        $grid->column('a8', __('A8'));
        $grid->column('a9', __('A9'));
        $grid->column('a10', __('A10'));
        $grid->column('a11', __('A11'));
        $grid->column('a12', __('A12'));
        $grid->column('a13', __('A13'));
        $grid->column('a14', __('A14'));
        $grid->column('a15', __('A15'));
        $grid->column('a16', __('A16'));
        $grid->column('a17', __('A17'));
        $grid->column('a18', __('A18'));
        $grid->column('a19', __('A19'));
        $grid->column('a20', __('A20'));
        $grid->column('a21', __('A21'));
        $grid->column('a22', __('A22'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Timu::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('a1_11', __('A1 11'));
        $show->field('a1_12', __('A1 12'));
        $show->field('a1_13', __('A1 13'));
        $show->field('a1_2', __('A1 2'));
        $show->field('a1_3', __('A1 3'));
        $show->field('a2', __('A2'));
        $show->field('a3', __('A3'));
        $show->field('a4', __('A4'));
        $show->field('a5', __('A5'));
        $show->field('a6_1', __('A6 1'));
        $show->field('a6_2', __('A6 2'));
        $show->field('a6_3', __('A6 3'));
        $show->field('a6_4', __('A6 4'));
        $show->field('a7', __('A7'));
        $show->field('a8', __('A8'));
        $show->field('a9', __('A9'));
        $show->field('a10', __('A10'));
        $show->field('a11', __('A11'));
        $show->field('a12', __('A12'));
        $show->field('a13', __('A13'));
        $show->field('a14', __('A14'));
        $show->field('a15', __('A15'));
        $show->field('a16', __('A16'));
        $show->field('a17', __('A17'));
        $show->field('a18', __('A18'));
        $show->field('a19', __('A19'));
        $show->field('a20', __('A20'));
        $show->field('a21', __('A21'));
        $show->field('a22', __('A22'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Timu());

        $form->text('a1_11', __('A1 11'));
        $form->text('a1_12', __('A1 12'));
        $form->text('a1_13', __('A1 13'));
        $form->text('a1_2', __('A1 2'));
        $form->text('a1_3', __('A1 3'));
        $form->text('a2', __('A2'));
        $form->text('a3', __('A3'));
        $form->text('a4', __('A4'));
        $form->text('a5', __('A5'));
        $form->text('a6_1', __('A6 1'));
        $form->text('a6_2', __('A6 2'));
        $form->text('a6_3', __('A6 3'));
        $form->text('a6_4', __('A6 4'));
        $form->text('a7', __('A7'));
        $form->text('a8', __('A8'));
        $form->text('a9', __('A9'));
        $form->text('a10', __('A10'));
        $form->text('a11', __('A11'));
        $form->text('a12', __('A12'));
        $form->text('a13', __('A13'));
        $form->text('a14', __('A14'));
        $form->text('a15', __('A15'));
        $form->text('a16', __('A16'));
        $form->text('a17', __('A17'));
        $form->text('a18', __('A18'));
        $form->text('a19', __('A19'));
        $form->text('a20', __('A20'));
        $form->text('a21', __('A21'));
        $form->text('a22', __('A22'));

        return $form;
    }
}
