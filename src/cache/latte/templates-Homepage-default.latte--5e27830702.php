<?php

use Latte\Runtime as LR;

/** source: /var/www/html/app/Presenters/templates/Homepage/default.latte */
final class Template5e27830702 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '

';
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 2 */;
		echo "\n";
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 2 */
	public function blockContent(array $ʟ_args): void
	{
		echo '    <h1 class="h center">Jan Dolejš</h1>

    <div class="center">
        <p>E-mail: <a href="mailto:me@jandolejs.cz" id="email">me@jandolejs.cz</a></p>
        <div class="list">
            <a href="https://www.linkedin.com/in/dolejsjan/">LinkedIn</a>
            <a href="https://github.com/jandolejs">GitHub</a>
            <a href="https://honzadolejs.mojeid.cz/" id="vcard">MojeID</a>
            <a href="/bank">Platby</a>
        </div>
    </div>
';
	}

}
