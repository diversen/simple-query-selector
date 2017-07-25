# simple-query-selector

Very simple query-selector for e.g. XML and HTML documents.
It uses symfony `CssSelector` in order to make jQuery-like
queries on a DOM-tree. `CssSelector` rewrites xpath expressions
to CSS-selectors, which for most web-developers are much easier
to understand and work with. Css-selectors is also what e.g. jQuery
uses, which then makes it familiar to almost any web-developer. 

The `query-selector` class just wraps the functionality of 
the `CssSelector`.

## Install

	composer require diversen/simple-query-selector

## Usage

See [test.php](test.php) and [test.xml](test.xml)

## Notice

CssSelector or XPath does not like case-diffrence in the XML it searches 
through. You will need some kind of normalisation if your XML has different
cases, e.g. a tag like `<CustomerTest></CustomerTest>` will most likely cause
problems. Normalize your XML-string with a function like this: 

	$xml = preg_replace_callback("/(<\/?[^!][^>]+)/", function ($matches) {
		return strtolower($matches[1]);
	}, $xml);

## License

MIT © Dennis Iversen
