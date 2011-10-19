{config_load file='default.conf' section='Index'}
{include file='header.part.tpl'}
</head>
<body>
{include file='title.part.tpl'}

<h2>{$smarty.config.pageTitle}</h2>

<p>This page template is located under smarty/templates</p>

<p><b>This value is set in the control file:</b> {$test}</p>

{include file='footer.part.tpl'}
