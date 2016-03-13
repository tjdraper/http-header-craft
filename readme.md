# HTTP Header for Craft

Set various HTTP header properties from your templates.

This is a log like Rob Sanchez's [HTTP Header](https://github.com/rsanchez/http_header) plugin for ExpressionEngine. I use that a lot when working with EE and I needed a way to set `application/json` header (among other things) in Craft, so I wrote this Twig Extension.

```
{{ httpHeader({
	devMode: false,
	disposition: "attachment",
	fileName: "myfile.pdf",
	contentType: "application/json",
	status: 404,
	lang: en,
	accessOrigin: "*"
}) }}
```

## License

Copyright 2016 TJ Draper, BuzzingPixel

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

	http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.