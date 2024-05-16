# Aplikace telefonní seznam

1) Propojení aplikace s databází pomocí config/common.neon 
database:
	dsn: 'mysql:host=127.0.0.1;dbname=telefon'

2) Vytvoření tabulky v databázi s názvem "seznam" a sloupci ID, jmeno,      prijmeni, telefon

3) V  app/UI/Home/HomePresenter.php nastavení spojení s databází pomocí
	public function __construct(
		private Nette\Database\Explorer $database,
	) {
	}

dále načítání příspěvků z databáze a výpis výsledků v 
app/UI/Home/default.latte do tabulku

4) Vytvoření složky Edit a EditPresenteru v app/UI/Edit/EditPresenter, ve kterém je napsána funkce pro vytvoření formuláře a následně vytvoření v
app/UI/Edit/create.latte do kterého je vypsán formulář

5) V EditPresenteru zapsána nová funkce renderEdit($id) pro změnu stávajících dat v tabulce pomocí hledání ID a kontakty se upravují pomocí odkazu při kliknutí na jméno v tabulce a vykreslování přes 
app/UI/Edit/edit.latte

6) Databáze je uložena ve složce DB v .sql souboru pro exportování

7) Stránka běží na http://localhost/nette/telefon/www/


