<?php

use Latte\Runtime as LR;

/** source: /var/www/html/app/Presenters/templates/@layout.latte */
final class Templated0cf4c973d extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['styles' => 'blockStyles', 'content' => 'blockContent', 'tableHead' => 'blockTableHead'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '<!doctype html>
<html lang="cs">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="no-index">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/style.css">
    ';
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('styles', get_defined_vars()) /* line 14 */;
		echo '
    <script src="/script.js"></script>

    <title>';
		if ($this->hasBlock("title")) /* line 17 */ {
			echo 'JD - ';
			$this->renderBlock('title', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('stripHtml', $ʟ_fi, $s));
			}) /* line 17 */;
		} else /* line 17 */ {
			echo 'Jan Dolejš';
		}
		echo '</title>

</head>
<body>

';
		if ($user->isLoggedIn()) /* line 22 */ {
			echo '    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="/me">Photo</a></li>
                <li class="nav-item"><a class="nav-link" href="https://ftp.jandolejs.cz">FTP</a></li>
                <li class="nav-item"><a class="nav-link" href="https://key.jandolejs.cz">Key</a></li>
                <li class="nav-item"><a class="nav-link" href="https://release.jandolejs.cz">Release</a></li>
                <li class="nav-item"><a class="nav-link" href="http://kimisek.cz">Kimisek</a></li>
                <li class="nav-item"><a class="nav-link" href="/tools">Tools</a></li>
            </ul>
            <a class="btn btn-outline-success my-2 my-sm-0" href="/logout">Log out</a>
        </div>
    </nav>
';
		}
		echo '

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:")) /* line 45 */;
		echo '">Jan Dolejš</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link ';
		if ($presenter->getName() == 'Homepage') /* line 51 */ {
			echo 'active';
		}
		echo '" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:")) /* line 51 */;
		echo '">Domů</a></li>
                    <li class="nav-item"><a class="nav-link ';
		if ($presenter->getName() == 'About') /* line 52 */ {
			echo 'active';
		}
		echo '" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("About:")) /* line 52 */;
		echo '">O mně</a></li>
                    <li class="nav-item"><a class="nav-link ';
		if ($presenter->getName() == 'Kontakt') /* line 53 */ {
			echo 'active';
		}
		echo '" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Kontakt:")) /* line 53 */;
		echo '">Kontakt</a></li>
                    <!--<li class="nav-item"><a class="nav-link" n:href="Blog:">Blog</a></li>-->
                    <!--<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" >
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>-->
                </ul>
                <!--<form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>-->
            </div>
        </div>
</nav>


';
		$iterations = 0;
		foreach ($flashes as $flash) /* line 76 */ {
			echo '<div';
			echo ($ʟ_tmp = array_filter(['alert', 'alert-' . $flash->type])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 76 */;
			echo '>';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 76 */;
			echo '</div>
';
			$iterations++;
		}
		echo "\n";
		$this->renderBlock('content', get_defined_vars()) /* line 78 */;
		echo '

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>


';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['flash' => '76', 'item' => '89'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block styles} on line 14 */
	public function blockStyles(array $ʟ_args): void
	{
		
	}


	/** {block content} on line 78 */
	public function blockContent(array $ʟ_args): void
	{
		
	}


	/** {define tableHead} on line 86 */
	public function blockTableHead(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '    <thead>
    <tr>
';
		$iterations = 0;
		foreach ($head as $item) /* line 89 */ {
			echo '        <th scope="col">';
			echo LR\Filters::escapeHtmlText(($this->filters->firstUpper)($item)) /* line 89 */;
			echo '</th>
';
			$iterations++;
		}
		echo '    </tr>
    </thead>
';
	}

}
