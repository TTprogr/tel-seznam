<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\nette\telefon\app\UI\Home/default.latte */
final class Template_e6d362a33b extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\nette\\telefon\\app\\UI\\Home/default.latte';

	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
		echo '

';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['seznami' => '16'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '	<h1>Telefonní seznam</h1>

	<div class="table table-striped">
	<table border="2" style="width:35%; height:200px">
		<thead>
			<tr class="table-primary">
				<th>Id</th>
				<th>Jméno</th>
				<th>Příjmení</th>
				<th>Telefon</th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody>
';
		foreach ($seznam as $seznami) /* line 16 */ {
			echo '				<tr>
					<td>';
			echo LR\Filters::escapeHtmlText($seznami->id) /* line 18 */;
			echo '</td>
					<td>';
			echo LR\Filters::escapeHtmlText($seznami->jmeno) /* line 19 */;
			echo '</td>
					<td>';
			echo LR\Filters::escapeHtmlText($seznami->prijmeni) /* line 20 */;
			echo '</td>
					<td>';
			echo LR\Filters::escapeHtmlText($seznami->telefon) /* line 21 */;
			echo '</td>
					<td><a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Edit:edit', [$seznami->id])) /* line 22 */;
			echo '"><button class="btn btn-primary">Edit</button></a></td>
				</tr>
';

		}

		echo '		</tbody>
	</table>
	</div>
	<br>

	<br>
	

';
	}
}
