<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: C:\xampp\htdocs\nette\telefon\app\UI\Seznam/show.latte */
final class Template_03ed57155d extends Latte\Runtime\Template
{
	public const Source = 'C:\\xampp\\htdocs\\nette\\telefon\\app\\UI\\Seznam/show.latte';

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
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '
<p><a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Home:default')) /* line 3 */;
		echo '">← zpět na tabulku uživatelů</a></p>


	<table border="1" style="border-collapse:collapse; width:30%;">
		<thead>
			<tr class="table-primary">
				<th>Id</th>
				<th>Jméno</th>
				<th>Přijmení</th>
				<th>Telefon</th>
			</tr>
		</thead>
		<tbody>
				<tr>
					<td>';
		echo LR\Filters::escapeHtmlText($seznam->id) /* line 17 */;
		echo '</td>
					<td>';
		echo LR\Filters::escapeHtmlText($seznam->jmeno) /* line 18 */;
		echo '</td>
					<td>';
		echo LR\Filters::escapeHtmlText($seznam->prijmeni) /* line 19 */;
		echo '</td>
					<td>';
		echo LR\Filters::escapeHtmlText($seznam->telefon) /* line 20 */;
		echo '</td>
				</tr>
		</tbody>
	</table>
';
	}
}
