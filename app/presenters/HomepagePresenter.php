<?php

namespace App\Presenters;

use Nette;
use Nette\Application\UI;

class HomepagePresenter extends Nette\Application\UI\Presenter
{
    protected function createComponentLoginForm()
    {
        $form = new UI\Form;
        $form->addText('name', 'Jméno týmu:')->setRequired('Zadejte prosím jméno týmu.');
        $form->addPassword('password', 'Heslo:')->setRequired('Zadejte prosím heslo.');
        $form->addSubmit('login', 'PŘIHLÁSIT');
        $form->onSuccess[] = [$this, 'loginFormSucceeded'];
        return $form;
    }
}
