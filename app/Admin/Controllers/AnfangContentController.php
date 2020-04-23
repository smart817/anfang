<?php

namespace App\Admin\Controllers;

use App\Models\AnfangContent;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AnfangContentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'App\Models\AnfangContent';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new AnfangContent());

        $grid->column('id', __('Id'));
        $grid->column('keyname', __('Keyname'));
        $grid->column('value', __('Value'));
        $grid->column('created_at')->date('Y-m-d H:i:s');
        $grid->column('updated_at')->date('Y-m-d H:i:s');


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
        $show = new Show(AnfangContent::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('keyname', __('Keyname'));
        $show->field('value', __('Value'));
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
        $form = new Form(new AnfangContent());

        $form->text('keyname', __('Keyname'));
        $form->text('value', __('Value'));

        return $form;
    }
}
