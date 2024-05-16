<?php
namespace App\UI\Edit;

use Nette;
use Nette\Application\UI\Form;

final class EditPresenter extends Nette\Application\UI\Presenter
{
	public function __construct(
		private Nette\Database\Explorer $database,
	) {
	}

        protected function createComponentNovyForm(): Form
    {
        //vytvoření formuláře
        $form = new Form;
        //vytvoření inputu v formuláři
        $form->addText('jmeno', 'Jméno:')
            ->setRequired();
        $form->addText('prijmeni', 'Přijmení:')
            ->setRequired();
        $form->addInteger('telefon', 'Telefon:')
            ->setRequired();
        //odesílací tlačitko
        $form->addSubmit('send', 'Uložit');
        $form->onSuccess[] = $this->NovyFormSucceeded(...);

        return $form;
    }

        private function NovyFormSucceeded(array $data): void
    {
        $id = $this->getParameter('id');


        if ($id) {
            //získání dat z databáze a jejich updatování
            $post = $this->database
                ->table('seznam')
                ->get($id);
            $post->update($data);
    
        } else {
            //pokud nejsou data v databázi, tak je vloží
            $post = $this->database
                ->table('seznam')
                ->insert($data);
        }

        //vytvoření zprávy o úspěšném uložení do databáze
        $this->flashMessage("Příspěvek byl uložen.", 'success');
        //přesměrování na stránku Home/default.latte
        $this->redirect('Home:default');
    }

    public function renderEdit($id): void
    {
        //uprava uživatele pomoci hledání ID
        $seznam = $this->database
            ->table('seznam')
            ->get($id);
    
        //chyba pokud nebyl uživatel nalezen
        if (!$seznam) {
            $this->error('Uživatel nenalezen');
        }
    
        //vypíše hodnoty z tabulky
        $this->getComponent('novyForm')
            ->setDefaults($seznam->toArray());
    }
        
}
