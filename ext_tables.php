<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/main', 'in2: 010 Config, General');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/performance', 'in2: 012 Config, Performance');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/language/german', 'in2: 020 Deutsch primäre Sprache');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/language/english', 'in2: 020 English primary Language');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/meta', 'in2: 030 SEO, Meta');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/headerComment', 'in2: 040 Header Comment');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/content', 'in2: 050 Content, Get*');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/logo', 'in2: 052 Content, Logo');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/nav/default', 'in2: 060 Menu, Default');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/nav/breadcrumb', 'in2: 061 Menu, Breadcrumb');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/nav/top', 'in2: 062 Menu, Top');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/nav/footer', 'in2: 063 Menu, Footer');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/nav/header', 'in2: 064 Menu, Header');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/nav/sidebar', 'in2: 065 Menu, Sidebar');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/page', 'in2: 100 Page, Simple HTML5');

?>