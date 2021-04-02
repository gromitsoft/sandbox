<?php namespace Sandbox\Landing\Components;

use Cms\Classes\ComponentBase;

class Page extends ComponentBase
{
    public function componentDetails(): array
    {
        return [
            'name' => 'Landing page Component',
            'description' => 'Simple landing page component'
        ];
    }

    public function defineProperties(): array
    {
        return [
            'page' => [
                'title' => 'Page',
                'description' => 'Select the page to be displayed',
                'type' => 'dropdown'
            ]
        ];
    }


    /**
     * Получим список страниц для выбора
     * в выпадающем списке в настройках компонента на странице
     * @return array
     */
    public function getPageOptions(): array
    {
        return \Sandbox\Landing\Models\Page::lists('title', 'id');
    }

    /**
     * Получим содержимое выбранной страницы
     * и добавим ее в переменную landing
     * @return void
     */
    public function onRun(): void
    {
        $this->page['landing'] = \Sandbox\Landing\Models\Page::find($this->property('page'));
    }
}
