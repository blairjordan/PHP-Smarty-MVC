{* This template defines a standard header file *}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xml:lang="en" lang="en" id="mysite">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-language" content="en" />
{if isset($smarty.config.pageKeywords)}
<meta name="keywords" content="{$smarty.config.pageKeywords}" />
{/if}
{if isset($smarty.config.pageDescription)}
<meta name="description" content="{$smarty.config.pageDescription}" />
{/if}
<title>{$smarty.config.pageTitle}</title>