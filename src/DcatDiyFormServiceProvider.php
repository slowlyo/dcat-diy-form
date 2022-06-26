<?php

namespace Slowlyo\DcatDiyForm;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Form;
use Dcat\Admin\Show\Field;

class DcatDiyFormServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function init()
    {
        parent::init();

        Form::extend('diyForm', \Slowlyo\DcatDiyForm\Form\DiyForm::class);
        Field::extend('diyForm', \Slowlyo\DcatDiyForm\Show\DiyForm::class);
    }

    public function settingForm()
    {
        return new Setting($this);
    }
}
