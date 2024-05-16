<?php

declare(strict_types=1);

namespace App\UI\Home;

use Nette;


final class HomePresenter extends Nette\Application\UI\Presenter
{
    // připojení k databázi
    public function __construct(
		private Nette\Database\Explorer $database,
    ) {
        
    }
    public function renderDefault(): void
    {
      //načítaní příspěvků z databáze
      $this->template->seznam = $this->database
        ->table('seznam');
    }

}
