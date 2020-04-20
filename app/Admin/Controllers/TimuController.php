<?php

namespace App\Admin\Controllers;

use App\Models\timu;
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
    protected $title = 'App\Models\timu';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new timu());

        $grid->column('id', __('Id'));
        $grid->column('1_1', __('地市'));
        $grid->column('1_2', __('机构简称'));
        $grid->column('1_3', __('网点'));
        $grid->column('2', __('暗访人员'));
        $grid->column('3', __('主办银行'));
        $grid->column('4', __('主办网点'));
        $grid->column('5', __('兑换种类'));
        $grid->column('6_1', __('兑换成功'));
        $grid->column('6_2', __('兑换不成功原因'));
        $grid->column('6_3', __('申请了预约'));
        $grid->column('6_4', __('小面额兑换推诿拒办'));
        $grid->column('7', __('存在不宜流通人民币'));
        $grid->column('8', __('小面额兑换推诿拒办'));
        $grid->column('9', __('未公布小面额预约方式'));
        $grid->column('10', __('未公布小面额投诉电话'));
        $grid->column('11', __('小面额自助兑换机具'));
        $grid->column('12', __('鉴伪机具'));
        $grid->column('13', __('残缺污损人民币兑换机具'));
        $grid->column('14', __('反假货币宣传工作站'));
        $grid->column('15', __('人民币流通管理宣传品配备'));
        $grid->column('16', __('人民币流通管理标语或视频'));
        $grid->column('17', __('其他违规收兑行为'));
        $grid->column('18', __('小面额长效供应机制'));
        $grid->column('19', __('暗访定性参考'));
        $grid->column('20', __('主要问题或违规情况'));
        $grid->column('21', __('语音转文字部分'));
        $grid->column('22', __('图片'));
        $grid->column('created_at', __('时间'));
        // $grid->column('updated_at', __('Updated at'));

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
        $show = new Show(timu::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('1_1', __('1 1'));
        $show->field('1_2', __('1 2'));
        $show->field('1_3', __('1 3'));
        $show->field('2', __('2'));
        $show->field('3', __('3'));
        $show->field('4', __('4'));
        $show->field('5', __('5'));
        $show->field('6_1', __('6 1'));
        $show->field('6_2', __('6 2'));
        $show->field('6_3', __('6 3'));
        $show->field('6_4', __('6 4'));
        $show->field('7', __('7'));
        $show->field('8', __('8'));
        $show->field('9', __('9'));
        $show->field('10', __('10'));
        $show->field('11', __('11'));
        $show->field('12', __('12'));
        $show->field('13', __('13'));
        $show->field('14', __('14'));
        $show->field('15', __('15'));
        $show->field('16', __('16'));
        $show->field('17', __('17'));
        $show->field('18', __('18'));
        $show->field('19', __('19'));
        $show->field('20', __('20'));
        $show->field('21', __('21'));
        $show->field('22', __('22'));
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
        $form = new Form(new timu());

        $form->text('1_1', __('1 1'));
        $form->text('1_2', __('1 2'));
        $form->text('1_3', __('1 3'));
        $form->text('2', __('2'));
        $form->text('3', __('3'));
        $form->text('4', __('4'));
        $form->text('5', __('5'));
        $form->text('6_1', __('6 1'));
        $form->text('6_2', __('6 2'));
        $form->text('6_3', __('6 3'));
        $form->text('6_4', __('6 4'));
        $form->text('7', __('7'));
        $form->text('8', __('8'));
        $form->text('9', __('9'));
        $form->text('10', __('10'));
        $form->text('11', __('11'));
        $form->text('12', __('12'));
        $form->text('13', __('13'));
        $form->text('14', __('14'));
        $form->text('15', __('15'));
        $form->text('16', __('16'));
        $form->text('17', __('17'));
        $form->text('18', __('18'));
        $form->text('19', __('19'));
        $form->text('20', __('20'));
        $form->text('21', __('21'));
        $form->text('22', __('22'));

        return $form;
    }
}
